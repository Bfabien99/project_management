<?php include('includes/header.php') ?>
<?php
$countprojects = count(getProjects());
$countstarred = count(getStarredProjects());
$countfinished = count(getFinishedProjects());
$countnotfinished = count(getNotFinishedProjects());

$projects = getProjects(3);
$starred = getStarredProjects(3);
$finished = getFinishedProjects(3);
$notfinished = getNotFinishedProjects(3);
?>
<div id="index" class="d-flex">
    <h5>Dashboard</h5>
    <section class="top-container">
        <div class="content">
            <i>^</i>
            <h3>Total Project</h3>
            <p><?php echo $countprojects ?? 0; ?></p>
        </div>

        <div class="content">
            <i>^</i>
            <h3>Starred</h3>
            <p><?php echo $countstarred ?? 0; ?></p>
        </div>

        <div class="content">
            <i>^</i>
            <h3>Finished</h3>
            <p><?php echo $countfinished ?? 0; ?></p>
        </div>

        <div class="content">
            <i>^</i>
            <h3>Not finished</h3>
            <p><?php echo $countnotfinished ?? 0; ?></p>
        </div>
    </section>
    <section class="middle-container d-flex">
        <div class="recent">
            <h4><span>03</span> recents Projects</h4>
            <div class="projects">
                <?php if(!empty($projects)):?>
                    <?php foreach($projects as $project):?>
                    <div class="project">
                        <h3 class="project-title"><?php echo $project['title'] ?> <a href="see.php?uid=<?php echo $project['uid'];?>">>></a> </h3>
                        <hr>
                        <p>Languages : #<?php echo  str_replace(' ',' #',$project['language']);?></p>
                        <p>Started : <?php echo  date('M, jS Y',strtotime($project['start']));?></p>
                        <p>Posted : <?php echo  date('M, jS Y',strtotime($project['created']));?></p>
                    </div>
                    <?php endforeach;?>
                <?php else:?>
                    Aucun projet enregistré pour l'instant
                <?php endif;?>
                
                
            </div>
        </div>
        <div class="recent">
            <h4><span>03</span> recents Starreds</h4>
            <div class="projects">
                <?php if(!empty($starred)):?>
                    <?php foreach($starred as $star):?>
                    <div class="project">
                        <h3 class="project-title"><?php echo $star['title'] ?> <a href="see.php?uid=<?php echo $star['uid'];?>">>></a> </h3>
                        <hr>
                        <p>Languages : #<?php echo  str_replace(' ',' #',$star['language']);?></p>
                        <p>Started : <?php echo  date('M, jS Y',strtotime($star['start']));?></p>
                        <p>Posted : <?php echo  date('M, jS Y',strtotime($star['created']));?></p>
                    </div>
                    <?php endforeach;?>
                <?php else:?>
                    Aucun projet enregistré pour l'instant
                <?php endif;?>
                
                
            </div>
        </div>
        <div class="recent">
            <h4><span>03</span> recents Finished</h4>
            <div class="projects">
                <?php if(!empty($finished)):?>
                    <?php foreach($finished as $finish):?>
                    <div class="project">
                        <h3 class="project-title"><?php echo $finish['title'] ?> <a href="see.php?uid=<?php echo $finish['uid'];?>">>></a> </h3>
                        <hr>
                        <p>Languages : #<?php echo  str_replace(' ',' #',$finish['language']);?></p>
                        <p>Started : <?php echo  date('M, jS Y',strtotime($finish['start']));?></p>
                        <p>Posted : <?php echo  date('M, jS Y',strtotime($finish['created']));?></p>
                    </div>
                    <?php endforeach;?>
                <?php else:?>
                    Aucun projet enregistré pour l'instant
                <?php endif;?>
                
                
            </div>
        </div>
    </section>
</div>
<?php include('includes/footer.php') ?>