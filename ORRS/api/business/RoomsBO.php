<?php
/**
 * Created by IntelliJ IDEA.
 * User: Thushara Supun
 * Date: 29/11/2018
 * Time: 9:53 AM
 */

interface RoomsBO
{

    public function getSuiteAvailability($checkIn, $checkOut): int;

    public function getDoubleRoomAvailability($checkIn, $checkOut): int;

    public function getFamilyRoomAvailability($checkIn, $checkOut): int;

    public function getClassicDoubleRoomAvailability($checkIn, $checkOut): int;

    public function getSuperiorDoubleRoomAvailability($checkIn, $checkOut): int;

    public function getSuperiorFamilyRoomAvailability($checkIn, $checkOut): int;

}