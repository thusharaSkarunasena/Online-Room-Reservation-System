<?php
/**
 * Created by IntelliJ IDEA.
 * User: Thushara Supun
 * Date: 27/11/2018
 * Time: 7:34 PM
 */

require_once __DIR__ . "/../model/SearchDetail.php";

interface MainIndexRepo
{

    public function setConnection(mysqli $connection);

    public function searchRooms(SearchDetail $searchDetail): bool;

}