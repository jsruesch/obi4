
<div class="container-fluid">
    <div class="container">
        <nav class="navbar">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="obi-logo-mobile"></div>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><div class="obi-logo"></div></li>
                        <li><a href="./index.php" class="pleft">Home</a></li>

                        <!-- START: Teams -->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Teams <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="./team-blue.php"   class="bg-blue text-white"><?php include('rosters/team-names.php'); echo $teamBlueFull; ?></a></li>
                                <li><a href="./team-black.php"        class="bg-grey text-white"><?php include('rosters/team-names.php'); echo $teamBlackFull; ?></a></li>
                                <li><a href="./team-red.php"          class="bg-red text-white"><?php include('rosters/team-names.php'); echo $teamRedFull; ?></a></li>
                                <li><a href="./team-grey.php"         class="bg-white text-grey"><?php include('rosters/team-names.php'); echo $teamGreyFull; ?></a></li>
                                <li><a href="./team-yellow.php"       class="bg-yellow text-grey"><?php include('rosters/team-names.php'); echo $teamYellowFull; ?></a></li>
                                <li><a href="./team-tan.php"          class="bg-tan text-grey"><?php include('rosters/team-names.php'); echo $teamTanFull; ?></a></li>
                                <li><a href="./team-light-blue.php"   class="bg-light-blue text-white"><?php include('rosters/team-names.php'); echo $teamLightBlueFull; ?></a></li>
                                <!--<li role="separator" class="divider"></li>-->
                            </ul>
                        </li>
                        <!-- END: Teams -->

                        <!-- START: Schedule -->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Schedule <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="./schedule-full.php" class="bg-grey">Full Schedule</a></li>
                                <!--<li><a href="schedule-friday.php" class="bg-grey">Friday</a></li>-->
                                <li><a href="./schedule-saturday.php" class="bg-grey">Saturday</a></li>
                                <li><a href="./schedule-sunday.php" class="bg-grey">Sunday</a></li>

                            </ul>
                        </li>
                        <!-- END: Schedule -->
                        <li><a href="https://sunprairieice.sportngin.com/register/form/273959499?mc_cid=28f1b0107c&mc_eid=c3e1eb8e38" class="text-white" type="button" target="_blank">Sign Up</a></li>
                        <!--
                        <li><a href="#" class="text-white"type="button"
                            data-container="body"
                            data-toggle="popover"
                            data-placement="bottom"
                            title="Signup Currently Unavailable"
                            data-content="We're not quite ready to open up signup just yet. Keep checking back to make sure you know when it's ready to go!">Sign Up</a></li>-->
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
    </div>
</div>
