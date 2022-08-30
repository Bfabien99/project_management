<?php include('includes/header.php')?>
<?php
$error = [];
$success = false;

if(isset($_POST['create'])){
    if(empty($_POST['title'])){
        $error['title'] = "<p class='error'>Fill this field</p>";
    }else{
        $title = $_POST['title'];
    }

    if(empty($_POST['description'])){
        $error['description'] = "<p class='error'>Fill this field</p>";
    }else{
        $description = $_POST['description'];
    }

    if(empty($_POST['author'])){
        $error['author'] = "<p class='error'>Fill this field</p>";
    }else{
        $author = $_POST['author'];
    }

    if(empty($_POST['language'])){
        $error['language'] = "<p class='error'>Fill this field</p>";
    }else{
        $language = $_POST['language'];
    }

    if(empty($_POST['start'])){
        $error['start'] = "<p class='error'>Fill this field</p>";
    }else{
        $start = $_POST['start'];
    }

    if(!isset($_POST['etat'])){
        $error['etat'] = "<p class='error'>Fill this field</p>";
    }else{
        $etat = $_POST['etat'];
    }

    if(empty($_POST['url'])){
        $error['url'] = "<p class='error'>Fill this field</p>";
    }else{
        $url = $_POST['url'];
    }

    if(!empty($title) && !empty($description) && !empty($start) && !empty($language) && !empty($author) && !empty($url)){
        $uid = uniqid();

        if(!isProject($title,$description,$url)){
            if(insertProject($uid,$title,$description,$start,$language,$author,$etat,$url)){
            $success = true;
            }else{
                $error['query'] = "<p class='error'>Sorry, an error occured. Try later</p>";
            }
        }else{
            $error['query'] = "<p class='error'>Sorry, this project exist</p>";
        }
        
    }
}
?>
<div id="new" class="d-flex">
<h5>Add a new project</h5>
<a href="./" class="btn-secondary">Back</a>

<form action="" method="post" id="projectform">
    <?php if($success):?>
        <p class="success">Project saved!</p>
    <?php else:?>
    <?php echo $error['query'] ?? ""; ?>
    <div class="d-flex group">
        <label for="title">Project Title</label>
        <input type="text" name="title" id="title" value="<?php echo $_POST['title'] ?? ""; ?>">
        <?php echo $error['title'] ?? ""; ?>
    </div>
    <div class="d-flex group">
        <label for="description">Project Description</label>
        <textarea name="description" id="description" ><?php echo $_POST['description'] ?? ""; ?></textarea>
        <?php echo $error['description'] ?? ""; ?>
    </div>
    <div class="d-flex group">
        <label for="author">Project Author</label>
        <textarea name="author" id="author"><?php echo $_POST['author'] ?? ""; ?></textarea>
        <?php echo $error['author'] ?? ""; ?>
    </div>
    <div class="d-flex group">
        <label for="language">Project Language</label>
        <textarea name="language" id="language"><?php echo $_POST['language'] ?? ""; ?></textarea>
        <?php echo $error['language'] ?? ""; ?>
    </div>
    <div class="d-flex group">
        <label for="etat">Project Etat</label>
        <select name="etat" id="etat">
            <option value="0">not finished</option>
            <option value="1">finished</option>
        </select>
        <?php echo $error['etat'] ?? ""; ?>
    </div>
    <div class="d-flex group">
        <label for="start">Project Start</label>
        <input type="date" name="start" id="start" value="<?php echo $_POST['start'] ?? ""; ?>">
        <?php echo $error['start'] ?? ""; ?>
    </div>
    <div class="d-flex group">
        <label for="url">Project Url</label>
        <input type="url" name="url" id="url" value="<?php echo $_POST['url'] ?? ""; ?>">
        <?php echo $error['url'] ?? ""; ?>
    </div>
    <input type="submit" name="create" value="Save">
    <?php endif;?>
</form>
</div>
<?php include('includes/footer.php')?>