<?php 
    include('config.php');
    include('functions.php');
    $db = connect(
        DB_HOST,
        DB_USERNAME,
        DB_PASSWORD,
        DB_NAME
    );?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/jquery.js"></script>
    <title>My Project Management App</title>
</head>
<body>
    <header>
        <a href="./" class="logo"><span>P</span><span>M</span></a>
        <div class="menuToggle"></div>
        <ul class="navigation">
            <li>
                <a href="./">Home</a>
            </li>
            <li>
                <a href="./starred.php">Starred</a>
            </li>
            <li>
                <a href="./inwork.php">In work</a>
            </li>
            <li>
                <a href="./finished.php">Finished</a>
            </li>
            <li>
                <a href="./manage.php">Manage Projects</a>
            </li>
        </ul>
    </header>

    <main>