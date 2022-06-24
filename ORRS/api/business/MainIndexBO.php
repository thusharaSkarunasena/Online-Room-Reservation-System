<?php
/**
 * Created by IntelliJ IDEA.
 * User: Thushara Supun
 * Date: 27/11/2018
 * Time: 7:24 PM
 */

require_once __DIR__ . "/../model/SearchDetail.php";

interface MainIndexBO
{

    public function searchRooms(SearchDetail $searchDetail): bool;

}