<?php

include("loadclass.php");

echo $_POST['id']." | ";
echo $_POST['fb_name']. " | ";
echo $_POST['phone']. " | ";
echo $_POST['openTime']. " | ";
echo $_POST['closeTime']. " | ";
echo $_POST['address']. " | ";
echo $_POST['state']. " | ";
echo $_POST['city']. " | ";
echo $_POST['postcode']. " | ";

if($_SERVER['REQUEST_METHOD']=='POST'){ 
    if(isset($_POST['fb_name']) && isset($_POST['phone']) && isset($_POST['openTime']) && isset($_POST['closeTime']) && isset($_POST['address']) && isset($_POST['state']) && isset($_POST['city']) && isset($_POST['postcode'])
    && !empty($_POST['fb_name']) && !empty($_POST['phone']) && !empty($_POST['openTime']) && !empty($_POST['closeTime']) && !empty($_POST['address']) && !empty($_POST['state']) && !empty($_POST['city']) && !empty($_POST['postcode']) ){
        $addBank = new Foodbank();
        $result = $addBank->editFoodbank($_POST);
        echo "success";
        header("Location: foodbankDashboard.php");
        
    }else{
        echo "error";
        header("Location: foodbankDashboard.php");
    }  
    
}      
    
                 
    
?>