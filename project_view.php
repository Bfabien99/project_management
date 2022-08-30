<?php include('includes/header.php')?>
<?php if(isset($_GET['uid']) && !empty($_GET['uid'])){
    $project = getProject(escapeString($_GET['uid']));
    if(!$project){
        header('location:./');
    }
}else{
    header('location:./');
}
?>
<div id="view" class="d-flex">
    <?php var_dump($project); ?>
</div>
<?php include('includes/footer.php')?>