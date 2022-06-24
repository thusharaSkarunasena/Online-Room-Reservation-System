<?php
/**
 * Created by IntelliJ IDEA.
 * User: Thushara Supun
 * Date: 29/11/2018
 * Time: 9:54 AM
 */

require_once __DIR__."/../../db/DBConnection.php";
require_once __DIR__."/../RoomsRepo.php";

class RoomsRepoImpl implements RoomsRepo
{
    private $connection;

    public function setConnection(mysqli $connection)
    {
        $this->connection=$connection;
    }

    public function getSuiteAvailability($checkIn, $checkOut): int
    {
        $result=$this->connection->query("call getRoomAvailability('{$checkIn}','{$checkOut}','RT-001')");
        $current=0;
        while ($row=mysqli_fetch_assoc($result)){
            $current=$row['reserved'];
        }
        $remaining=10-$current;
        return $remaining;
    }

    public function getDoubleRoomAvailability($checkIn, $checkOut): int
    {
        $result=$this->connection->query("call getRoomAvailability('{$checkIn}','{$checkOut}','RT-002')");
        $current=0;
        while ($row=mysqli_fetch_assoc($result)){
            $current=$row['reserved'];
        }
        $remaining=60-$current;
        return $remaining;
    }

    public function getFamilyRoomAvailability($checkIn, $checkOut): int
    {
        $result=$this->connection->query("call getRoomAvailability('{$checkIn}','{$checkOut}','RT-003')");
        $current=0;
        while ($row=mysqli_fetch_assoc($result)){
            $current=$row['reserved'];
        }
        $remaining=50-$current;
        return $remaining;
    }

    public function getClassicDoubleRoomAvailability($checkIn, $checkOut): int
    {
        $result=$this->connection->query("call getRoomAvailability('{$checkIn}','{$checkOut}','RT-004')");
        $current=0;
        while ($row=mysqli_fetch_assoc($result)){
            $current=$row['reserved'];
        }
        $remaining=10-$current;
        return $remaining;
    }

    public function getSuperiorDoubleRoomAvailability($checkIn, $checkOut): int
    {
        $result=$this->connection->query("call getRoomAvailability('{$checkIn}','{$checkOut}','RT-005')");
        $current=0;
        while ($row=mysqli_fetch_assoc($result)){
            $current=$row['reserved'];
        }
        $remaining=40-$current;
        return $remaining;
    }

    public function getSuperiorFamilyRoomAvailability($checkIn, $checkOut): int
    {
        $result=$this->connection->query("call getRoomAvailability('{$checkIn}','{$checkOut}','RT-006')");
        $current=0;
        while ($row=mysqli_fetch_assoc($result)){
            $current=$row['reserved'];
        }
        $remaining=30-$current;
        return $remaining;
    }
}