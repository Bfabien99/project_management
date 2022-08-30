<?php
function connect($dbHost, $dbUsername, $dbPassword, $dbName)
{
    $db = new mysqli(
        $dbHost,
        $dbUsername,
        $dbPassword,
        $dbName
    );
    if ($db->connect_error) {
        die("Cannot connect to database: \n"
            . $db->connect_error . "\n"
            . $db->connect_error);
    }
    return $db;
}

function escapeString($string)
{
    global $db;
    $new_string = mysqli_real_escape_string($db, trim(strtolower($string)));
    return $new_string;
}

function insertProject($uid,$title,$description,$start,$language,$author,$etat,$url,$color){
    global $db;

    $sql = "INSERT INTO projects (uid, title, description, start, language, author, etat, url, color) ";
    $sql .= " VALUES('{$uid}','{$title}','{$description}','{$start}','{$language}','{$author}','{$etat}','{$url}','{$color}')";

    if($db->query($sql)){
        return true;
    }else{
        return false;
    }
}

function updateProject($uid,$title,$description,$start,$language,$author,$etat,$url){
    global $db;

    $sql = "UPDATE projects SET ";
    $sql .= "title = '{$title}', ";
    $sql .= "description = '{$description}', ";
    $sql .= "start = '{$start}', ";
    $sql .= "language = '{$language}', ";
    $sql .= "author = '{$author}', ";
    $sql .= "etat = '{$etat}', ";
    $sql .= "url = '{$url}' ";
    $sql .= " WHERE uid = '{$uid}'";

    if($db->query($sql)){
        return true;
    }else{
        return false;
    }
}

function isProject($title, $description, $url)
{
    global $db;
    $sql = "SELECT * FROM projects WHERE title = '$title' AND description = '$description' AND url = '$url'";
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        return true;
    } else {
        return false;
    }
}

function getProject($uid)
{
    global $db;
    $sql = "SELECT * FROM projects WHERE uid = '$uid'";
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();
        return $data;
    } else {
        return false;
    }
}

function getProjects($limit = 100)
{
    global $db;
    $data = [];

    $sql = "SELECT * FROM projects ORDER BY created DESC LIMIT $limit";
    $results = $db->query($sql);

    if ($results->num_rows > 0) {
        while ($row = $results->fetch_assoc()) {
            $data[] = $row;
        }
    }
    return $data;
}

function getFinishedProjects($limit = 100)
{
    global $db;
    $data = [];

    $sql = "SELECT * FROM projects WHERE etat = 1 ORDER BY created DESC LIMIT $limit";
    $results = $db->query($sql);

    if ($results->num_rows > 0) {
        while ($row = $results->fetch_assoc()) {
            $data[] = $row;
        }
    }
    return $data;
}

function getNotFinishedProjects($limit = 100)
{
    global $db;
    $data = [];

    $sql = "SELECT * FROM projects WHERE etat = 0 ORDER BY created DESC LIMIT $limit";
    $results = $db->query($sql);

    if ($results->num_rows > 0) {
        while ($row = $results->fetch_assoc()) {
            $data[] = $row;
        }
    }
    return $data;
}

function getStarredProjects($limit = 100)
{
    global $db;
    $data = [];

    $sql = "SELECT * FROM projects WHERE stared = 1 ORDER BY created DESC LIMIT $limit";
    $results = $db->query($sql);

    if ($results->num_rows > 0) {
        while ($row = $results->fetch_assoc()) {
            $data[] = $row;
        }
    }
    return $data;
}