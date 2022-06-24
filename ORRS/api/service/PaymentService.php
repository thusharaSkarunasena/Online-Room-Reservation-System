<?php
/**
 * Created by IntelliJ IDEA.
 * User: Thushara Supun
 * Date: 01/12/2018
 * Time: 3:00 AM
 */

session_start();

require_once __DIR__."/../model/Payment.php";
require_once __DIR__."/../business/impl/PaymentBOImpl.php";

$paymentBO=new PaymentBOImpl();

$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
    case "POST":

        $operation = $_POST['operation'];

        switch ($operation) {
            case "getNetTotal":
                $suite_NOR=(int)$_SESSION['suite_NOR'];
                $doubleRoom_NOR=(int)$_SESSION['doubleRoom_NOR'];
                $familyRoom_NOR=(int)$_SESSION['familyRoom_NOR'];
                $classicDoubleRoom_NOR=(int)$_SESSION['classicDoubleRoom_NOR'];
                $superiorDoubleRoom_NOR=(int)$_SESSION['superiorDoubleRoom_NOR'];
                $superiorFamilyRoom_NOR=(int)$_SESSION['superiorFamilyRoom_NOR'];
                echo 'LKR '.(($suite_NOR*12000)+($doubleRoom_NOR*15000)+($familyRoom_NOR*19000)+($classicDoubleRoom_NOR*13000)+($superiorDoubleRoom_NOR*20000)+($superiorFamilyRoom_NOR*21000)).'.00';
                break;

            case "payment":
                $email=$_SESSION['email'];
                $checkInDate=$_SESSION['checkIn'];
                $checkOutDate=$_SESSION['checkOut'];
                $adults=$_SESSION['adult'];
                $children=$_SESSION['children'];
                $suiteNOR=$_SESSION['suite_NOR'];
                $doubleRoomNOR=$_SESSION['doubleRoom_NOR'];
                $familyRoomNOR=$_SESSION['familyRoom_NOR'];
                $classicDoubleRoomNOR=$_SESSION['classicDoubleRoom_NOR'];
                $superiorDoubleRoomNOR=$_SESSION['superiorDoubleRoom_NOR'];
                $superiorFamilyRoomNOR=$_SESSION['superiorFamilyRoom_NOR'];
                $cardType=$_POST['cardType'];
                $cardNumber=$_POST['cardNumber'];
                $expDate=$_POST['expDate'];
                $tempPaymentObject=new Payment($email, $checkInDate, $checkOutDate, $adults, $children, $suiteNOR, $doubleRoomNOR, $familyRoomNOR, $classicDoubleRoomNOR, $superiorDoubleRoomNOR, $superiorFamilyRoomNOR, $cardType, $cardNumber, $expDate);
                echo $paymentBO->reservationAndPayment($tempPaymentObject);
        }

    case "GET":
}

