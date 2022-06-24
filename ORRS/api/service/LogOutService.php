<?php
/**
 * Created by IntelliJ IDEA.
 * User: Thushara Supun
 * Date: 26/11/2018
 * Time: 8:04 PM
 */

session_start();
session_unset();
session_destroy();
setcookie("email","loggedOut" ,time()+ 0.5*60*60,"/");

header("Location:../../log.php");


