<?php
/**
 * Created by IntelliJ IDEA.
 * User: Thushara Supun
 * Date: 26/11/2018
 * Time: 6:06 PM
 */

require_once __DIR__ . "/../model/SearchDetail.php";
require_once __DIR__ . "/../business/impl/MainIndexBOImpl.php";

session_start();

$mainIndexBusiness = new MainIndexBOImpl();

$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
    case "POST":

        $operation = $_POST['operation'];

        switch ($operation) {
            case "search":
                $checkInDate = $_POST['checkInDate'];
                $checkOutDate = $_POST['checkOutDate'];
                $adultCombo = $_POST['adultCombo'];
                $childrenCombo = $_POST['childrenCombo'];
                $tempSearchDetail = new SearchDetail($checkInDate, $checkOutDate, $adultCombo, $childrenCombo);
                echo $mainIndexBusiness->searchRooms($tempSearchDetail);

                $_SESSION['checkIn']=(string)$checkInDate;
                $_SESSION['checkOut']=(string)$checkOutDate;
                $_SESSION['adult']=(int)$adultCombo;
                $_SESSION['children']=(int)$childrenCombo;

                break;

        }

    case "GET":
}

