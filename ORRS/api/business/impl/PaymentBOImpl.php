<?php
/**
 * Created by IntelliJ IDEA.
 * User: Thushara Supun
 * Date: 01/12/2018
 * Time: 7:01 PM
 */

require_once __DIR__."/../../db/DBConnection.php";
require_once __DIR__."/../../model/Payment.php";
require_once __DIR__."/../PaymentBO.php";
require_once __DIR__."/../../repo/impl/PaymentRepoImpl.php";

class PaymentBOImpl implements PaymentBO
{

    private $paymentRepo;

    /**
     * PaymentBOImpl constructor.
     */
    public function __construct()
    {
        $this->paymentRepo=new PaymentRepoImpl();

        $connection=(new DBConnection)->getConnection();
        $this->paymentRepo->setConnection($connection);
    }


    public function reservationAndPayment(Payment $payment): string
    {
        return $this->paymentRepo->reservationAndPayment($payment);
    }
}