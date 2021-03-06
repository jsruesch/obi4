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
            <div class="col-sm-12 bg-grey jumbotron-header">
                <h1 class="text-gold text-center">Sept <span class="text-white">23-25</span></h1>
            </div>
            <div class="col-sm-12 bg-gold jumbotron-subhead">
                <h5 class="text-grey text-center">Questions? <a href="mailto:danbuss1@gmail.com" target="_blank"><button class="button-small button-grey">Contact Dan Buss</button></a> the tournament coordinator</h5>
            </div>
        </div>

    </div>
</div><!-- ./jumbotron -->

<div class="container-fluid mc">
    <div class="container">
        <div class="full team-list">
            <div class="col-sm-3 bg-grey"><p class="text-gold">Teams</p></div>
            <a href="team-blue.php"><div class="col-sm-3 bg-blue"><p>                           <?php include('rosters/team-names.php'); echo $teamBlueFull; ?>  </p></div></a>
            <a href="team-black.php"><div class="col-sm-3 bg-grey"><p>                          <?php include('rosters/team-names.php'); echo $teamBlackFull; ?></p></div></a>
            <a href="team-red.php"><div class="col-sm-3 bg-red"><p>                             <?php include('rosters/team-names.php'); echo $teamRedFull; ?></p></div></a>

            <a href="team-grey.php"><div class="col-sm-3 bg-white"><p class="text-grey">        <?php include('rosters/team-names.php'); echo $teamGreyFull; ?></p></div></a>
            <a href="team-yellow.php"><div class="col-sm-3 bg-yellow"><p class="text-grey">     <?php include('rosters/team-names.php'); echo $teamYellowFull; ?></p></div></a>
            <a href="team-tan.php"><div class="col-sm-3 bg-tan"><p class="text-grey">           <?php include('rosters/team-names.php'); echo $teamTanFull; ?></p></div></a>
            <a href="team-light-blue.php"><div class="col-sm-3 bg-light-blue"><p class="padbot"><?php include('rosters/team-names.php'); echo $teamLightBlueFull; ?></p></div></a>
        </div>

        <!-- schedule-overview -->
        <div class="full schedule-overview">
            <!--<div class="col-sm-4 bg-grey">
                <div class="team-schedule"><?php require_once('schedules/friday.php') ?></div>
            </div>-->
            <div class="col-sm-6 bg-grey">
                <div class="team-schedule"><?php require_once('schedules/saturday.php') ?></div>
            </div>
            <div class="col-sm-6 bg-grey">
                <div class="team-schedule"><?php require_once('schedules/sunday.php') ?></div>
            </div>
        </div><!-- /.schedule-overview -->
    </div>
</div>
<!-- END: Main Contents -->


<?php require_once('inc/footer.php') ?>
