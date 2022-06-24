<?php
/**
 * Created by IntelliJ IDEA.
 * User: Thushara Supun
 * Date: 24/11/2018
 * Time: 8:45 AM
 */

class DBConnection
{

    private $host = "127.0.0.1";
    private $userName = "root";
    private $password = "1997";
    private $database = "orrs";
    private $port = "3306";

    private $connection;

    /**
     * DBConnection constructor.
     */
    public function __construct()
    {
        $this->connection = new mysqli($this->host, $this->userName, $this->password, $this->database, $this->port);
        if ($this->connection->connect_errno) {
            echo $this->connection->connect_errno;
            die();
        }
    }

    public function getConnection()
    {
        return $this->connection;
    }

}