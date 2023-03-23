<?php

include("loadclass.php");

$email = "";
$message = "";

if($_SERVER['REQUEST_METHOD']=='POST'){ 
    $addMessage = new Message();
    $message = $addMessage->addMessage($_POST);
    //echo "success";
    header("Location: contactDashboard.php");
    
}else{
    
    header("Location: contactDashboard.php");
}  

    $email = $_POST['email'];
    $message = $_POST['message'];
?>