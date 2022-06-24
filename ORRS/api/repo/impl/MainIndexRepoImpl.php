<?php
/**
 * Created by IntelliJ IDEA.
 * User: Thushara Supun
 * Date: 27/11/2018
 * Time: 7:36 PM
 */

require_once __DIR__."/../../db/DBConnection.php";
require_once __DIR__."/../../model/SearchDetail.php";
require_once __DIR__."/../../repo/MainIndexRepo.php";

class MainIndexRepoImpl implements MainIndexRepo
{
    private $connection;

    public function setConnection(mysqli $connection)
    {
        $this->connection=$connection;
    }

    public function searchRooms(SearchDetail $searchDetail): bool
    {
        $result=$this->connection->query('select * from room');
        return true;
    }
}