// =================================================================================================================
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

    setTimeout(function () {
        $('#signInBtn').removeClass("rotbo-in-right");
        $('#signUpBtn').removeClass("rotbo-in-left");
    },4000);

    setTimeout(function () {
        setInterval(function () {
            $('#signInBtn').addClass("fanfare");
            $('#signUpBtn').addClass("fanfare");
            setTimeout(function () {
                $('#signInBtn').removeClass("fanfare");
                $('#signUpBtn').removeClass("fanfare");
            },9500);
        },10000);
    },10000);

    setTimeout(function () {
        $('#mainTitle').removeClass('bounce-in-down');
    },1500);

    setTimeout(function () {
        setInterval(function () {
            $('#mainTitle').addClass('pulse');
            setTimeout(function () {
                $('#mainTitle').removeClass('pulse');
            },9500);
        },10000);
    },10000);

    new function () {
        var subTitle=["You are Invited!",
            "Discover & Enjoy >>>",
            "Come & enjoy the unforgetable nights.",
            "See How Simple to Reserve a luxury Room,",
            "Or Sign Up to Reserve a luxury Room,"];

        var des = ["We know how to please you.",
            "Every Thing you need in Sigiriya Jungles Resort.",
            "In the heart of Sigiriya Jungles Resort.",
            "Simply Click sign In if you are already with Us.",
            "Click Sign Up to Join with Us."];

        var anmCount = 1;
        setInterval(function () {
            $('#subTitle h3').removeClass("animation fade-out-up");
            $('#subTitle h3').addClass("animation fade-in-up");
            $('#subTitle h3').text(subTitle[anmCount]);

            $('#description h5').removeClass("animation fade-out-up");
            $('#description h5').addClass("animation fade-in-up");
            $('#description h5').text(des[anmCount]);
            setTimeout(function () {
                $('#subTitle h3').removeClass("animation fade-in-up");
                $('#subTitle h3').addClass("animation fade-out-up");

                $('#description h5').removeClass("animation fade-in-up");
                $('#description h5').addClass("animation fade-out-up");
            }, 7200);
            anmCount++;
            if (anmCount > des.length - 1) {
                anmCount = 0;
            }
        }, 8000);
    }
}

onLoad();
// =================================================================================================================

// ==============================SignIn popUp===========================================

$('#signInPopUpContainer').fadeOut(1);

$('#signInBtn').click(function () {

    // $('#signIn_userName').val("abc@example.com");
    // $('#signIn_password').val("12345678");

    $('#signInPopUpContainer').fadeIn(500);
    $('#signInPopUp').show();
    $('#signInPopUp').removeClass('animation slide-out-up')
    $('#signInPopUp').addClass('animation bounce-in-down');
    $('html body').css('overflow', 'hidden');
});

$('#signInPopUpCloseBtn').click(function () {
    $('#signIn_userName').css("border", "#BDC1C9 solid 1px");
    $('#signIn_password').css("border", "#BDC1C9 solid 1px");
    $('#signIn_errorMsg').css("color", "#ffffff");

    $('#signInPopUp').removeClass('animation bounce-in-down')
    $('#signInPopUp').addClass('animation slide-out-up');
    $('#signInPopUpContainer').fadeOut(800);
    $('html body').css('overflow', 'visible');
});

// ==============================/SignIn popUp===========================================


// ==============================SignUp popUp===========================================

$('#signUpPopUpContainer').fadeOut(1);

$('#signUpBtn').click(function () {

    // $('#signUp_name').val("Thushara");
    // $('#signUp_email').val("abc@example.com");
    // $('#signUp_password').val("12345678");
    // $('#signUp_reTypePassword').val("12345678");

    $('#signUpPopUpContainer').fadeIn(500);
    $('#signUpPopUp').show();
    $('#signUpPopUp').removeClass('animation slide-out-up')
    $('#signUpPopUp').addClass('animation bounce-in-down');
    $('html body').css('overflow', 'hidden');
});

$('#signUpPopUpCloseBtn').click(function () {
    $('#signUp_name').css("border", "#BDC1C9 solid 1px");
    $('#signUp_email').css("border", "#BDC1C9 solid 1px");
    $('#signUp_password').css("border", "#BDC1C9 solid 1px");
    $('#signUp_reTypePassword').css("border", "#BDC1C9 solid 1px");
    $('#signUp_errorMsg').css("color", "#ffffff");

    $('#signUpPopUp').removeClass('animation bounce-in-down')
    $('#signUpPopUp').addClass('animation slide-out-up');
    $('#signUpPopUpContainer').fadeOut(800);
    $('html body').css('overflow', 'visible');
});

// ==============================/SignUp popUp==============================================


