<?php
// import operation.php file
require_once('./config/operations.php');

class dbconfig
{
    // public properties
    public $connection,
    // database configuration
        $host = 'localhost',
        $username = 'root',
        $password = '',
        $dbname = 'oop_crud';

    public function __construct()
    {
        // when object will be created of this file, construct will call the function and sql connection will be done autometically.
        $this->dbconnet();
    }

    // mysqli connection
    public function dbconnet()
    {
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->dbname);
        if ($this->connection->connect_error) {
            die('Connection Failed!' . $this->connection->connect_error);
        }
    }

    // check input data for sanitization
    public function check_data($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        $data = $this->connection->real_escape_string($data);
        return $data;
    }
}