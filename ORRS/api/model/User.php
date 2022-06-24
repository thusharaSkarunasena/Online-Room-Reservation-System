<?php
/**
 * Created by IntelliJ IDEA.
 * User: Thushara Supun
 * Date: 25/11/2018
 * Time: 9:12 AM
 */

class User
{
    private $name;
    private $email;
    private $password;
    private $status;

    /**
     * User constructor.
     * @param $name
     * @param $email
     * @param $password
     * @param $status
     */
    public function __construct($name, $email, $password, $status)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
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
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password): void
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status): void
    {
        $this->status = $status;
    }



}