//==============================Sign Up PopUp Button Action=================================
$('#signUpPopUpBtn').click(function () {
    if (/([a-z A-Z . ]{5,})/.test($('#signUp_name').val())) {
        if (/([a-z A-Z 0-9]+[@]{1}[a-z]{3,}[.]{1}[com | org | net | biz | lk]{2,3}){1}/.test($('#signUp_email').val())) {
            if (/.{6,}/.test($('#signUp_password').val())) {
                if (($('#signUp_password').val()) == ($('#signUp_reTypePassword').val())) {
                    $('#signUp_name').css("border", "#BDC1C9 solid 1px");
                    $('#signUp_email').css("border", "#BDC1C9 solid 1px");
                    $('#signUp_password').css("border", "#BDC1C9 solid 1px");
                    $('#signUp_reTypePassword').css("border", "#BDC1C9 solid 1px");
                    $('#signUp_errorMsg').css("color", "#ffffff");

                    var formData = $('#signUpForm').serialize();
                    $.ajax({
                        url: "api/service/LogService.php",
                        method: "POST",
                        async: true,
                        data: formData + "&operation=signUp"
                    }).done(function (resp) {
                        if (resp==1) {
                            alert("You have been Registered Successfully!. Now, Sign In to use Our Services.");
                            $('#signUpPopUpCloseBtn').click();
                            $('#signInBtn').click();
                        } else if(resp==0){
                            alert("Sorry!, Something Went Wrong; Failed to Register. Please Try Again..");
                            $('#signUpPopUpCloseBtn').click();
                            $('#signUpBtn').click();
                        } else{
                            alert("You have been Registered Already!. Now, Sign In to use Our Services.");
                            $('#signUpPopUpCloseBtn').click();
                            $('#signInBtn').click();
                        }
                    });

                } else {
                    $('#signUp_errorMsg').css("color", "#DF574B");
                    $('#signUp_errorMsg').text("Confirm Password doesn't Match With the Password");
                    $('#signUp_name').css("border", "#BDC1C9 solid 1px");
                    $('#signUp_email').css("border", "#BDC1C9 solid 1px");
                    $('#signUp_password').css("border", "#BDC1C9 solid 1px");
                    $('#signUp_reTypePassword').css("border", "#F11829 solid 1px");
                    $('#signUp_reTypePassword').focus();
                }
            } else {
                $('#signUp_errorMsg').css("color", "#DF574B");
                $('#signUp_errorMsg').text("Please Enter a Strong Password");
                $('#signUp_name').css("border", "#BDC1C9 solid 1px");
                $('#signUp_email').css("border", "#BDC1C9 solid 1px");
                $('#signUp_password').css("border", "#F11829 solid 1px");
                $('#signUp_reTypePassword').css("border", "#BDC1C9 solid 1px");
                $('#signUp_password').focus();
            }
        } else {
            $('#signUp_errorMsg').css("color", "#DF574B");
            $('#signUp_errorMsg').text("Please Enter a Valid E-Mail");
            $('#signUp_name').css("border", "#BDC1C9 solid 1px");
            $('#signUp_email').css("border", "#F11829 solid 1px");
            $('#signUp_password').css("border", "#BDC1C9 solid 1px");
            $('#signUp_reTypePassword').css("border", "#BDC1C9 solid 1px");
            $('#signUp_email').focus();
        }
    } else {
        $('#signUp_errorMsg').css("color", "#DF574B");
        $('#signUp_errorMsg').text("Name is a Required Field");
        $('#signUp_name').css("border", "#F11829 solid 1px");
        $('#signUp_email').css("border", "#BDC1C9 solid 1px");
        $('#signUp_password').css("border", "#BDC1C9 solid 1px");
        $('#signUp_reTypePassword').css("border", "#BDC1C9 solid 1px");
        $('#signUp_name').focus();
    }
});
//==============================/Sign Up PopUp Button Action=================================


//==============================Sign In PopUp Button Action=================================
$('#signInPopUpBtn').click(function () {
    if (/([a-z A-Z 0-9]+[@]{1}[a-z]{3,}[.]{1}[com | org | net | biz | lk]{2,3}){1}/.test($('#signIn_userName').val())) {
        if (/.{6,}/.test($('#signIn_password').val())) {
            $('#signIn_userName').css("border", "#BDC1C9 solid 1px");
            $('#signIn_password').css("border", "#BDC1C9 solid 1px");
            $('#signIn_errorMsg').css("color", "#ffffff");

            var formData = $('#signInForm').serialize();

            $.ajax({
                url: "api/service/LogService.php",
                method: "POST",
                async: true,
                data: formData + "&operation=signIn"
            }).done(function (resp) {
                if (resp) {
                    window.location.replace('mainIndex.php');
                } else {
                    $('#signIn_userName').val("");
                    $('#signIn_password').val("");
                    $('#signIn_userName').css("border", "#F11829 solid 1px");
                    $('#signIn_password').css("border", "#F11829 solid 1px");
                    $('#signIn_userName').focus();
                    $('#signIn_errorMsg').css("color", "#DF574B");
                    $('#signIn_errorMsg').text("User Name or Password is Incorrect!");
                }
            });
        } else {
            $('#signIn_errorMsg').css("color", "#DF574B");
            $('#signIn_errorMsg').text("Please Enter the Correct Password");
            $('#signIn_userName').css("border", "#BDC1C9 solid 1px");
            $('#signIn_password').css("border", "#F11829 solid 1px");
            $('#signIn_password').focus();
        }
    } else {
        $('#signIn_errorMsg').css("color", "#DF574B");
        $('#signIn_errorMsg').text("Please Enter the Valid User Name");
        $('#signIn_userName').css("border", "#F11829 solid 1px");
        $('#signIn_password').css("border", "#BDC1C9 solid 1px");
        $('#signIn_userName').focus();
    }
});
//==============================/Sign In PopUp Button Action=================================
