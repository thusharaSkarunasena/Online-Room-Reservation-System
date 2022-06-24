<?php
/**
 * Created by IntelliJ IDEA.
 * User: Thushara Supun
 * Date: 01/12/2018
 * Time: 6:59 PM
 */

require_once __DIR__."/../model/Payment.php";

interface PaymentBO
{
    public function reservationAndPayment(Payment $payment):string ;
}