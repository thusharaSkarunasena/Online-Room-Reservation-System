<?php
/**
 * Created by IntelliJ IDEA.
 * User: Thushara Supun
 * Date: 26/11/2018
 * Time: 11:35 PM
 */

session_start();
if ($_COOKIE['email'] == 'loggedOut') {
    header("Location:log.php");
}elseif ((!isset($_SESSION['email'])) or (!isset($_SESSION['checkIn'])) or (!isset($_SESSION['checkOut'])) or (!isset($_COOKIE['email']))) {
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
    <link rel="stylesheet" href="dist/css/animate.css">
    <link rel="stylesheet" href="dist/css/icomoon.css">
    <link rel="stylesheet" href="dist/css/bootstrap.css">
    <link rel="stylesheet" href="dist/css/magnific-popup.css">
    <link rel="stylesheet" href="dist/css/flexslider.css">
    <link rel="stylesheet" href="dist/css/owl.carousel.min.css">
    <link rel="stylesheet" href="dist/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="dist/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="dist/css/flaticon/flaticon.css">
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="dist/css/style.css">
    <link rel="stylesheet" href="dist/css/motion.min.css">
    <link rel="stylesheet"  href="dist/css/rooms.css">
    <link rel="stylesheet" href="dist/css/roomsResponsive.css">

</head>
<body>

<script type="application/javascript" src="dist/js/bootstrap.min.js"></script>
<script type="application/javascript" src="dist/js/jquery-3.3.1.min.js"></script>

<div class="colorlib-loader"></div>

<audio autoplay loop id="myAudio">
    <source src="dist/asset/audio/myBackgroundAudio.mp3" type="audio/mp3">
</audio>

<div id="page">
    <nav class="colorlib-nav" role="navigation">
        <div style="position: fixed; z-index: 99999999; width: 100%; height: 6%; opacity: 0.99" class="top">
            <div class="container">
                <div class="row">
                    <div class="col-xs-4">
                        <p class="site">WelCome to Our Online Room Reservation Service.</p>
                    </div>
                    <div class="col-xs-8 text-right">
                        <p class="num"></p>
                        <ul class="colorlib-social">
                            <?php echo "<p>Hello, " . $_SESSION['user'] . "  ;-) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; You Logged at : " . $_SESSION['time'] . "</p>"; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <nav style="position: fixed; z-index: 9999999; width: 100%; top: 6%; opacity: 0.8" id="nav-bar-mainIndex"
             class="navbar navbar-expand-md navbar-light bg-light">
            <img id="nav-bar-icon" src="dist/asset/image/myIcon.jpg" height="74" width="99" class="img-fluid"
                 alt="responsive image">
            <a id="title-text" class="navbar-brand" href="log.php"><h1>Sigiriya Jungles Resort</h1></a>
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
                    <li class="nav-item px-3">
                        <a id="nav-bar-logOut" href="api/service/LogOutService.php" class="nav-link">Log Out</a>
                    </li>
                </ul>
            </div>
        </nav>
        <aside id="colorlib-hero">
            <div style="margin-top: 10.5%" class="flexslider">
                <ul class="slides">
                    <li style="background-image: url(dist/asset/image/bg_2.jpg);">
                        <div class="overlay"></div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
                                    <div class="slider-text-inner slider-text-inner2 text-center">
                                        <h2>Choose our Best</h2>
                                        <h1>Rooms &amp; Suites</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </aside>

        <div id="colorlib-rooms" class="colorlib-light-grey">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 room-wrap animate-box">
                        <a href="dist/asset/image/room-1.jpg" class="room image-popup-link"
                           style="background-image: url(dist/asset/image/room-1.jpg);"></a>
                        <div class="desc text-center">
                            <span class="rate-star"><i class="icon-star-full full"></i><i
                                        class="icon-star-full full"></i><i class="icon-star-full full"></i><i
                                        class="icon-star-full"></i><i class="icon-star-full"></i></span>
                            <h3>Suite</h3>
                            <p class="price">
                                <span class="currency">LKR.</span>
                                <span class="price-room">12 000.00</span>
                                <span class="per">/ per night</span>
                            </p>
                            <ul>
                                <li><i class="icon-check"></i> Only 10 rooms are available</li>
                                <li><i class="icon-check"></i> Breakfast included</li>
                                <li><i class="icon-check"></i> Price does not include VAT &amp; services fee</li>
                            </ul>
                            <ul>
                                <li id="suite_li_1" style="font-size: 16px; color: #000000"></li>
                                <li id="suite_li_2" style="color: #6f42c1; font-size: 32px"></li>
                                <li id="suite_li_3" style="font-size: 16px; color: #000000"></li>
                            </ul>
                            <p><a id="suite_bnBtn" class="btn btn-primary btn-book">Book now!</a></p>
                        </div>
                    </div>
                    <div class="col-md-4 room-wrap animate-box">
                        <a href="dist/asset/image/room-2.jpg" class="room image-popup-link"
                           style="background-image: url(dist/asset/image/room-2.jpg);"></a>
                        <div class="desc text-center">
                            <span class="rate-star"><i class="icon-star-full full"></i><i
                                        class="icon-star-full full"></i><i class="icon-star-full full"></i><i
                                        class="icon-star-full full"></i><i class="icon-star-full"></i></span>
                            <h3>Double Room</h3>
                            <p class="price">
                                <span class="currency">LKR.</span>
                                <span class="price-room">15 000.00</span>
                                <span class="per">/ per night</span>
                            </p>
                            <ul>
                                <li><i class="icon-check"></i> Perfect for traveling couples</li>
                                <li><i class="icon-check"></i> Breakfast included</li>
                                <li><i class="icon-check"></i> Price does not include VAT &amp; services fee</li>
                            </ul>
                            <ul>
                                <li id="doubleRoom_li_1" style="font-size: 16px; color: #000000"></li>
                                <li id="doubleRoom_li_2" style="color: #6f42c1; font-size: 32px"></li>
                                <li id="doubleRoom_li_3" style="font-size: 16px; color: #000000"></li>
                            </ul>
                            <p><a id="doubleRoom_bnBtn" class="btn btn-primary btn-book">Book now!</a></p>
                        </div>
                    </div>
                    <div class="col-md-4 room-wrap animate-box">
                        <a href="dist/asset/image/room-3.jpg" class="room image-popup-link"
                           style="background-image: url(dist/asset/image/room-3.jpg);"></a>
                        <div class="desc text-center">
                            <span class="rate-star"><i class="icon-star-full full"></i><i
                                        class="icon-star-full full"></i><i class="icon-star-full full"></i><i
                                        class="icon-star-full full"></i><i class="icon-star-full"></i></span>
                            <h3>Family Room</h3>
                            <p class="price">
                                <span class="currency">LKR.</span>
                                <span class="price-room">19 000.00</span>
                                <span class="per">/ per night</span>
                            </p>
                            <ul>
                                <li><i class="icon-check"></i> Two double beds</li>
                                <li><i class="icon-check"></i> Babysitting facilities</li>
                                <li><i class="icon-check"></i> 1 free bed available on request</li>
                                <li><i class="icon-check"></i> Price does not include VAT &amp; services fee</li>
                            </ul>
                            <ul>
                                <li id="familyRoom_li_1" style="font-size: 16px; color: #000000"></li>
                                <li id="familyRoom_li_2" style="color: #6f42c1; font-size: 32px"></li>
                                <li id="familyRoom_li_3" style="font-size: 16px; color: #000000"></li>
                            </ul>
                            <p><a id="familyRoom_bnBtn" class="btn btn-primary btn-book">Book now!</a></p>
                        </div>
                    </div>
                    <div class="col-md-4 room-wrap animate-box">
                        <a href="dist/asset/image/room-4.jpg" class="room image-popup-link"
                           style="background-image: url(dist/asset/image/room-4.jpg);"></a>
                        <div class="desc text-center">
                            <span class="rate-star"><i class="icon-star-full full"></i><i
                                        class="icon-star-full full"></i><i class="icon-star-full full"></i><i
                                        class="icon-star-full full"></i><i class="icon-star-full"></i></span>
                            <h3>Classic Double Room</h3>
                            <p class="price">
                                <span class="currency">LKR.</span>
                                <span class="price-room">13 000.00</span>
                                <span class="per">/ per night</span>
                            </p>
                            <ul>
                                <li><i class="icon-check"></i> Only 10 rooms are available</li>
                                <li><i class="icon-check"></i> Breakfast included</li>
                                <li><i class="icon-check"></i> Price does not include VAT &amp; services fee</li>
                            </ul>
                            <ul>
                                <li id="classicDoubleRoom_li_1" style="font-size: 16px; color: #000000"></li>
                                <li id="classicDoubleRoom_li_2" style="color: #6f42c1; font-size: 32px"></li>
                                <li id="classicDoubleRoom_li_3" style="font-size: 16px; color: #000000"></li>
                            </ul>
                            <p><a id="classicDoubleRoom_bnBtn" class="btn btn-primary btn-book">Book now!</a></p>
                        </div>
                    </div>
                    <div class="col-md-4 room-wrap animate-box">
                        <a href="dist/asset/image/room-5.jpg" class="room image-popup-link"
                           style="background-image: url(dist/asset/image/room-5.jpg);"></a>
                        <div class="desc text-center">
                            <span class="rate-star"><i class="icon-star-full full"></i><i
                                        class="icon-star-full full"></i><i class="icon-star-full full"></i><i
                                        class="icon-star-full full"></i><i class="icon-star-full"></i></span>
                            <h3>Superior Double Room</h3>
                            <p class="price">
                                <span class="currency">LKR.</span>
                                <span class="price-room">20 000.00</span>
                                <span class="per">/ per night</span>
                            </p>
                            <ul>
                                <li><i class="icon-check"></i> Perfect for traveling couples</li>
                                <li><i class="icon-check"></i> Breakfast included</li>
                                <li><i class="icon-check"></i> Price does not include VAT &amp; services fee</li>
                            </ul>
                            <ul>
                                <li id="superiorDoubleRoom_li_1" style="font-size: 16px; color: #000000"></li>
                                <li id="superiorDoubleRoom_li_2" style="color: #6f42c1; font-size: 32px"></li>
                                <li id="superiorDoubleRoom_li_3" style="font-size: 16px; color: #000000"></li>
                            </ul>
                            <p><a id="superiorDoubleRoom_bnBtn" class="btn btn-primary btn-book">Book now!</a></p>
                        </div>
                    </div>
                    <div class="col-md-4 room-wrap animate-box">
                        <a href="dist/asset/image/room-6.jpg" class="room image-popup-link"
                           style="background-image: url(dist/asset/image/room-6.jpg);"></a>
                        <div class="desc text-center">
                            <span class="rate-star"><i class="icon-star-full full"></i><i
                                        class="icon-star-full full"></i><i class="icon-star-full full"></i><i
                                        class="icon-star-full full"></i><i class="icon-star-full"></i></span>
                            <h3>Superior Family Room</h3>
                            <p class="price">
                                <span class="currency"><small>LKR.</small></span>
                                <span class="price-room">21 000.00</span>
                                <span class="per">/ per night</span>
                            </p>
                            <ul>
                                <li><i class="icon-check"></i> Perfect for traveling couples</li>
                                <li><i class="icon-check"></i> Breakfast included</li>
                                <li><i class="icon-check"></i> Price does not include VAT &amp; services fee</li>
                            </ul>
                            <ul>
                                <li id="superiorFamilyRoom_li_1" style="font-size: 16px; color: #000000"></li>
                                <li id="superiorFamilyRoom_li_2" style="color: #6f42c1; font-size: 32px"></li>
                                <li id="superiorFamilyRoom_li_3" style="font-size: 16px; color: #000000"></li>
                            </ul>
                            <p><a id="superiorFamilyRoom_bnBtn" class="btn btn-primary btn-book">Book now!</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="colorlib-subscribe" style="background-image: url(dist/asset/image/sun_beds.jpg)">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
                        <span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i
                                    class="icon-star-full"></i><i class="icon-star-full"></i></span>
                        <h2>You are Invited <br> We know how please you</h2>
                        <p>Best Jungles Resort Experience in a Luxury Resort in Sri Lanka's Cultural Triangle</p>
                    </div>
                </div>
            </div>
        </div>


        <!--======================================== Booking Selections Pop Up===============================================-->

        <div id="bookingSelectionsPopUpContainer" class="popUpContainer">
            <div id="bookingSelectionsPopUp" class="popUp">
                <div type="button" id="bookingSelectionsPopUpCloseBtn" class="closeBtn">X</div>
                <div class="popUpTop bg-primary text-light">
                    <?php echo "<label style='font-size: 20px'>" . $_SESSION['user'] . ",&nbsp; Reserve Your Rooms Here;</label>"; ?>
                </div>

                <div id="reservationsFormDiv">
                    <div id="popUpLeftSide">
                        <form>
                            <div class="form-group px-4">
                                <h4>Room Type :</h4>
                                <input type="text" class="form-control disabled mainIndexInput" width="50px" disabled id="roomType">
                            </div>
                            <div class="form-group px-4">
                                <h4>Number of Rooms :</h4>
                                <input type="number" class="form-control mainIndexInput" width="50px" onchange="onNumberInputChange()" min="0" placeholder="0" id="numberOfRooms">
                            </div>
                            <div class="form-group px-4">
                                <h4>Total for Selected Type :</h4>
                                <input type="text" width="50px" class="form-control disabled mainIndexInput" placeholder="LKR 0.00" disabled id="total">
                            </div>
                        </form>
                    </div>

                    <div id="popUpRightSide">
                        <div class="form-row row mt-3">
                            <h3 style="margin-left: 12%">RoomType</h3>
                            <h3 style="margin-left: 20%">Rooms</h3>
                            <h3 style="margin-left: 25%">Total</h3>
                        </div>
                        <form id="popUpForm" method="POST">
                           <div class="form-inline row form-row my-3">
                               <input formmethod="POST" type="text" readonly class="form-control mb-2 mr-sm-2 ml-3 text-center" placeholder="Suite" id="suite_roomTypeName">
                               <input formmethod="POST" type="text" readonly class="form-control mb-2 mr-sm-2 text-center" value="0" id="suite_NOR" name="suite_NOR">
                               <input formmethod="POST" type="text" readonly class="form-control mb-2 mr-sm-2 text-center" value="0.00" id="suite_total" name="suite_total">
                           </div>
                            <div class="form-inline row form-row my-3">
                                <input formmethod="POST" type="text" readonly class="form-control mb-2 mr-sm-2 ml-3 text-center" placeholder="Double Room" id="doubleRoom_roomTypeName">
                                <input formmethod="POST" type="text" readonly class="form-control mb-2 mr-sm-2 text-center" value="0" id="doubleRoom_NOR" name="doubleRoom_NOR">
                                <input formmethod="POST" type="text" readonly class="form-control mb-2 mr-sm-2 text-center" value="0.00" id="doubleRoom_total" name="doubleRoom_total">
                           </div>
                            <div class="form-inline row form-row my-3">
                                <input formmethod="POST" type="text" readonly class="form-control mb-2 mr-sm-2 ml-3 text-center" placeholder="Family Room" id="familyRoom_roomTypeName">
                                <input formmethod="POST" type="text" readonly class="form-control mb-2 mr-sm-2 text-center" value="0" id="familyRoom_NOR" name="familyRoom_NOR">
                                <input formmethod="POST" type="text" readonly class="form-control mb-2 mr-sm-2 text-center" value="0.00" id="familyRoom_total" name="familyRoom_total">
                           </div>
                            <div class="form-inline row form-row my-3">
                                <input formmethod="POST" type="text" readonly class="form-control mb-2 mr-sm-2 ml-3 text-center" placeholder="Classic Double Room" id="classicDoubleRoom_roomTypeName">
                                <input formmethod="POST" type="text" readonly class="form-control mb-2 mr-sm-2 text-center" value="0" id="classicDoubleRoom_NOR" name="classicDoubleRoom_NOR">
                                <input formmethod="POST" type="text" readonly class="form-control mb-2 mr-sm-2 text-center" value="0.00" id="classicDoubleRoom_total" name="classicDoubleRoom_total">
                           </div>
                            <div class="form-inline row form-row my-3">
                                <input formmethod="POST" type="text" readonly class="form-control mb-2 mr-sm-2 ml-3 text-center" placeholder="Superior Double Room" id=superiorDoubleRoom_roomTypeName">
                                <input formmethod="POST" type="text" readonly class="form-control mb-2 mr-sm-2 text-center" value="0" id="superiorDoubleRoom_NOR" name="superiorDoubleRoom_NOR">
                                <input formmethod="POST" type="text" readonly class="form-control mb-2 mr-sm-2 text-center" value="0.00" id="superiorDoubleRoom_total" name="superiorDoubleRoom_total">
                           </div>
                            <div class="form-inline row form-row mt-3">
                                <input formmethod="POST" type="text" readonly class="form-control mb-2 mr-sm-2 ml-3 text-center" placeholder="Superior Family Room" id=superiorFamilyRoom_roomTypeName">
                                <input formmethod="POST" type="text" readonly class="form-control mb-2 mr-sm-2 text-center" value="0" id="superiorFamilyRoom_NOR" name="superiorFamilyRoom_NOR">
                                <input formmethod="POST" type="text" readonly class="form-control mb-2 mr-sm-2 text-center" value="0.00" id="superiorFamilyRoom_total" name="superiorFamilyRoom_total">
                           </div>
                        </form>
                        <div class="form-inline row form-row">
                            <h4 style="margin-left: 47%" class="pt-4">Net Total : LKR &nbsp;&nbsp;</h4>
                            <input type="text"  class="form-control disabled" placeholder="0.00" disabled id="netTotal">
                        </div>
                    </div>
                    <div id="popUpBottomSide">
                        <button type="button" id="reservationsPopUpBtn" class="popUpBtn btn">
                            <label class="text-center pr-5">Reserve >>></label>
                        </button>
                    </div>

                </div>
            </div>
        </div>

        <!--======================================== / Booking Selections Pop Up=============================================-->


        <footer id="colorlib-footer" role="contentinfo">
            <div class="container">
                <div class="row row-pb-md">
                    <div class="col-md-3 colorlib-widget">
                        <h4>Sigiriya Jungles Resort</h4>
                        <p>The Best Jungles Resort Experience in a Luxury Resort in Sri Lanka's Cultural Triangle.</p>
                    </div>
                    <div class="col-md-3 colorlib-widget">
                        <h4>Quick Links</h4>
                        <p>
                        <ul class="colorlib-footer-links">
                            <li><a href="log.php">About</a></li>
                            <li><a href="services.php">Services</a></li>
                            <li><a href="contact.php">Contact</a></li>
                            <li><a href="api/service/LogOutService.php">Log Out</a></li>
                        </ul>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <h4>Recents Blog Post</h4>
                        <ul class="colorlib-footer-links">
                            <li><a href="#">The Ultimate Packing List For Female Travelers</a></li>
                            <li><a href="#">How These 5 People Found The Path to Their Dream Trip</a></li>
                            <li><a href="#">A Definitive Guide to the Best Dining and Drinking Venues in the City</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-3 col-md-push-1">
                        <h4>Contact Information</h4>
                        <ul class="colorlib-footer-links">
                            <li> &nbsp; Sigiriya Jungles, <br> &nbsp; Audangawa Road, <br> &nbsp; Kimbissa, <br> &nbsp; Sigiriya. </li>
                            <li><a href="tel://+94-664508508">tel: +94-664508508</a></li>
                            <li><a href="mailto:reservations@sigiriyajungles.com"> reservations@sigiriyajungles.com </a></li>
                            <li><a href="http://sigiriyajungles.com" target="_blank"> sigiriyajungles.com </a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p>
                            Developed by Me(Thushara Supun) In 2K18 With Sanu Sir @IJSE -> (www.anoncoder.000webhostapp.com)
                        </p>
                    </div>
                </div>
            </div>
        </footer>
</div>



<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
</div>


<script src="dist/js/jquery.min.js"></script>
<script src="dist/js/jquery.easing.1.3.js"></script>
<script src="dist/js/bootstrap.min.js"></script>
<script src="dist/js/jquery.waypoints.min.js"></script>
<script src="dist/js/jquery.flexslider-min.js"></script>
<script src="dist/js/owl.carousel.min.js"></script>
<script src="dist/js/jquery.magnific-popup.min.js"></script>
<script src="dist/js/magnific-popup-options.js"></script>
<script src="dist/js/bootstrap-datepicker.js"></script>
<script src="dist/js/main.js"></script>
<script src="dist/controller/RoomsController.js"></script>

</body>
</html>

