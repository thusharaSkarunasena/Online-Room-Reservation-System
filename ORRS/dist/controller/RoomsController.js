//==============================================================================================================
function onLoadPage() {
    var anmCount = 0;
    setInterval(function (e) {
        var str = ' Sigiriya Jungles Resort >>> ';
        anmCount++;
        if (anmCount > str.length) {
            anmCount = 0;
        }

        $('head title').text(str.substring(0, anmCount));

    }, 250);
}

onLoadPage();

//================================================================================================================

var roomAvailabilityErrorCount = 0;

function loadSuiteAvailability() {
    $.ajax({
        url: "api/service/RoomsService.php",
        method: "POST",
        data: "&operation=suitAvailability",
        async: true
    }).done(function (resp) {
        if (resp == 0) {
            $('#suite_li_1').text('(We are Sorry. All the Rooms have been Reserved.)');
            $('#suite_bnBtn').addClass('disabled');
        } else if (resp == 1) {
            $('#suite_li_1').text('(Only');
            $('#suite_li_2').text(resp);
            $('#suite_li_3').text('Room will be Available at Requested Days.)');
            $('#suite_bnBtn').addClass('active');
        } else if (resp > 1) {
            $('#suite_li_1').text('(Only');
            $('#suite_li_2').text(resp);
            $('#suite_li_3').text('Rooms will be Available at Requested Days.)');
            $('#suite_bnBtn').addClass('active');
        } else {
            roomAvailabilityErrorCount = roomAvailabilityErrorCount + 1;
        }
    });
}

loadSuiteAvailability();


function loadDoubleRoomAvailability() {
    $.ajax({
        url: "api/service/RoomsService.php",
        method: "POST",
        data: "&operation=doubleRoomAvailability",
        async: true
    }).done(function (resp) {
        if (resp == 0) {
            $('#doubleRoom_li_1').text('(We are Sorry. All the Rooms have been Reserved.)');
            $('#doubleRoom_bnBtn').addClass('disabled');
        } else if (resp == 1) {
            $('#doubleRoom_li_1').text('(Only');
            $('#doubleRoom_li_2').text(resp);
            $('#doubleRoom_li_3').text('Room will be Available at Requested Days.)');
            $('#doubleRoom_bnBtn').addClass('active');
        } else if (resp > 1) {
            $('#doubleRoom_li_1').text('(Only');
            $('#doubleRoom_li_2').text(resp);
            $('#doubleRoom_li_3').text('Rooms will be Available at Requested Days.)');
            $('#doubleRoom_bnBtn').addClass('active');
        } else {
            roomAvailabilityErrorCount = roomAvailabilityErrorCount + 1;
        }
    });
}

loadDoubleRoomAvailability();


function loadFamilyRoomAvailability() {
    $.ajax({
        url: "api/service/RoomsService.php",
        method: "POST",
        data: "&operation=familyRoomAvailability",
        async: true
    }).done(function (resp) {
        if (resp == 0) {
            $('#familyRoom_li_1').text('(We are Sorry. All the Rooms have been Reserved.)');
            $('#familyRoom_bnBtn').addClass('disabled');
        } else if (resp == 1) {
            $('#familyRoom_li_1').text('(Only');
            $('#familyRoom_li_2').text(resp);
            $('#familyRoom_li_3').text('Room will be Available at Requested Days.)');
            $('#familyRoom_bnBtn').addClass('active');
        } else if (resp > 1) {
            $('#familyRoom_li_1').text('(Only');
            $('#familyRoom_li_2').text(resp);
            $('#familyRoom_li_3').text('Rooms will be Available at Requested Days.)');
            $('#familyRoom_bnBtn').addClass('active');
        } else {
            roomAvailabilityErrorCount = roomAvailabilityErrorCount + 1;
        }
    });
}

loadFamilyRoomAvailability();


function loadClassicDoubleRoomAvailability() {
    $.ajax({
        url: "api/service/RoomsService.php",
        method: "POST",
        data: "&operation=classicDoubleRoomAvailability",
        async: true
    }).done(function (resp) {
        if (resp == 0) {
            $('#classicDoubleRoom_li_1').text('(We are Sorry. All the Rooms have been Reserved.)');
            $('#classicDoubleRoom_bnBtn').addClass('disabled');
        } else if (resp == 1) {
            $('#classicDoubleRoom_li_1').text('(Only');
            $('#classicDoubleRoom_li_2').text(resp);
            $('#classicDoubleRoom_li_3').text('Room will be Available at Requested Days.)');
            $('#classicDoubleRoom_bnBtn').addClass('active');
        } else if (resp > 1) {
            $('#classicDoubleRoom_li_1').text('(Only');
            $('#classicDoubleRoom_li_2').text(resp);
            $('#classicDoubleRoom_li_3').text('Rooms will be Available at Requested Days.)');
            $('#classicDoubleRoom_bnBtn').addClass('active');
        } else {
            roomAvailabilityErrorCount = roomAvailabilityErrorCount + 1;
        }
    });
}

