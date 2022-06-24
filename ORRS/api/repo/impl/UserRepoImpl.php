<?php
/**
 * Created by IntelliJ IDEA.
 * User: Thushara Supun
 * Date: 25/11/2018
 * Time: 9:25 AM
 */

require_once __DIR__ . "/../../db/DBConnection.php";
require_once __DIR__ . "/../../model/User.php";
require_once __DIR__ . "/../UserRepo.php";

class UserRepoImpl implements UserRepo
{

    private $connection;

    public function setConnection(mysqli $connection)
    {
        $this->connection = $connection;
    }

    public function signUp(User $user): int
    {
        $result1 = $this->connection->query("select password from users where email='{$user->getEmail()}'limit 1");
        $tempPassword=null;
        while ($row=mysqli_fetch_assoc($result1)){
            $tempPassword=$row['password'];
        }

        if($tempPassword==null){
            $result2 = $this->connection->query("call signUp('{$user->getName()}','{$user->getEmail()}','{$user->getPassword()}','{$user->getStatus()}')");
            if($result2 > 0){
                return 1;
            }else{
                return 0;
            }
        }else{
            return -1;
        }
    }

    public function signIn(User $user): User
    {
        $result = $this->connection->query("call signIn('{$user->getEmail()}','{$user->getPassword()}')");
        $tempUser=new User(null, null, null, null);
        while ($row=mysqli_fetch_assoc($result)){
            $tempUser->setName($row['name']);
            $tempUser->setEmail($row['email']);
            $tempUser->setPassword($row['password']);
            $tempUser->setStatus($row['status']);
        }
        return $tempUser;
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