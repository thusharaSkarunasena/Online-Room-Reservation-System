<?php
/**
 * Created by IntelliJ IDEA.
 * User: Thushara Supun
 * Date: 01/12/2018
 * Time: 7:04 PM
 */

require_once __DIR__."/../../db/DBConnection.php";
require_once __DIR__."/../../model/Payment.php";
require_once __DIR__."/../PaymentRepo.php";

class PaymentRepoImpl implements PaymentRepo
{
    private $connection;

    public function setConnection(mysqli $connection)
    {
        $this->connection=$connection;
    }

    public function reservationAndPayment(Payment $payment): string
    {
        mysqli_autocommit($this->connection,FALSE);

        $result=null;
        $resultOfResult1=0;

        $result1=$this->connection->query("call addReservation('{$payment->getEmail()}','{$payment->getCheckInDate()}','{$payment->getCheckOutDate()}','{$payment->getAdults()}','{$payment->getChildren()}')");

        $tempResult=$this->connection->query("select reservationID from reservation order by 1 desc limit 1");
        while ($row=mysqli_fetch_assoc($tempResult)){
            $resultOfResult1=(int)$row['reservationID'];
        }

        if($result1){

            $suiteNOR=(string)$payment->getSuiteNOR();
            $doubleRoomNOR=(string)$payment->getDoubleRoomNOR();
            $familyRoomNOR=(string)$payment->getFamilyRoomNOR();
            $classicDoubleRoomNOR=(string)$payment->getClassicDoubleRoomNOR();
            $superiorDoubleRoomNOR=(string)$payment->getSuperiorDoubleRoomNOR();
            $superiorFamilyRoomNOR=(string)$payment->getSuperiorFamilyRoomNOR();

            $result2=false;
            $result3=false;
            $result4=false;
            $result5=false;
            $result6=false;
            $result7=false;

            if($suiteNOR!='0'){
                $total1=12000*(int)$payment->getSuiteNOR();
                $result2=$this->connection->query("call addReservationDetail('{$resultOfResult1}','RT-001','{$payment->getSuiteNOR()}','{$total1}')");
            }

            if($doubleRoomNOR!='0'){
                $total2=15000*(int)$payment->getDoubleRoomNOR();
                $result3=$this->connection->query("call addReservationDetail('{$resultOfResult1}','RT-002','{$payment->getDoubleRoomNOR()}','{$total2}')");
            }

            if($familyRoomNOR!='0'){
                $total3=19000*(int)$payment->getFamilyRoomNOR();
                $result4=$this->connection->query("call addReservationDetail('{$resultOfResult1}','RT-003','{$payment->getFamilyRoomNOR()}','{$total3}')");
            }

            if($classicDoubleRoomNOR!='0'){
                $total4=13000*(int)$payment->getClassicDoubleRoomNOR();
                $result5=$this->connection->query("call addReservationDetail('{$resultOfResult1}','RT-004','{$payment->getClassicDoubleRoomNOR()}','{$total4}')");
            }

            if($superiorDoubleRoomNOR!='0'){
                $total5=20000*(int)$payment->getSuperiorDoubleRoomNOR();
                $result6=$this->connection->query("call addReservationDetail('{$resultOfResult1}','RT-005','{$payment->getSuperiorDoubleRoomNOR()}','{$total5}')");
            }

            if($superiorFamilyRoomNOR!='0'){
                $total6=21000*(int)$payment->getSuperiorFamilyRoomNOR();
                $result7=$this->connection->query("call addReservationDetail('{$resultOfResult1}','RT-006','{$payment->getSuperiorFamilyRoomNOR()}','{$total6}')");
            }

            if($result2 or $result3 or $result4 or $result5 or $result6 or $result7){
                $result8=$this->connection->query("call addPayment('{$resultOfResult1}','{$payment->getCardType()}','{$payment->getCardNumber()}','{$payment->getExpDate()}')");

                if ($result8){
                    mysqli_commit($this->connection);
                    $result='1';
                }else{
                    mysqli_rollback($this->connection);
                    $result='0';
                }

            }else{
                mysqli_rollback($this->connection);
                $result='0';
            }

        }else{
            mysqli_rollback($this->connection);
            $result='0';
        }

        mysqli_autocommit($this->connection, TRUE);
        return $result.$resultOfResult1;

    }
}

