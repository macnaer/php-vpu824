<?php
class DB{

    private $conn;

    function __construct(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "loginsystem";
        $this->conn = new mysqli($servername, $username, $password, $dbname);
    }

    function CheckEmail($email){
        $sql = "SELECT * FROM `users` WHERE `email` = '$email'";
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0){
            return false;
        }else{
            return true;
        }
    }

    function Register($email, $password){
        $sql = "INSERT INTO users (email, password) VALUES('$email', '$password')";
        $this->conn->query($sql);
    }

    function Login($email){
        $sql = "SELECT * FROM `users` WHERE email = '$email'";
        $result = $this->conn->query($sql);
        $data = mysqli_fetch_assoc($result);
        return $data;
    }
 
    function __destruct(){
        $this->conn->close();
    }
}