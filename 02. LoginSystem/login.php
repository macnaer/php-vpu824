<?php 
session_start();
require_once "./DbManager.php";

$db = new DB();
$message = "";
if (!empty($_POST)){
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!$db->CheckEmail($email)){
        $login = $db->Login($email);
        if (hash_equals($login["password"], crypt($password, "mysupersaltstring345343t54t54g45"))){
            $message = "Login success";
            $_SESSION["email"] = $login["email"];
            $_SESSION["logged"] = true;
        }
        else{
            $message = "Login or password incorrect";
        }
    }else{
        $message = "User not found";
    }
}


require_once "./views/header.html";
require_once "./views/login.html";
require_once "./views/footer.html";