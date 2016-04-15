<?php require_once('inc/header.php'); ?>
<?php require_once('inc/navigation.php'); ?>

<!-- START: Main Content -->
<div class="container-fluid">
    <div class="container">
        
        <!-- Team Header Desktop -->
        <div class="col-sm-12 team-header-desktop bg-blue">
            <div class="team-name"><p>Team<br/><strong>Blue</strong></p></div>
        </div>
        
        <!-- Team Header Mobile -->
        <div class="col-sm-12 team-header-mobile bg-blue">
            <div class="team-name"><p>Team <strong>Blue</strong></p></div>
        </div>
        
        <!-- Schedule -->
        <div class="col-sm-6">
            <div class="team-schedule"><?php require_once('schedules/schedule-blue.php'); ?></div>   
        </div>
        
        <!-- Roster -->
        <div class="col-sm-6 roster">
            <div class="team-roster"><?php require_once('rosters/roster-blue.php'); ?></div>  
        </div>
        
    </div>
</div>
<!-- END: Main Contenr -->

<?php require_once('inc/footer.php') ?> 

