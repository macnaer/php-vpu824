<?php
session_start();
require_once "./DbManager.php";
$db = new DB();

$message = "";
if (!empty($_POST)){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    if ($password == $confirm_password){
        if($db->CheckEmail($email)){
            $db->Register($email, crypt($password, "mysupersaltstring345343t54t54g45"));
            $message = "Register success";
        }
        else{
            $message = "Thes email already exists.";
        }
    }
    else{
        $message = "Password does not match";
    }
}

require_once "./views/header.html";
if ($message == "Register success"){
    require_once "./views/login.html";
}
else{
    require_once "./views/main.html";
}
require_once "./views/footer.html";

?>