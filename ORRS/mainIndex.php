<?php
session_start();
{
    if((isset($_SESSION['checkIn']))){
        unset($_SESSION['checkIn']);
    }
    if(isset($_SESSION['checkOut'])){
        unset($_SESSION['checkOut']);
    }

    if(isset($_SESSION['rooms_NOR'])){
        unset($_SESSION['rooms_NOR']);
    }


}
{
    if($_COOKIE['email']=='loggedOut'){
        header("Location:log.php");
    }elseif (!isset($_SESSION['email'])) {
    header("Location:log.php");
}
}
?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Sigiriya Jungles Resort >>></title>
    <link rel="icon" type="image/png" href="dist/asset/image/myIcon.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="dist/css/mainIndexResponsive.css">
    <link rel="stylesheet" href="dist/css/animate.css">
    <link rel="stylesheet" href="dist/css/icomoon.css">
    <link rel="stylesheet" href="dist/css/bootstrap.css">
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="dist/css/magnific-popup.css">
    <link rel="stylesheet" href="dist/css/flexslider.css">
    <link rel="stylesheet" href="dist/css/owl.carousel.min.css">
    <link rel="stylesheet" href="dist/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="dist/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="dist/css/flaticon/flaticon.css">
    <link rel="stylesheet" href="dist/css/style.css">


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
        <div id="topBar" style="position: fixed; z-index: 99999999; width: 100%; height: 6%; opacity: 0.99" class="top">
            <div class="container">
                <div class="row">
                    <div class="col-xs-4">
                        <p class="site">WelCome to Our Online Room Reservation Service.</p>
                    </div>
                    <div class="col-xs-8 text-right">
                        <p class="num"></p>
                        <ul class="colorlib-social">
                            <?php echo "<p>Hello, " . $_SESSION['user'] . "  ;-) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; You Logged at : ".$_SESSION['time']."</p>"; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <nav style="position: fixed; z-index: 9999999; width: 100%; top: 6%; opacity: 0.8" id="nav-bar-mainIndex" class="navbar navbar-expand-md navbar-light bg-light">
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
            <div style="margin-top: 10.5%;" class="flexslider">
                <ul class="slides">
                    <li style="background-image: url(dist/asset/image/front_view_sj.jpg);">
                        <div class="overlay"></div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
                                    <div class="slider-text-inner text-center">
                                        <h2>Welcome to the Sigiriya Jungles Resort</h2>
                                        <h1>A Luxury Resort in Sri Lanka's Cultural Triangle</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li style="background-image: url(dist/asset/image/img_1.jpg);">
                        <div class="overlay"></div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
                                    <div class="slider-text-inner text-center">
                                        <h2>Discover &amp; Enjoy</h2>
                                        <h1>Everything you need in Sigiriya Jungles Resort</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li style="background-image: url(dist/asset/image/audangawa-village-trek-homepage.jpg);">
                        <div class="overlay"></div>
                        <div class="container-fluids">
                            <div class="row">
                                <div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
                                    <div class="slider-text-inner text-center">
                                        <h2>You are invited</h2>
                                        <h1>We know how to please you</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li style="background-image: url(dist/asset/image/img_3.jpg);">
                        <div class="overlay"></div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
                                    <div class="slider-text-inner text-center">
                                        <h2>Come &amp; enjoy the unforgetable nights</h2>
                                        <h1>In the heart of Sigiriya Jungles Resort</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li style="background-image: url(dist/asset/image/srilankan_menu.jpg);">
                        <div class="overlay"></div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
                                    <div class="slider-text-inner text-center">
                                        <h2>Discover &amp; Enjoy</h2>
                                        <h1>Everything you need in Sigiriya Jungles Resort</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </aside>
        <div id="colorlib-reservation">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 search-wrap">
                        <form method="post" id="searchDetailsForm" class="colorlib-form">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="date">Check-in:</label>
                                        <label for="date" id="checkInErrorMsg" style="color: #DF574B"> </label>
                                        <div class="form-field">
                                            <i class="icon icon-calendar2"></i>
                                            <input type="text" id="checkInDate" name="checkInDate" class="form-control date datepicker mainIndexInput"
                                                   placeholder="Check-in date">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="date">Check-out:</label>
                                        <label for="date" id="checkOutErrorMsg" style="color: #DF574B"> </label>
                                        <div class="form-field">
                                            <i class="icon icon-calendar2"></i>
                                            <input type="text" id="checkOutDate" name="checkOutDate" class="form-control date datepicker mainIndexInput"
                                                   placeholder="Check-out date">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="adults">Adults</label>
                                        <label for="adults" id="adultsErrorMsg" style="color: #DF574B"> </label>
                                        <div class="form-field">
                                            <i class="icon icon-arrow-down3"></i>
                                            <select name="adultCombo" id="adultCombo" class="form-control mainIndexInput">
                                                <option value="0">- none -</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5+</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="children">Children</label>
                                        <label for="children" id="childrenErrorMsg" style="color: #DF574B; font-size: 13px"> </label>
                                        <div class="form-field">
                                            <i class="icon icon-arrow-down3"></i>
                                            <select name="childrenCombo" id="childrenCombo" class="form-control mainIndexInput">
                                                <option value="0">- none -</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5+</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <input type="button" name="submit" id="searchRoomsBtn" value="Search"
                                           class="btn btn-primary btn-block">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div id="colorlib-services">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 animate-box text-center">
                        <div class="services">
							<span class="icon">
								<i class="flaticon-reception"></i>
							</span>
                            <h3>24/7 Front Desk</h3>
                            <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large
                                language ocean. A small river named Duden flows by their place and supplies</p>
                        </div>
                    </div>
                    <div class="col-md-3 animate-box text-center">
                        <div class="services">
							<span class="icon">
								<i class="flaticon-herbs"></i>
							</span>
                            <h3>Spa Suites</h3>
                            <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large
                                language ocean. A small river named Duden flows by their place and supplies</p>
                        </div>
                    </div>
                    <div class="col-md-3 animate-box text-center">
                        <div class="services">
							<span class="icon">
								<i class="flaticon-car"></i>
							</span>
                            <h3>Transfer Services</h3>
                            <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large
                                language ocean. A small river named Duden flows by their place and supplies</p>
                        </div>
                    </div>
                    <div class="col-md-3 animate-box text-center">
                        <div class="services">
							<span class="icon">
								<i class="flaticon-cheers"></i>
							</span>
                            <h3>Restaurant &amp; Bar</h3>
                            <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large
                                language ocean. A small river named Duden flows by their place and supplies</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="colorlib-rooms" class="colorlib-light-grey">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
                        <span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i
                                    class="icon-star-full"></i><i class="icon-star-full"></i></span>
                        <h2>Rooms &amp; Suites</h2>
                        <p>We love to tell our successful far far away, behind the word mountains, far from the
                            countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 animate-box">
                        <div class="owl-carousel owl-carousel2">
                            <div class="item">
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
                                        <li><i class="icon-check"></i> Price does not include VAT &amp; services fee
                                        </li>
                                    </ul>
                                    <p><a onclick="onBookNowClick()" class="btn btn-primary btn-book" >Book now!</a></p>
                                </div>
                            </div>
                            <div class="item">
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
                                        <li><i class="icon-check"></i> Price does not include VAT &amp; services fee
                                        </li>
                                    </ul>
                                    <p><a onclick="onBookNowClick()" class="btn btn-primary btn-book">Book now!</a></p>
                                </div>
                            </div>
                            <div class="item">
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
                                    </ul>
                                    <p><a onclick="onBookNowClick()" class="btn btn-primary btn-book">Book now!</a></p>
                                </div>
                            </div>
                            <div class="item">
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
                                        <li><i class="icon-check"></i> Price does not include VAT &amp; services fee
                                        </li>
                                    </ul>
                                    <p><a onclick="onBookNowClick()" class="btn btn-primary btn-book">Book now!</a></p>
                                </div>
                            </div>
                            <div class="item">
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
                                        <li><i class="icon-check"></i> Price does not include VAT &amp; services fee
                                        </li>
                                    </ul>
                                    <p><a onclick="onBookNowClick()" class="btn btn-primary btn-book">Book now!</a></p>
                                </div>
                            </div>
                            <div class="item">
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
                                        <li><i class="icon-check"></i> Price does not include VAT &amp; services fee
                                        </li>
                                    </ul>
                                    <p><a onclick="onBookNowClick()" class="btn btn-primary btn-book">Book now!</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 text-center animate-box">
                        <a href="#">View all rooms <i class="icon-arrow-right3"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div id="colorlib-testimony" class="colorlib-light-grey">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
                        <span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span>
                        <h2>Our Satisfied Guests says</h2>
                        <p>We love to tell our successful far far away, behind the word mountains, far from the
                            countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 animate-box">
                        <div class="testimony text-center">
                            <span class="img-user" style="background-image: url(dist/asset/image/person2.jpg);"></span>
                            <span class="user">Brian Doe</span>
                            <small>Satisfied Customer</small>
                            <blockquote>
                                <p></i> Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias
                                    autem provident. Odit ab aliquam dolor eius.</p>
                            </blockquote>
                        </div>
                    </div>
                    <div class="col-md-4 animate-box">
                        <div class="testimony text-center">
                            <span class="img-user" style="background-image: url(dist/asset/image/person1.jpg);"></span>
                            <span class="user">Nathalie Miller</span>
                            <small>Satisfied Customer</small>
                            <blockquote>
                                <p></i> Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias
                                    autem provident. Odit ab aliquam dolor eius.</p>
                            </blockquote>
                        </div>
                    </div>
                    <div class="col-md-4 animate-box">
                        <div class="testimony text-center">
                            <span class="img-user" style="background-image: url(dist/asset/image/person3.jpg);"></span>
                            <span class="user">Shara Jones</span>
                            <small>Satisfied Customer</small>
                            <blockquote>
                                <p></i> Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias
                                    autem provident. Odit ab aliquam dolor eius.</p>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
<script src="dist/js/modernizr-2.6.2.min.js"></script>
<script src="dist/js/owl.carousel.min.js"></script>
<script src="dist/js/jquery.magnific-popup.min.js"></script>
<script src="dist/js/magnific-popup-options.js"></script>
<script src="dist/js/bootstrap-datepicker.js"></script>
<script src="dist/js/main.js"></script>
<script src="dist/controller/MainIndexController.js"></script>
</body>
</html>

