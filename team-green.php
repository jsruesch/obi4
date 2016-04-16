<?php require_once('inc/header.php'); ?>
<?php require_once('inc/navigation.php'); ?>  

<!-- START: Main Content -->
<!-- jumbotron -->
<div class="jumbotron  bg-green">
    <div class="container">
            <h1 class="text-white">Team <br /> Green</h1>
    </div>
</div><!-- ./jumbotron -->
<div class="container-fluid">
    <div class="container">
        
        <!-- Schedule -->
        <div class="col-sm-6 bg-grey mc">
            <div class="team-schedule"><?php require_once('schedules/schedule-green.php'); ?></div>   
        </div>
        
        <!-- Roster -->
        <div class="col-sm-6 roster bg-grey mc">
            <div class="team-roster"><?php require_once('rosters/roster-green.php'); ?></div>  
        </div>
        
    </div>
</div>
<!-- END: Main Contenr -->

<?php require_once('inc/footer.php') ?> 

