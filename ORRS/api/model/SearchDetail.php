<?php
/**
 * Created by IntelliJ IDEA.
 * User: Thushara Supun
 * Date: 27/11/2018
 * Time: 7:20 PM
 */

class SearchDetail
{

    private $checkInDate;
    private $checkOutDate;
    private $adults;
    private $children;

    /**
     * searchDetail constructor.
     * @param $checkInDate
     * @param $checkOutDate
     * @param $adults
     * @param $children
     */
    public function __construct($checkInDate, $checkOutDate, $adults, $children)
    {
        $this->checkInDate = $checkInDate;
        $this->checkOutDate = $checkOutDate;
        $this->adults = $adults;
        $this->children = $children;
    }

    /**
     * @return mixed
     */
    public function getCheckInDate()
    {
        return $this->checkInDate;
    }

    /**
     * @param mixed $checkInDate
     */
    public function setCheckInDate($checkInDate): void
    {
        $this->checkInDate = $checkInDate;
    }

    /**
     * @return mixed
     */
    public function getCheckOutDate()
    {
        return $this->checkOutDate;
    }

    /**
     * @param mixed $checkOutDate
     */
    public function setCheckOutDate($checkOutDate): void
    {
        $this->checkOutDate = $checkOutDate;
    }

    /**
     * @return mixed
     */
    public function getAdults()
    {
        return $this->adults;
    }

    /**
     * @param mixed $adults
     */
    public function setAdults($adults): void
    {
        $this->adults = $adults;
    }

    /**
     * @return mixed
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * @param mixed $children
     */
    public function setChildren($children): void
    {
        $this->children = $children;
    }



}