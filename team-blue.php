<?php include('header.php') ?>
<?php include('navigation.php') ?>  

<!-- START: Main Content -->
<div class="container-fluid">
    <div class="container">
        
        <!-- START: Team Header Desktop -->
        <div class="col-sm-12 team-header-desktop">
            <div class="col-sm-6">
            </div>
            <div class="col-sm-6">
                <div class="team-schedule"><?php require('schedule-blue.php'); ?></div>
            </div>
        </div>
        <!-- END: Team Header Desktop -->
        
        <div class="col-sm-12 team-header-mobile">
        </div>
        
        <div class="col-sm-6 roster">
        </div>
        <div class="col-sm-6">
            <div class="team-schedule"><?php require('schedule-blue.php'); ?></div>   
        </div>
    </div>
</div>
<!-- END: Main Contenr -->

<?php include('footer.php') ?> 