loadClassicDoubleRoomAvailability();


function loadSuperiorDoubleRoomAvailability() {
    $.ajax({
        url: "api/service/RoomsService.php",
        method: "POST",
        data: "&operation=superiorDoubleRoomAvailability",
        async: true
    }).done(function (resp) {
        if (resp == 0) {
            $('#superiorDoubleRoom_li_1').text('(We are Sorry. All the Rooms have been Reserved.)');
            $('#superiorDoubleRoom_bnBtn').addClass('disabled');
        } else if (resp == 1) {
            $('#superiorDoubleRoom_li_1').text('(Only');
            $('#superiorDoubleRoom_li_2').text(resp);
            $('#superiorDoubleRoom_li_3').text('Room will be Available at Requested Days.)');
            $('#superiorDoubleRoom_bnBtn').addClass('active');
        } else if (resp > 1) {
            $('#superiorDoubleRoom_li_1').text('(Only');
            $('#superiorDoubleRoom_li_2').text(resp);
            $('#superiorDoubleRoom_li_3').text('Rooms will be Available at Requested Days.)');
            $('#superiorDoubleRoom_bnBtn').addClass('active');
        } else {
            roomAvailabilityErrorCount = roomAvailabilityErrorCount + 1;
        }
    });
}

loadSuperiorDoubleRoomAvailability();


function loadSuperiorFamilyRoomAvailability() {
    $.ajax({
        url: "api/service/RoomsService.php",
        method: "POST",
        data: "&operation=superiorFamilyRoomAvailability",
        async: true
    }).done(function (resp) {
        if (resp == 0) {
            $('#superiorFamilyRoom_li_1').text('(We are Sorry. All the Rooms have been Reserved.)');
            $('#superiorFamilyRoom_bnBtn').addClass('disabled');
        } else if (resp == 1) {
            $('#superiorFamilyRoom_li_1').text('(Only');
            $('#superiorFamilyRoom_li_2').text(resp);
            $('#superiorFamilyRoom_li_3').text('Room will be Available at Requested Days.)');
            $('#superiorFamilyRoom_bnBtn').addClass('active');
        } else if (resp > 1) {
            $('#superiorFamilyRoom_li_1').text('(Only');
            $('#superiorFamilyRoom_li_2').text(resp);
            $('#superiorFamilyRoom_li_3').text('Rooms will be Available at Requested Days.)');
            $('#superiorFamilyRoom_bnBtn').addClass('active');
        } else {
            roomAvailabilityErrorCount = roomAvailabilityErrorCount + 1;
            roomAvailabilityError();
        }
    });
}

loadSuperiorFamilyRoomAvailability();


function roomAvailabilityError() {
    if (roomAvailabilityErrorCount > 0) {
        alert('Ooops..Sorry!, Something Went Wrong.  Please Try Again to Check Rooms Availability ');
        window.location.replace('log.php');
    }
}


//================================================================================================================

$('#bookingSelectionsPopUpContainer').fadeOut(1);

$('#suite_bnBtn').click(function () {
    $('#roomType').val("Suite");
    var max = $('#suite_li_2').text().toString();
    var input = document.getElementById("numberOfRooms");
    input.setAttribute("max", max);
    $('#numberOfRooms').val($('#suite_NOR').val());
    $('#total').val($('#suite_total').val());
    reservationBtnStatus();
    bn_btn();
});


$('#doubleRoom_bnBtn').click(function () {
    $('#roomType').val("Double Room");
    var max = $('#doubleRoom_li_2').text().toString();
    var input = document.getElementById("numberOfRooms");
    input.setAttribute("max", max);
    $('#numberOfRooms').val($('#doubleRoom_NOR').val());
    $('#total').val($('#doubleRoom_total').val());
    reservationBtnStatus();
    bn_btn();
});


$('#familyRoom_bnBtn').click(function () {
    $('#roomType').val("Family Room");
    var max = $('#familyRoom_li_2').text().toString();
    var input = document.getElementById("numberOfRooms");
    input.setAttribute("max", max);
    $('#numberOfRooms').val($('#familyRoom_NOR').val());
    $('#total').val($('#familyRoom_total').val());
    reservationBtnStatus();
    bn_btn();
});


$('#classicDoubleRoom_bnBtn').click(function () {
    $('#roomType').val("Classic Double Room");
    var max = $('#classicDoubleRoom_li_2').text().toString();
    var input = document.getElementById("numberOfRooms");
    input.setAttribute("max", max);
    $('#numberOfRooms').val($('#classicDoubleRoom_NOR').val());
    $('#total').val($('#classicDoubleRoom_total').val());
    reservationBtnStatus();
    bn_btn();
});


