<?php
/**
 * Created by IntelliJ IDEA.
 * User: Thushara Supun
 * Date: 29/11/2018
 * Time: 9:54 AM
 */
session_start();

require_once __DIR__ . "/../business/impl/RoomsBOImpl.php";

$roomsBusiness = new RoomsBOImpl();

$checkIn = $_SESSION['checkIn'];
$checkOut = $_SESSION['checkOut'];
$adult = $_SESSION['adult'];
$children = $_SESSION['children'];

$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
    case "POST":

        $operation = $_POST['operation'];

        switch ($operation) {
            case "suitAvailability":
                echo $roomsBusiness->getSuiteAvailability($checkIn, $checkOut);
                break;
            case "doubleRoomAvailability":
                echo $roomsBusiness->getDoubleRoomAvailability($checkIn, $checkOut);
                break;
            case "familyRoomAvailability":
                echo $roomsBusiness->getFamilyRoomAvailability($checkIn, $checkOut);
                break;
            case "classicDoubleRoomAvailability":
                echo $roomsBusiness->getClassicDoubleRoomAvailability($checkIn, $checkOut);
                break;
            case "superiorDoubleRoomAvailability":
                echo $roomsBusiness->getSuperiorDoubleRoomAvailability($checkIn, $checkOut);
                break;
            case "superiorFamilyRoomAvailability":
                echo $roomsBusiness->getSuperiorFamilyRoomAvailability($checkIn, $checkOut);
                break;
            case  "popUpBtnAction":

                $suite_NOR= $_POST['suite_NOR'];
                $doubleRoom_NOR = $_POST['doubleRoom_NOR'];
                $familyRoom_NOR = $_POST['familyRoom_NOR'];
                $classicDoubleRoom_NOR = $_POST['classicDoubleRoom_NOR'];
                $superiorDoubleRoom_NOR = $_POST['superiorDoubleRoom_NOR'];
                $superiorFamilyRoom_NOR = $_POST['superiorFamilyRoom_NOR'];

                $_SESSION['suite_NOR'] = $suite_NOR;
                $_SESSION['doubleRoom_NOR'] =(int) $doubleRoom_NOR;
                $_SESSION['familyRoom_NOR'] =(int) $familyRoom_NOR;
                $_SESSION['classicDoubleRoom_NOR'] =(int) $classicDoubleRoom_NOR;
                $_SESSION['superiorDoubleRoom_NOR'] =(int) $superiorDoubleRoom_NOR;
                $_SESSION['superiorFamilyRoom_NOR'] =(int) $superiorFamilyRoom_NOR;
                $confirmSessions = false;
                if (isset($_SESSION['suite_NOR'])) {
                    if (isset($_SESSION['doubleRoom_NOR'])) {
                        if (isset($_SESSION['familyRoom_NOR'])) {
                            if (isset($_SESSION['classicDoubleRoom_NOR'])) {
                                if (isset($_SESSION['superiorDoubleRoom_NOR'])) {
                                    if (isset($_SESSION['superiorFamilyRoom_NOR'])) {
                                        $_SESSION['rooms_NOR']="selected";
                                        $confirmSessions = true;
                                    } else {
                                        $confirmSessions = false;
                                    }
                                } else {
                                    $confirmSessions = false;
                                }
                            } else {
                                $confirmSessions = false;
                            }
                        } else {
                            $confirmSessions = false;
                        }
                    } else {
                        $confirmSessions = false;
                    }
                } else {
                    $confirmSessions = false;
                }
                echo $confirmSessions;
                break;


        }

    case "GET":
}

