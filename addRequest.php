<?php

include("loadclass.php");

$name = "";
$email = "";
$note = "";

if($_SERVER['REQUEST_METHOD']=='POST'){ 
    $addRequest = new Request();
    $result = $addRequest->addRequest($_POST);
    //echo "success";
    header("Location: foodbankDashboard.php");
    
}else{
    
    header("Location: foodbankDashboard.php");
}  
        
    $name = $_POST['fb_name'];
    $email = $_POST['email'];
    $description = $_POST['note'];
?>