$('#superiorDoubleRoom_bnBtn').click(function () {
    $('#roomType').val("Superior Double Room");
    var max = $('#superiorDoubleRoom_li_2').text().toString();
    var input = document.getElementById("numberOfRooms");
    input.setAttribute("max", max);
    $('#numberOfRooms').val($('#superiorDoubleRoom_NOR').val());
    $('#total').val($('#superiorDoubleRoom_total').val());
    reservationBtnStatus();
    bn_btn();
});


$('#superiorFamilyRoom_bnBtn').click(function () {
    $('#roomType').val("Superior Family Room");
    var max = $('#superiorFamilyRoom_li_2').text().toString();
    var input = document.getElementById("numberOfRooms");
    input.setAttribute("max", max);
    $('#numberOfRooms').val($('#superiorFamilyRoom_NOR').val());
    $('#total').val($('#superiorFamilyRoom_total').val());
    reservationBtnStatus();
    bn_btn();
});

function bn_btn() {
    $('#bookingSelectionsPopUpContainer').fadeIn(800);
    $('#bookingSelectionsPopUp').show();
    $('#bookingSelectionsPopUp').removeClass('animation slide-out-right')
    $('#bookingSelectionsPopUp').addClass('animation bounce-in-right');
    $('html body').css('overflow', 'hidden');
}

function onNumberInputChange() {
    var type = $('#roomType').val().toString();
    var num = '';
    var total = 0;
    if (type === 'Suite') {
        num = $('#numberOfRooms').val();
        total = num * 12000;
        $('#total').val('LKR. ' + total + '.00');
        $('#suite_NOR').val(num);
        $('#suite_total').val('' + total + '.00');
    }
    if (type === 'Double Room') {
        num = $('#numberOfRooms').val();
        total = num * 15000;
        $('#total').val('LKR. ' + total + '.00');
        $('#doubleRoom_NOR').val(num);
        $('#doubleRoom_total').val('' + total + '.00');
    }
    if (type === 'Family Room') {
        num = $('#numberOfRooms').val();
        total = num * 19000;
        $('#total').val('LKR. ' + total + '.00');
        $('#familyRoom_NOR').val(num);
        $('#familyRoom_total').val('' + total + '.00');
    }
    if (type === 'Classic Double Room') {
        num = $('#numberOfRooms').val();
        total = num * 13000;
        $('#total').val('LKR. ' + total + '.00');
        $('#classicDoubleRoom_NOR').val(num);
        $('#classicDoubleRoom_total').val('' + total + '.00');
    }
    if (type === 'Superior Double Room') {
        num = $('#numberOfRooms').val();
        total = num * 20000;
        $('#total').val('LKR. ' + total + '.00');
        $('#superiorDoubleRoom_NOR').val(num);
        $('#superiorDoubleRoom_total').val('' + total + '.00');
    }
    if (type === 'Superior Family Room') {
        num = $('#numberOfRooms').val();
        total = num * 21000;
        $('#total').val('LKR. ' + total + '.00');
        $('#superiorFamilyRoom_NOR').val(num);
        $('#superiorFamilyRoom_total').val('' + total + '.00');
    }
    {
        $('#netTotal').val((new Number($('#suite_total').val())+new Number($('#doubleRoom_total').val())+new Number($('#familyRoom_total').val())+new Number($('#classicDoubleRoom_total').val())+new Number($('#superiorDoubleRoom_total').val())+new Number($('#superiorFamilyRoom_total').val()))+'.00');
    }
    reservationBtnStatus();
}

function load() {
}

load();

function reservationBtnStatus() {
    if (($('#suite_NOR').val().toString() !== '0') | ($('#doubleRoom_NOR').val().toString() !== '0') | ($('#familyRoom_NOR').val().toString() !== '0') | ($('#classicDoubleRoom_NOR').val().toString() !== '0') | ($('#superiorDoubleRoom_NOR').val().toString() !== '0') | ($('#superiorFamilyRoom_NOR').val().toString() !== '0')) {
        $('#reservationsPopUpBtn').removeClass('disabled');
        $('#reservationsPopUpBtn').addClass('active');
    } else {
        $('#reservationsPopUpBtn').removeClass('active');
        $('#reservationsPopUpBtn').addClass('disabled');
    }
}

$('#bookingSelectionsPopUpCloseBtn').click(function () {
    $('#bookingSelectionsPopUp').removeClass('animation bounce-in-right')
    $('#bookingSelectionsPopUp').addClass('animation slide-out-right');
    $('#bookingSelectionsPopUpContainer').fadeOut(800);
    $('html body').css('overflow', 'visible');
});

$('#reservationsPopUpBtn').click(function () {
    var formData = $('#popUpForm').serialize();
    $.ajax({
        url: "api/service/RoomsService.php",
        method: "POST",
        async: true,
        data: formData + "&operation=popUpBtnAction"
    }).done(function (resp) {
        if (resp) {
            window.location.replace("payment.php");
        } else {
            alert("Ooops, Sorry! Something Went Wrong. Please try again to reserve rooms.");
        }
    });
});

