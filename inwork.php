<?php include('includes/header.php') ?>
<?php $projects = getNotFinishedProjects();?>
<div id="inwork" class="d-flex">
<h5>Not Finished Projects</h5>
<section class="recent">
        <div class="projects">
            <?php if (!empty($projects)) : ?>
                <?php foreach ($projects as $project) : ?>
                    <a class="seeproject" href="project_view.php?uid=<?php echo $project['uid']; ?>">
                        <div class="project" style="border: 1px solid <?php echo $project['color'] ?>;">
                            <h3 class="project-title"><span style="background-color: <?php echo $project['color'] ?>;"></span><?php echo $project['title'] ?></h3>
                            <hr>
                            <p>Languages : #<?php echo  str_replace(' ', ' #', $project['language']); ?></p>
                            <p>Started : <?php echo  date('M, jS Y', strtotime($project['start'])); ?></p>
                            <p>Posted : <?php echo  date('M, jS Y', strtotime($project['created'])); ?></p>
                        </div>
                    </a>
                <?php endforeach; ?>
            <?php else : ?>
                Nothing yet
            <?php endif; ?>
        </div>
    </section>
</div>
<?php include('includes/footer.php')?>