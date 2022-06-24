<?php
/**
 * Created by IntelliJ IDEA.
 * User: Thushara Supun
 * Date: 01/12/2018
 * Time: 6:06 PM
 */

class Payment
{
    private $email;
    private $checkInDate;
    private $checkOutDate;
    private $adults;
    private $children;
    private $suiteNOR;
    private $doubleRoomNOR;
    private $familyRoomNOR;
    private $classicDoubleRoomNOR;
    private $superiorDoubleRoomNOR;
    private $superiorFamilyRoomNOR;
    private $cardType;
    private $cardNumber;
    private $expDate;

    /**
     * Payment constructor.
     * @param $email
     * @param $checkInDate
     * @param $checkOutDate
     * @param $adults
     * @param $children
     * @param $suiteNOR
     * @param $doubleRoomNOR
     * @param $familyRoomNOR
     * @param $classicDoubleRoomNOR
     * @param $superiorDoubleRoomNOR
     * @param $superiorFamilyRoomNOR
     * @param $cardType
     * @param $cardNumber
     * @param $expDate
     */
    public function __construct($email, $checkInDate, $checkOutDate, $adults, $children, $suiteNOR, $doubleRoomNOR, $familyRoomNOR, $classicDoubleRoomNOR, $superiorDoubleRoomNOR, $superiorFamilyRoomNOR, $cardType, $cardNumber, $expDate)
    {
        $this->email = $email;
        $this->checkInDate = $checkInDate;
        $this->checkOutDate = $checkOutDate;
        $this->adults = $adults;
        $this->children = $children;
        $this->suiteNOR = $suiteNOR;
        $this->doubleRoomNOR = $doubleRoomNOR;
        $this->familyRoomNOR = $familyRoomNOR;
        $this->classicDoubleRoomNOR = $classicDoubleRoomNOR;
        $this->superiorDoubleRoomNOR = $superiorDoubleRoomNOR;
        $this->superiorFamilyRoomNOR = $superiorFamilyRoomNOR;
        $this->cardType = $cardType;
        $this->cardNumber = $cardNumber;
        $this->expDate = $expDate;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
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

    /**
     * @return mixed
     */
    public function getSuiteNOR()
    {
        return $this->suiteNOR;
    }

    /**
     * @param mixed $suiteNOR
     */
    public function setSuiteNOR($suiteNOR): void
    {
        $this->suiteNOR = $suiteNOR;
    }

    /**
     * @return mixed
     */
    public function getDoubleRoomNOR()
    {
        return $this->doubleRoomNOR;
    }

    /**
     * @param mixed $doubleRoomNOR
     */
    public function setDoubleRoomNOR($doubleRoomNOR): void
    {
        $this->doubleRoomNOR = $doubleRoomNOR;
    }

    /**
     * @return mixed
     */
    public function getFamilyRoomNOR()
    {
        return $this->familyRoomNOR;
    }

    /**
     * @param mixed $familyRoomNOR
     */
    public function setFamilyRoomNOR($familyRoomNOR): void
    {
        $this->familyRoomNOR = $familyRoomNOR;
    }

    /**
     * @return mixed
     */
    public function getClassicDoubleRoomNOR()
    {
        return $this->classicDoubleRoomNOR;
    }

    /**
     * @param mixed $classicDoubleRoomNOR
     */
    public function setClassicDoubleRoomNOR($classicDoubleRoomNOR): void
    {
        $this->classicDoubleRoomNOR = $classicDoubleRoomNOR;
    }

    /**
     * @return mixed
     */
    public function getSuperiorDoubleRoomNOR()
    {
        return $this->superiorDoubleRoomNOR;
    }

    /**
     * @param mixed $superiorDoubleRoomNOR
     */
    public function setSuperiorDoubleRoomNOR($superiorDoubleRoomNOR): void
    {
        $this->superiorDoubleRoomNOR = $superiorDoubleRoomNOR;
    }

    /**
     * @return mixed
     */
    public function getSuperiorFamilyRoomNOR()
    {
        return $this->superiorFamilyRoomNOR;
    }

    /**
     * @param mixed $superiorFamilyRoomNOR
     */
    public function setSuperiorFamilyRoomNOR($superiorFamilyRoomNOR): void
    {
        $this->superiorFamilyRoomNOR = $superiorFamilyRoomNOR;
    }

    /**
     * @return mixed
     */
    public function getCardType()
    {
        return $this->cardType;
    }

    /**
     * @param mixed $cardType
     */
    public function setCardType($cardType): void
    {
        $this->cardType = $cardType;
    }

    /**
     * @return mixed
     */
    public function getCardNumber()
    {
        return $this->cardNumber;
    }

    /**
     * @param mixed $cardNumber
     */
    public function setCardNumber($cardNumber): void
    {
        $this->cardNumber = $cardNumber;
    }

    /**
     * @return mixed
     */
    public function getExpDate()
    {
        return $this->expDate;
    }

    /**
     * @param mixed $expDate
     */
    public function setExpDate($expDate): void
    {
        $this->expDate = $expDate;
    }



}