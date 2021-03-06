<?php
session_start();
if(!$_SESSION["auth_admin"]){
    header("location:../../_login.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin Pannel</title>
        <link type="x-icon" rel="icon" href="../../images/icons/x-icon.png">
        <link type="text/css" rel="stylesheet" href="../../css/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="../../css/adminpage.css">
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top admin-nav">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynav">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a href="#" class="navbar-brand" id="nav-icon-text">
                    <img src="../../images/icons/x-icon.png" id="navlog"> | Admin
                </a>
            </div>

            <div class="collapse navbar-collapse" id="mynav">
                <ul class="nav navbar-nav">
                    <li><a href="../php_files/feedback.php" id="showfeed">Show Feedback</a></li>
                    <li><a href="../php_files/users.php" id="showUsers">Show Users</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
        </nav>
        <br>
        <br>
        <br>
        <br>
        <div class="container text-center" id="main-contain">
            <!--feed back or other details goes here-->
        </div>
<!--
        <div id="prompt-box">
            <div id="my-box">
                <div class="text-center">
                    <h4>Are You Sure You Want to Delete This Record?</h4>
                    <button class="btn btn-danger" id="dYes">Yes</button>
                    <button class="btn btn-default" id="dNo">No</button>
                </div>
            </div>
        </div>
-->
        <script src="../../js/jquery-3.1.1.min.js"></script>
        <script src="../../js/bootstrap.min.js"></script>
        <script src="../../js/admin.js"></script>
    </body>
</html>