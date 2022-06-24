<?php
/**
 * Created by IntelliJ IDEA.
 * User: Thushara Supun
 * Date: 01/12/2018
 * Time: 7:03 PM
 */

require_once __DIR__."/../model/Payment.php";

interface PaymentRepo
{
    public function setConnection(mysqli $connection);
    public function reservationAndPayment(Payment $payment):string ;
}