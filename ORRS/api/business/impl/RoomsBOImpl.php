<?php
/**
 * Created by IntelliJ IDEA.
 * User: Thushara Supun
 * Date: 29/11/2018
 * Time: 9:53 AM
 */

require_once __DIR__."/../../db/DBConnection.php";
require_once __DIR__."/../../business/RoomsBO.php";
require_once __DIR__."/../../repo/impl/RoomsRepoImpl.php";

class RoomsBOImpl implements RoomsBO
{
    private $roomsRepo;

    /**
     * RoomsBOImpl constructor.
     */
    public function __construct()
    {
        $this->roomsRepo=new RoomsRepoImpl();

        $connection=(new DBConnection())->getConnection();
        $this->roomsRepo->setConnection($connection);
    }


    public function getSuiteAvailability($checkIn, $checkOut): int
    {
        return $this->roomsRepo->getSuiteAvailability($checkIn, $checkOut);
    }

    public function getDoubleRoomAvailability($checkIn, $checkOut): int
    {
        return $this->roomsRepo->getDoubleRoomAvailability($checkIn, $checkOut);
    }

    public function getFamilyRoomAvailability($checkIn, $checkOut): int
    {
        return $this->roomsRepo->getFamilyRoomAvailability($checkIn, $checkOut);
    }

    public function getClassicDoubleRoomAvailability($checkIn, $checkOut): int
    {
        return $this->roomsRepo->getClassicDoubleRoomAvailability($checkIn, $checkOut);
    }

    public function getSuperiorDoubleRoomAvailability($checkIn, $checkOut): int
    {
        return $this->roomsRepo->getSuperiorDoubleRoomAvailability($checkIn, $checkOut);
    }

    public function getSuperiorFamilyRoomAvailability($checkIn, $checkOut): int
    {
        return $this->roomsRepo->getSuperiorFamilyRoomAvailability($checkIn, $checkOut);
    }
}