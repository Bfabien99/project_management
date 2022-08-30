<?php include('includes/header.php')?>
<div id="new" class="d-flex">
<h5>Edit project</h5>
<a href="./" class="btn-secondary">Back</a>

<form action="" method="post" id="projectform">
    <div class="d-flex">
        <label for="title">Project Title</label>
        <input type="text" name="title" id="title" value="<?php echo $_POST['title'] ?? $title; ?>">
        <?php echo $error['title'] ?? ""; ?>
    </div>
    <div class="d-flex">
        <label for="description">Project Description</label>
        <textarea name="description" id="description" ><?php echo $_POST['description'] ?? $description; ?></textarea>
        <?php echo $error['description'] ?? ""; ?>
    </div>
    <div class="d-flex">
        <label for="author">Project Author</label>
        <textarea name="author" id="author"><?php echo $_POST['author'] ?? $author; ?></textarea>
        <?php echo $error['author'] ?? ""; ?>
    </div>
    <div class="d-flex">
        <label for="language">Project Language</label>
        <textarea name="language" id="language"><?php echo $_POST['language'] ?? $language; ?></textarea>
        <?php echo $error['language'] ?? ""; ?>
    </div>
    <div class="d-flex">
        <label for="etat">Project Etat</label>
        <input type="text" name="etat" id="etat" value="<?php echo $_POST['etat'] ?? $etat; ?>">
        <?php echo $error['etat'] ?? ""; ?>
    </div>
    <div class="d-flex">
        <label for="start">Project Start</label>
        <input type="text" name="start" id="start" value="<?php echo $_POST['start'] ?? $start; ?>">
        <?php echo $error['start'] ?? ""; ?>
    </div>
    <div class="d-flex">
        <label for="url">Project Url</label>
        <input type="text" name="url" id="url" value="<?php echo $_POST['url'] ?? $url; ?>">
        <?php echo $error['url'] ?? ""; ?>
    </div>
    <input type="submit" name="update" value="Update">
</form>
</div>
<?php include('includes/footer.php')?>