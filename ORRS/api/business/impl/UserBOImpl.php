<?php
/**
 * Created by IntelliJ IDEA.
 * User: Thushara Supun
 * Date: 25/11/2018
 * Time: 9:20 AM
 */

require_once __DIR__ . "/../../db/DBConnection.php";
require_once __DIR__ . "/../../model/User.php";
require_once __DIR__ . "/../UserBO.php";
require_once __DIR__ . "/../../repo/impl/UserRepoImpl.php";

class UserBOImpl implements UserBO
{
    private $userRepo;

    /**
     * UserBOImpl constructor.
     */
    public function __construct()
    {
        $this->userRepo = new UserRepoImpl();
        $connection = (new DBConnection())->getConnection();
        $this->userRepo->setConnection($connection);
    }


    public function signUp(User $user): int
    {
        return $this->userRepo->signUp($user);
    }

    public function signIn(User $user): User
    {
        return $this->userRepo->signIn($user);
    }

    public function getUser($userID): User
    {
        // TODO: Implement getUser() method.
    }

    public function updateUser(User $user): bool
    {
        // TODO: Implement updateUser() method.
    }
}