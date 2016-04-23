<?php require_once('inc/header.php') ?>
<?php require_once('inc/navigation.php') ?>  

<!-- START: Main Content -->
<!-- jumbotron -->
<div class="jumbotron banner-home-page">
    <div class="container jt-home">
        
        <div class="col-sm-5 banner-home">
            <img src="images/obi-logo-large2.png"/>
        </div>
        <div class="col-sm-7">
            <div class="col-sm-12 bg-grey">
                <div class="col-sm-8">
                    <h1 class="text-gold">June <span class="text-white">10-12</span></h1>
                </div>
                <div class="col-sm-4">
                    <button class="button button-gold pull-right" 
                            type="button"
                            data-container="body"
                            data-toggle="popover" 
                            data-placement="top" 
                            title="Signup Currently Unavailable" 
                            data-content="We're not quite ready to open up sing up just yet. Keep checking back to make sure you know when it's ready to go!">
                        Sign Up
                    </button>
                </div>
            </div>
            <div class="col-sm-12 bg-gold">
                <h5 class="text-grey text-center">Questions? Contact Dan Buss the tournament coordinator</h5>
            </div>
        </div>
        
    </div>
</div><!-- ./jumbotron -->

<div class="container-fluid mc">
    <div class="container">
        <div class="full team-list">
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
        <div class="full schedule-overview">
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

