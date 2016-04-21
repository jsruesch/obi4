<?php require_once('inc/header.php') ?>
<?php require_once('inc/navigation.php') ?>  

<!-- START: Main Content -->
<!-- jumbotron -->
<div class="jumbotron">
    <div class="container jt-home">
        <div class="col-sm-6 bg-grey">
            <h1 class="text-gold">June <span class="text-white">10-12</span></h1>
            <button class="button button-gold">Sign Up</button>
        </div>
    </div>
</div><!-- ./jumbotron -->

<div class="container-fluid mc">
    <div class="container">
        <div class="col-sm-12 bg-gold">
            <h1 class="text-center text-grey">June 10-12</h1>
        </div>
        
        <div class="full bg-grey team-list">
            <div class="col-sm-3 bg-grey"><p class="text-gold">Teams</p></div>
            <div class="col-sm-3 bg-blue"><p>Team Blue</p></div>
            <div class="col-sm-3 bg-grey"><p>Team Black</p></div>
            <div class="col-sm-3 bg-red"><p>Team Red</p></div>
            
            <div class="col-sm-3 bg-white"><p class="text-grey">Team White</p></div>
            <div class="col-sm-3 bg-yellow"><p class="text-grey">Team Yellow</p></div>
            <div class="col-sm-3 bg-maroon"><p>Team Maroon</p></div>
            <div class="col-sm-3 bg-green"><p>Team Green</p></div>
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

