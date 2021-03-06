<?php
session_start();
require_once "checklogin.teacher.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to KinderSmart</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../style/css/materialize.min.css" media="screen,projection"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<nav>
    <div class="nav-wrapper blue">
        <a href="#" class="brand-logo left">KinderSmart</a>
        <ul class="right hide-on-med-and-down">
            <li class="active"><a href="home.php"><i class="material-icons left">home</i>Home</a></li>
            <li><a href="#"><i class="material-icons left">settings</i>Settings</a></li>
            <li class="red"><a href="../include/logout.inc.php"><i class="material-icons left">phonelink_erase</i>Logout</a>
            </li>
        </ul>
    </div>
</nav>
<div class="row">
    <div class="col s12 xl4">
        <div class="hoverable">
            <a href="applyLeave.php">
                <h2 class="header black-text">Apply Leave</h2>
                <div class="card horizontal red lighten-1">

                    <div class="card-image">
                        <i class="material-icons large white-text">assignment</i>
                    </div>
                    <div class="card-stacked">
                        <div class="card-content white-text">
                            <p>You can apply for leave using this software</p>
                        </div>
                        <a href="applyLeave.php" class="card-action white-text">Go to page<i
                                    class="material-icons right">arrow_forward</i></a>
                    </div>
            </a>
        </div>
    </div>
</div>
<div class="col s12 xl4">
    <div class="hoverable">
        <a href="markAttendance.php">
            <h2 class="header black-text">Mark Attendance</h2>
            <div class="card horizontal orange lighten-1">

                <div class="card-image">
                    <i class="material-icons large white-text">class</i>
                </div>
                <div class="card-stacked">
                    <div class="card-content white-text">
                        <p>You can mark attendance using this software</p>
                    </div>
                    <a href="markAttendance.php" class="card-action white-text">Go to page<i
                                class="material-icons right">arrow_forward</i></a>
                </div>
        </a>
    </div>
</div>
</div>
<div class="col s12 xl4">
    <div class="hoverable">
        <a href="viewSyllabus.php">
            <h2 class="header black-text">View Syllabus</h2>
            <div class="card horizontal blue-grey lighten-1">

                <div class="card-image">
                    <i class="material-icons large white-text">description</i>
                </div>
                <div class="card-stacked">
                    <div class="card-content white-text">
                        <p>You can view syllabus using this software</p>
                    </div>
                    <a href="viewSyllabus.php" class="card-action white-text">Go to page<i class="material-icons right">arrow_forward</i></a>
                </div>
        </a>
    </div>
</div>
</div>
</div>
<div class="row">
    <div class="col s12 xl4">
        <div class="hoverable">
            <a href="viewChildRemoveRequests.php">
                <h2 class="header black-text">Transportation</h2>
                <div class="card horizontal red lighten-1">

                    <div class="card-image">
                        <i class="material-icons large white-text">directions_bus</i>
                    </div>
                    <div class="card-stacked">
                        <div class="card-content white-text">
                            <p>You can view transportation details using this software</p>
                        </div>
                        <a href="viewChildRemoveRequests.php" class="card-action white-text">Go to page<i
                                    class="material-icons right">arrow_forward</i></a>
                    </div>
            </a>
        </div>
    </div>
</div>
<div class="col s12 xl4">
    <div class="hoverable">
        <a href="sentMessage.php">
            <h2 class="header black-text">Send Messages</h2>
            <div class="card horizontal orange lighten-1">
                <div class="card-image">
                    <i class="material-icons large white-text">message</i>
                </div>
                <div class="card-stacked">
                    <div class="card-content white-text">
                        <p>You can send messages to parents using this software</p>
                    </div>
                    <a href="sentMessage.php" class="card-action white-text">Go to page<i class="material-icons right">arrow_forward</i></a>
                </div>
        </a>
    </div>
</div>
</div>
<div class="col s12 xl4">
    <div class="hoverable">
        <a href="update-daily-details-front.php">
            <h2 class="header black-text">Daily Details</h2>
            <div class="card horizontal blue-grey lighten-1">

                <div class="card-image">
                    <i class="material-icons large white-text">date_range</i>
                </div>
                <div class="card-stacked">
                    <div class="card-content white-text">
                        <p>You can update daily details using this software</p>
                    </div>
                    <a href="#" class="card-action white-text">Go to page<i
                                class="material-icons right">arrow_forward</i></a>
                </div>
        </a>
    </div>
</div>
</div>
</div>
</div>
<script type="text/javascript" src="../style/js/materialize.min.js"></script>
<script>
    src = "https://code.jquery.com/jquery-3.3.1.min.js"
    integrity = "sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin = "anonymous"</script>

<script>
    $(document).ready(function () {
        $('.sidenav').sidenav();
    });
</script>

</body>
</html>