<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> WelCome ! </title>
    <meta name="viewport" content="width=device-width initial-scale=1">
    <meta http-equiv="refresh" content="6; url=log.php"/>
    <link rel="icon" type="image/png" href="dist/asset/image/myIcon.jpg">
    <link rel="stylesheet" type="text/css" href="dist/css/index.css">
    <link rel="stylesheet" type="text/css" href="dist/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="dist/css/loaders.min.css">
    <link rel="stylesheet" type="text/css" href="dist/css/motion.min.css">
    <link rel="stylesheet" type="text/css" href="dist/css/bootstrap.min.css">
</head>
<body>

<script type="application/javascript" src="dist/js/bootstrap.min.js"></script>
<script type="application/javascript" src="dist/js/jquery-3.3.1.min.js"></script>

<img id="backImg" src="dist/asset/image/indexBackground.jpg">

<div id="backFrame">
    <div id="frontFrame">
        <div class="loaders" id="loader">
            <div class="loader">
                <div class="square-spin">
                    <div></div>
                </div>
            </div>
        </div>
        <br>
        <div id="h2Div" class="animation fade-in delay-2s">
            <h2>Wel Come...</h2>
        </div>
        <br>
        <div id="h4Div" class="animation fade-in-down delay-3s">
            <h4>New Smart Way to Book Your Favourite Resort's Rooms >>></h4>
        </div>
    </div>
</div>

<script>
    setTimeout(function () {
        $('head title').text("Redirecting...");
    }, 5000);
</script>

</body>
</html>