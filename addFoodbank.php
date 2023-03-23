<?php

include("loadclass.php");

$name = "";
$phone = "";
$address = "";
$openTime = "";
$closeTime = "";
$address2 = "";
$state = "";
$city = "";
$postcode = "";
$email = "";
$description = "";

if($_SERVER['REQUEST_METHOD']=='POST'){ 
    if(isset($_POST['fb_name']) && isset($_POST['phone']) && isset($_POST['openTime']) && isset($_POST['closeTime']) && isset($_POST['address']) && isset($_POST['state']) && isset($_POST['city']) && isset($_POST['postcode'])
    && !empty($_POST['fb_name']) && !empty($_POST['phone']) && !empty($_POST['openTime']) && !empty($_POST['closeTime']) && !empty($_POST['address']) && !empty($_POST['state']) && !empty($_POST['city']) && !empty($_POST['postcode']) ){
        $addBank = new Foodbank();
        $result = $addBank->addFoodbank($_POST);
        //echo "success";
        header("Location: foodbankDashboard.php");
        
    }else{
        
        header("Location: foodbankDashboard.php");
    }  
    
}      
        $name = $_POST['fb_name'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $openTime = $_POST['openTime'];
        $closeTime = $_POST['closeTime'];
        $address2 = $_POST['address2'];
        $state = $_POST['state'];
        $city = $_POST['city'];
        $postcode = $_POST['postcode'];
        $email = $_POST['email'];
        $description = $_POST['description'];
                 
    
?>