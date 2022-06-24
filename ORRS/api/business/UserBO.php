<?php
/**
 * Created by IntelliJ IDEA.
 * User: Thushara Supun
 * Date: 25/11/2018
 * Time: 9:15 AM
 */

require_once __DIR__ . "/../model/User.php";

interface UserBO
{
    public function signUp(User $user): int ;

    public function signIn(User $user): User;

    public function getUser($userID): User;

    public function updateUser(User $user): bool;

}