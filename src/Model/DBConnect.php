<?php
namespace QLD\Model;
class DBConnect
{
    protected $dsn;
    protected $username;
    protected $password;
    public function __construct()
    {

        $this->dsn = "mysql:host =localhost;dbname=QUANLYDIEM;charset=utf8";
        $this->username = "root";
        $this->password = "rVZ3&epKG@!DmuYQ";
    }
    function connect()
    {
        $connect = new \PDO($this->dsn,$this->username,$this->password);
        return $connect;
    }

}