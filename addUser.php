<?php

include("loadclass.php");

$email = "";
$password = "";
$role = "";

if($_SERVER['REQUEST_METHOD']=='POST'){ 
    if(isset($_POST['email']) && isset($_POST['password']) && isset($_POST['role'])
    && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['role'])){
        $addUser = new User();
        $result = $addUser->addUser($_POST);
        //echo "success";
        header("Location: userDashboard.php");
        
    }else{
        
        header("Location: userDashboard.php");
    }  
    
}      $email = $_POST['email'];
       $password = $_POST['password'];
       $role = $_POST['role'];
?>