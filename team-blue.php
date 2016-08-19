<?php require_once('inc/header.php'); ?>
<?php require_once('inc/navigation.php'); ?>

<!-- START: Main Content -->
<!-- jumbotron -->
<div class="jumbotron banner-blue">
    <div class="container">
            <h1 class="text-white">
              <?php include('rosters/team-names.php'); echo $teamBlueFirst; ?>
              <br />
              <?php include('rosters/team-names.php'); echo $teamBlueLast; ?>
            </h1>
    </div>
</div><!-- ./jumbotron -->

<div class="container-fluid">
    <div class="container">

        <!-- Schedule -->
        <div class="col-sm-6 bg-grey mc">
            <div class="team-schedule"><?php require_once('schedules/schedule-blue.php'); ?></div>
        </div>

        <!-- Roster -->
        <div class="col-sm-6 roster bg-grey mc">
            <div class="team-roster"><?php require_once('rosters/roster-blue.php'); ?></div>
        </div>

    </div>
</div>
<!-- END: Main Contenr -->

<?php require_once('inc/footer.php') ?>
