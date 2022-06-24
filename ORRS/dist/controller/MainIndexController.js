//==============================================================================================================
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

    // $('#checkInDate').val('2018-11-30');
    // $('#checkOutDate').val('2018-12-08');
    // $('#adultCombo').val('2');
    // $('#childrenCombo').val('1');

}

onLoad();
//===============================================================================================================


function setDatePickers() {
    if ($('#checkInDate').length > 0) {
        $('#checkInDate').datepicker({
            format: "yyyy-mm-dd",
            startDate: new Date()
        }).on('dp.change',function () {
            alert("done");
            // $('#checkOutDate').datepicker({
            //     format: "mm/dd/yyyy",
            //     startDate: $('#checkInDate').getDate()
            // });
        });
    }

    if ($('#checkOutDate').length > 0) {
        $('#checkOutDate').datepicker({
            format: "yyyy-mm-dd",
            startDate: new Date()
        });
    }
}

setDatePickers();


//================================================================================================================

function onBookNowClick() {

    if ($('#checkInDate').val() != '') {
        if ($('#checkOutDate').val() != '') {
            if ($('#adultCombo').val() != '0') {
                if ($('#childrenCombo').val() != '0') {
                    $('#searchRoomsBtn').click();
                } else {
                    $('#searchRoomsBtn').click();
                    alert("Please fill above search details to check availability.");
                }
            } else {
                $('#searchRoomsBtn').click();
                alert("Please fill above search details to check availability.");
            }
        } else {
            $('#searchRoomsBtn').click();
            alert("Please fill above search details to check availability.");
        }
    } else {
        $('#searchRoomsBtn').click();
        alert("Please fill above search details to check availability.");
    }

}

//================================================================================================================


$('#searchRoomsBtn').click(function () {
    if ($('#checkInDate').val() != '') {
        if ($('#checkOutDate').val() != '') {
            if ($('#adultCombo').val() != '0') {
                if ($('#childrenCombo').val() != '0') {

                    var formData = $('#searchDetailsForm').serialize();

                    $.ajax({
                        url: 'api/service/MainIndexService.php',
                        method: 'POST',
                        data: formData + "&operation=search",
                        async: true
                    }).done(function (resp) {
                        if (resp) {
                            window.location.replace('rooms.php');
                        } else {
                            alert("We are Sorry! All the Rooms have been Reserved on that Dates.")
                        }
                    });

                } else {
                    $('#checkInErrorMsg').text('');
                    $('#checkOutErrorMsg').text('');
                    $('#adultsErrorMsg').text('');
                    $('#childrenErrorMsg').text('  *Required Field.');
                    $('#childrenCombo').focus();
                }
            } else {
                $('#checkInErrorMsg').text('');
                $('#checkOutErrorMsg').text('');
                $('#adultsErrorMsg').text('  *Required Field.');
                $('#childrenErrorMsg').text('');
                $('#adultCombo').focus();
            }
        } else {
            $('#checkInErrorMsg').text('');
            $('#checkOutErrorMsg').text('  *Required Field.');
            $('#adultsErrorMsg').text('');
            $('#childrenErrorMsg').text('');
            $('#checkOutDate').focus();
        }
    } else {
        $('#checkInErrorMsg').text('  *Required Field.');
        $('#checkOutErrorMsg').text('');
        $('#adultsErrorMsg').text('');
        $('#childrenErrorMsg').text('');
        $('#checkInDate').focus();
    }
});
