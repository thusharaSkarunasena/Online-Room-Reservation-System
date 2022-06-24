<?php
/**
 * Created by IntelliJ IDEA.
 * User: Thushara Supun
 * Date: 24/11/2018
 * Time: 1:00 PM
 */

require_once __DIR__ . "/../model/User.php";
require_once __DIR__ . "/../business/impl/UserBOImpl.php";

session_start();

$userBusiness = new UserBOImpl();

$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
    case "POST":

        $operation = $_POST['operation'];

        switch ($operation) {
            case "signUp":
                $signUpName = $_POST['signUp_name'];
                $signUpMail = $_POST['signUp_email'];
                $signUpPassword = $_POST['signUp_password'];
                $userTemp = new User($signUpName, $signUpMail, $signUpPassword, "1");
                echo $userBusiness->signUp($userTemp);
                break;
            case "signIn":
                $signInUserName = $_POST['si    gnIn_userName'];
                $signInPassword = $_POST['signIn_password'];
                $userTemp = new User(null, $signInUserName, $signInPassword, null);
                $user = $userBusiness->signIn($userTemp);
                if ((($user->getEmail()) == $signInUserName) and (($user->getPassword()) == $signInPassword)) {
                    $_SESSION['user'] = $user->getName();
                    $_SESSION['email'] = $user->getEmail();
                    $_SESSION['time'] = date("Y-m-d  h:i:sa");
                    setcookie("user", $user->getName(), time() + 0.5 * 60 * 60, "/");
                    setcookie("email", $user->getEmail(), time() + 0.5 * 60 * 60, "/");
                    setcookie("time", date("Y-m-d  h:i:sa"), time() + 0.5 * 60 * 60, "/");
                    echo true;
                } else {
                    echo false;
                }
                break;
        }

    case "GET":
}

