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

    setTimeout(function () {
        $('#visaRadioBtn, #masterRadioBtn').removeClass('animation fade-in-up delay-2s');
    },3500);

}

onLoad();

//================================================================================================================

function loadNetTotal() {
    $.ajax({
        url: "api/service/PaymentService.php",
        method: "POST",
        data: '&operation=getNetTotal',
        async: true
    }).done(function (resp) {
        $('#netTotal').val(resp);
    });
}

loadNetTotal();

//================================================================================================================

$('#payBtn').click(function () {
    // var cardType='';
    // if($('#visaRadioBtn')){
    //     cardType='Visa';
    // }else if($('#masterRadioBtn')){
    //     cardType='Master';
    // }

    if(/([0-9]{5,}){1}/.test($('#cardNumber').val())){
        if($('#expDate').val()!=''){
            var formData=$('#paymentForm').serialize();
            $.ajax({
                url: "api/service/PaymentService.php",
                method: "POST",
                data: formData + "&operation=payment" +"&cardType=Visa" ,
                async: true
            }).done(function (resp) {
                var result=resp.substring(0,1);
                if (result==='1'){
                    alert("Rooms have been Reserved to You Successfully. Your Reservation Code is : "+new Date().getTime()+"-"+resp.substring(1,resp.length));
                    window.location.replace('log.php');
                }else{
                    alert("Ooops... Sorry!, Something Went Wrong. Failed to Reserve Rooms. Please Try Again.");
                    window.location.replace('rooms.php');
                }
            });
        }else{
            alert("please Select Your Cards Expire Date.");
            $('#expDate').focus();
        }
    }else{
        alert("please Enter a Valid Card Number.");
        $('#cardNumber').focus();
    }

});