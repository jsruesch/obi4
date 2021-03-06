<?php require_once('inc/header.php'); ?>
<?php require_once('inc/navigation.php'); ?>

<!-- START: Main Content -->
<!-- jumbotron -->
<div class="jumbotron banner-white">
    <div class="container">
            <h1 class="text-grey">
              <?php include('rosters/team-names.php'); echo $teamGreyFirst; ?>
              <br />
              <?php include('rosters/team-names.php'); echo $teamGreyLast; ?>
            </h1>
    </div>
</div><!-- ./jumbotron -->
<div class="container-fluid">
    <div class="container">

        <!-- Points and Standings -->
        <div class="col-sm-12 points-and-standings">
          <div class="col-sm-6 points">
            <h3>Points: 00</h3>
          </div>
          <div class="col-sm-6 standings">
            <h3>Standing: 1</h3>
          </div>
        </div>

        <!-- Schedule -->
        <div class="col-sm-6 bg-grey">
            <div class="team-schedule"><?php require_once('schedules/schedule-grey.php'); ?></div>
        </div>

        <!-- Roster and Players -->
        <div class="col-sm-6 roster bg-grey">
            <div class="col-sm-12 team-roster"><?php require_once('rosters/roster-grey.php'); ?></div>
        </div>

    </div>
</div>
<!-- END: Main Contenr -->

<?php require_once('inc/footer.php') ?>
