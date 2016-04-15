<?php require_once('inc/header.php') ?>
<?php require_once('inc/navigation.php') ?>  

<!-- START: Main Content -->
<!-- jumbotron -->
<div class="jumbotron">
    <div class="container">
            <h1>June 10-12</h1>
            <p>Sun Prairie Ice Arena</p>
    </div>
</div><!-- ./jumbotron -->

<div class="container-fluid">
    <div class="container">
        <div class="col-sm-12 bg-gold">
            <h1 class="text-center text-grey">June 10-12</h1>
        </div>
        
        <!-- schedule-overview -->
        <div class="schedule-overview">
            <div class="col-sm-4 bg-grey">
                <div class="team-schedule"><?php require_once('schedules/friday.php') ?></div>
            </div>
            <div class="col-sm-4 bg-grey">
                <div class="team-schedule"><?php require_once('schedules/saturday.php') ?></div>
            </div>
            <div class="col-sm-4 bg-grey">
                <div class="team-schedule"><?php require_once('schedules/sunday.php') ?></div>
            </div>
        </div><!-- /.schedule-overview -->
    </div>
</div>
<!-- END: Main Contenr -->

<?php require_once('inc/footer.php') ?> 

