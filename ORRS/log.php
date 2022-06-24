<?php
session_start();

if ((isset($_COOKIE['user'])) and (isset($_COOKIE['email']))) {
    if ($_COOKIE['email'] != 'loggedOut') {
        $_SESSION['user'] = $_COOKIE['user'];
        $_SESSION['email'] = $_COOKIE['email'];
        $_SESSION['time'] = $_COOKIE['time'];
        header("Location:mainIndex.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sigiriya Jungles Resort >>></title>
    <link rel="icon" type="image/png" href="dist/asset/image/myIcon.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="dist/css/log.css">
    <link rel="stylesheet" type="text/css" href="dist/css/logResponsive.css">
    <link rel="stylesheet" type="text/css" href="dist/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="dist/css/loaders.min.css">
    <link rel="stylesheet" type="text/css" href="dist/css/motion.min.css">
    <link rel="stylesheet" type="text/css" href="dist/css/bootstrap.min.css">

</head>
<body>
<script type="application/javascript" src="dist/js/bootstrap.min.js"></script>
<script type="application/javascript" src="dist/js/jquery-3.3.1.min.js"></script>

<nav id="nav-bar-log" class="navbar navbar-expand-md navbar-light bg-light">
    <img id="nav-bar-icon" src="dist/asset/image/myIcon.jpg" height="74" width="99" class="img-fluid"
         alt="responsive image">
    <a id="title-text" class="navbar-brand" href="log.php">Sigiriya Jungles Resort</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li class="nav-item px-3">
                <a class="nav-link" href="log.php">Home</a>
            </li>
            <li class="nav-item px-3">
                <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item px-3">
                <a class="nav-link" href="services.php">Services</a>
            </li>
            <li class="nav-item px-3">
                <a class="nav-link" href="contact.php">Contact</a>
            </li>
        </ul>
    </div>
</nav>

<div id="myVideoDiv" class="container-fluid img-fluid">
    <video autoplay loop id="myVideo">
        <source src="dist/asset/video/myBackgroundVideo.mp4" type="video/mp4">
    </video>
</div>

<div id="wholeContent">

    <div id="mainTitle" class="animation bounce-in-down delay-05s">
        <h1>WelCome to Our Online Room Reservation Service</h1>
    </div>

    <div id="subTitle" class="animation fade-in-up delay-1s">
        <h3>You are Invited!</h3>
    </div>

    <div id="description" class="animation fade-in-up delay-1-5s">
        <h5>We know how to please you.</h5>
    </div>

    <div id="logBtnDiv">
        <button type="button" id="signInBtn" class="animation rotbo-in-right delay-2s"><h5>Sign In</h5></button>
        <button type="button" id="signUpBtn" class="animation rotbo-in-left delay-2s"><h5>Sign Up</h5></button>
    </div>


    <!--============================== Log PopUps =========================================-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~signIn popUp~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <div id="signInPopUpContainer" class="popUpContainer">
        <div id="signInPopUp" class="popUp" style="height: 45%; width: 20%">
            <div type="button" id="signInPopUpCloseBtn" class="closeBtn">X</div>
            <style>#signInPopUpCloseBtn:hover {
                    color: #007BFF
                }</style>
            <div class="popUpTop" style="background-color: #007BFF;">
                <h3> Sign In Here,</h3>
            </div>
            <form id="signInForm">
                <div class="form-group">
                    <br>
                    <br>
                    <br>
                    <input type="text" class="form-control" style="position:relative; width: 80%; left:10%"
                           id="signIn_userName" name="signIn_userName" placeholder="User Name">
                    <br>
                    <input type="password" class="form-control" style="position:relative; width: 80%; left:10%"
                           id="signIn_password" name="signIn_password" placeholder="Password">
                </div>
                <h5 id="signIn_errorMsg"
                    style="margin-left: 10%; margin-top: -4%; color: #ffffff; font-style: italic; font-size: 12px">
                    Error Msg </h5>
            </form>
            <button type="button" id="signInPopUpBtn" class="popUpBtn"
                    style="background-color: #007BFF; border: #007BFF solid 2px; height: 12%; top: -2%"><h5>Sign In</h5>
            </button>
            <style>#signInPopUpBtn:hover {
                    color: #007BFF !important;
                }</style>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~/signIn popUp~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~signUp popUp~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div id="signUpPopUpContainer" class="popUpContainer">
        <div id="signUpPopUp" class="popUp" style="height: 85%; width: 35%">
            <div type="button" id="signUpPopUpCloseBtn" class="closeBtn">X</div>
            <style>#signUpPopUpCloseBtn:hover {
                    color: #FF7800
                }</style>
            <div class="popUpTop" style="background-color: #FF7800; height: 8%">
                <h3>Sign Up Here,</h3>
            </div>
            <form id="signUpForm">
                <div class="form-group">
                    <br>
                    <br>
                    <br>
                    <h5 style="margin-left: 10%; font-size: 12px">Name : </h5>
                    <input type="text" class="form-control" style="position:relative; width: 80%; left:10%"
                           id="signUp_name" name="signUp_name" placeholder="Type Your Name Here*">
                    <br>
                    <h5 style="margin-left: 10%; font-size: 12px">Email : </h5>
                    <input type="text" class="form-control" style="position:relative; width: 80%; left:10%"
                           id="signUp_email" name="signUp_email" placeholder="example@abc.com*">
                    <br>
                    <h5 style="margin-left: 10%; font-size: 12px">Password : </h5>
                    <input type="password" class="form-control" style="position:relative; width: 80%; left:10%"
                           id="signUp_password" name="signUp_password" placeholder="Type a Password Here*">
                    <br>
                    <h5 style="margin-left: 10%; font-size: 12px">Re-Type Password : </h5>
                    <input type="password" class="form-control" style="position:relative; width: 80%; left:10%"
                           id="signUp_reTypePassword" name="signUp_reTypePassword"
                           placeholder="Re-Type Your Password Here*">
                </div>
                <h5 id="signUp_errorMsg"
                    style="margin-left: 10%; margin-top: -1%; color: #ffffff; font-style: italic; font-size: 15px">
                    Error Msg </h5>
            </form>
            <button type="button" id="signUpPopUpBtn" class="popUpBtn"
                    style="background-color: #FF7800; border: #FF7800 solid 2px; height: 7%; top: 1%"><h5>Sign Up</h5>
            </button>
            <style>#signUpPopUpBtn:hover {
                    color: #FF7800 !important;
                }</style>
        </div>
    </div>

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~/signUp popUp~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--============================== /log Popups =========================================-->


</div>

<div id="footer">
    <p class="animation back-in-up delay-3s">Developed by Me(Thushara Supun) In 2K18 With Sanu Sir @IJSE -> (www.anoncoder.000webhostapp.com)</p>
</div>

<script type="application/javascript" src="dist/js/bootstrap.min.js"></script>
<script type="application/javascript" src="dist/js/jquery-3.3.1.min.js"></script>
<script rel="script" type="application/javascript" src="dist/controller/LogController.js"></script>

</body>
</html>
