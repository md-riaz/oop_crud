<?php
// import dbconfig.php file
require_once('./config/dbconfig.php');

// set new connection
$db = new dbconfig();

// to use methods from dbconfig class, we need to extend it.
class operations extends dbconfig
{
    public function store()
    {
        global $db;
        // if method is post then sanitize data and put it into insert_record function
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $first_name = $db->check_data($_POST["first_name"]);
            $last_name = $db->check_data($_POST["last_name"]);
            $email = $db->check_data($_POST["email"]);
            $username = $db->check_data($_POST["username"]);
            $password = $db->check_data($_POST["password"]);
            $password = password_hash($password, PASSWORD_DEFAULT); // hashed password

            // insert record to database
            if ($this->insert_record($first_name, $last_name, $email, $username, $password)) {
                echo '
                <div class="alert alert-success" role="alert">
                    Your Record has been successfully saved. :)
                </div>
                ';
            } else {
                echo '
                <div class="alert alert-danger" role="alert">
                    Failed to save your record. (:
                </div>
                ';
            }
        }
    }

    // function for inserting record
    public function insert_record($first_name, $last_name, $username, $email, $password)
    {
        global $db;
        // insert query
        $sql = "INSERT INTO `users`(`first_name`, `last_name`, `username`, `email`, `password`) VALUES ('$first_name','$last_name','$email','$username','$password')";
        // run query
        $result = $db->connection->query($sql);
        // return true or false for if condition
        return $result ? true : false; // if $result, then return true
    }
}