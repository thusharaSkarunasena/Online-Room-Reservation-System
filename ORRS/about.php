<?php
/**
 * Created by IntelliJ IDEA.
 * User: Thushara Supun
 * Date: 24/11/2018
 * Time: 11:19 PM
 */
?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title> Sigiriya Jungles Resort >>> </title>
    <link rel="icon" type="image/png" href="dist/asset/image/myIcon.jpg">
    <meta name="viewport" content="width=device-width initial-scale=1">
    <meta http-equiv="refresh" content="15; url=log.php"/>
    <link rel="stylesheet" type="text/css" href="dist/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="dist/css/loaders.min.css">
    <link rel="stylesheet" type="text/css" href="dist/css/motion.min.css">
    <link rel="stylesheet" type="text/css" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="dist/css/about.css">
</head>
<body>
    <div id="div1" class="animation fade-in delay-05s">
        <h4>Hi, Welcome to 'About' Page.</h4>
    </div>
    <div id="div2" class="animation bounce-in-right delay-1s">
        <h3>We are still Working on this Page >>></h3>
    </div>
    <div id="div3" class="form-row justify-content-center text-center animation fade-in-down delay-3s">
        <h5 id="div3_h5_1">So, You will be Automatically Redirect to Home Page within&nbsp;</h5>
        <h5 id="div3_h5_2">10</h5>
        <h5>&nbsp;</h5>
        <h5 id="div3_h5_3">Seconds...</h5>
    </div>

    <div id="footer">
        <p class="animation back-in-up delay-3s">Developed by Me(Thushara Supun) In 2K18 With Sanu Sir @IJSE -> (www.anoncoder.000webhostapp.com)</p>
    </div>

    <script type="application/javascript" src="dist/js/bootstrap.min.js"></script>
    <script type="application/javascript" src="dist/js/jquery-3.3.1.min.js"></script>

    <script>

        function onLoad() {
            var anmCount = 0;
            setInterval(function (e) {
                var str = ' Sigiriya Jungles Resort >>> ';
                anmCount++;
                if (anmCount > str.length) {
                    anmCount = 0;
                }

                $('head title').text(str.substring(0, anmCount));

            }, 250);


            var count=9;
            setTimeout(function () {
                setInterval(function () {
                    if(count==-1){
                        // Do Nothing, Page will be redirect to Home Automatically
                    }else if(count==1){
                        $('#div3_h5_2').text(count);
                        $('#div3_h5_3').text('Second...');
                        count=count-1;
                    }else{
                        $('#div3_h5_2').text(count);
                        count=count-1;
                    }
                },1000) ;
            },4500);

        }
        onLoad();

    </script>

</body>
</html>