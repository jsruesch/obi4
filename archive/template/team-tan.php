<?php require_once('inc/header.php'); ?>
<?php require_once('inc/navigation.php'); ?>

<!-- START: Main Content -->
<!-- jumbotron -->
<div class="jumbotron banner-tan">
    <div class="container">
            <h1 class="text-white">
              <?php include('rosters/team-names.php'); echo $teamTanFirst; ?>
              <br />
              <?php include('rosters/team-names.php'); echo $teamTanLast; ?>
            </h1>
    </div>
</div><!-- ./jumbotron -->

<div class="container-fluid">
    <div class="container">

        <!-- Schedule -->
        <div class="col-sm-6 bg-grey mc">
            <div class="team-schedule"><?php require_once('schedules/schedule-tan.php'); ?></div>
        </div>

        <!-- Roster -->
        <div class="col-sm-6 roster bg-grey mc">
            <div class="team-roster"><?php require_once('rosters/roster-tan.php'); ?></div>
        </div>

    </div>
</div>
<!-- END: Main Contenr -->

<?php require_once('inc/footer.php') ?>
