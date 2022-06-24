<?php
/**
 * Created by IntelliJ IDEA.
 * User: Thushara Supun
 * Date: 30/11/2018
 * Time: 9:58 PM
 */

session_start();
if ($_COOKIE['email'] == 'loggedOut') {
    header("Location:log.php");
}elseif ((!isset($_SESSION['email'])) or (!isset($_SESSION['checkIn'])) or (!isset($_SESSION['checkOut'])) or (!isset($_COOKIE['email']))) {
    header("Location:log.php");
}elseif (!isset($_SESSION['rooms_NOR'])){
    header("Location:log.php");
}


?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Sigiriya Jungles Resort >>></title>
    <link rel="icon" type="image/png" href="dist/asset/image/myIcon.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="dist/css/motion.min.css">
    <link rel="stylesheet"  href="dist/css/payment.css">
    <link rel="stylesheet" href="dist/css/paymentResponsive.css">
</head>
<body>

<script type="application/javascript" src="dist/js/bootstrap.min.js"></script>
<script type="application/javascript" src="dist/js/jquery-3.3.1.min.js"></script>

<audio autoplay loop id="myAudio">
    <source src="dist/asset/audio/myBackgroundAudio.mp3" type="audio/mp3">
</audio>

<img src="dist/asset/image/indexBackground.jpg" style="position: fixed; height: 100%; width: 100%; overflow: hidden; z-index: -99999">

    <div>
        <nav role="navigation" >
            <div id="topTopBar" style="position: fixed; z-index: 99999999; width: 100%; height: 6%; opacity: 0.99; background-color: whitesmoke; color: grey; font-size: 15px">
                <div class="container">
                    <div class="row">
                        <div class=" pt-2">
                            <p>WelCome to Our Online Room Reservation Service.</p>
                        </div>
                        <div style="position: absolute; right: 8%" class="col-xs-8 justify-content-end text-right pt-2">
                            <ul>
                                <?php echo "<p>Hello, " . $_SESSION['user'] . "  ;-) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; You Logged at : " . $_SESSION['time'] . "</p>"; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <nav style="position: fixed; z-index: 9999999; width: 100%; top: 6%; opacity: 0.96" id="nav-bar-mainIndex"
                 class="navbar navbar-expand-md navbar-light bg-light">
                <img id="nav-bar-icon" src="dist/asset/image/myIcon.jpg" height="74" width="99">
                <a id="title-text" class="navbar-brand" href="log.php"><h1>Sigiriya Jungles Resort</h1></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item px-lg-3 px-md-2">
                            <a class="nav-link" href="log.php">Home</a>
                        </li>
                        <li class="nav-item px-lg-3 px-md-2">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                        <li class="nav-item px-lg-3 px-md-2">
                            <a class="nav-link" href="services.php">Services</a>
                        </li>
                        <li class="nav-item px-lg-3 px-md-2">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                        <li class="nav-item px-lg-3 px-md-2">
                            <a id="nav-bar-logOut" href="api/service/LogOutService.php" class="nav-link">Log Out</a>
                        </li>
                    </ul>
                </div>
            </nav>

        <div id="mainContainer">
            <div id="mainForm" class="container container-fluid animation push-in-down">

                <div id="paymentDiv" class="animation bounce-in delay-1-5s">
                    <h2>Payment</h2>
                </div>

                <div>
                    <form class="form-group" id="paymentForm" name="paymentForm" method="POST">
                        <br>
                        <div class="input-group mt-5 my-2 animation fade-in-up delay-2s">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Net Total</span>
                            </div>
                            <input type="text" class="form-control" id="netTotal" name="netTotal" disabled>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline mt-4 mx-lg-4 mx-md-3 mx-sm-1 animation fade-in-up delay-2s">
                            <input type="radio" class="custom-control-input active" id="visaRadioBtn" name="visaRadioBtn" value="Visa">
                            <label class="custom-control-label" for="customRadio">Visa</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline mx-lg-4 mx-md-3 mx-sm-1 animation fade-in-up delay-2s">
                            <input type="radio" class="custom-control-input active" id="masterRadioBtn" name="masterRadioBtn" value="Master">
                            <label class="custom-control-label" for="customRadio2">Master</label>
                        </div>
                        <div class="input-group my-3 animation fade-in-up delay-2s">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Card Num</span>
                            </div>
                            <input type="text" id="cardNumber" name="cardNumber" class="form-control">
                        </div>
                        <div class="input-group mt-5 animation fade-in-up delay-2s">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Exp Date</span>
                            </div>
                            <input type="date" id="expDate" name="expDate" class="form-control">
                        </div>
                        <div class="mt-4 animation bounce-in-right delay-3s">
                            <button id="payBtn" type="button" class="btn btn-outline-primary btn-lg">Pay >></button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>


<div id="footer">
    <p class="animation back-in-up delay-2s">Developed by Me(Thushara Supun) In 2K18 With Sanu Sir @IJSE -> (www.anoncoder.000webhostapp.com)</p>
</div>


    <script type="application/javascript" src="dist/js/bootstrap.min.js"></script>
    <script type="application/javascript" src="dist/js/jquery-3.3.1.min.js"></script>
    <script type="application/javascript" src="dist/controller/PaymentController.js"></script>

</body>

