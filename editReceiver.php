<?php

include("loadclass.php");

echo $_POST['id']." | ";
echo $_POST['name']. " | ";
echo $_POST['phone']. " | ";
echo $_POST['address']. " | ";
echo $_POST['note']. " | ";
echo $_POST['age']. " | ";
echo $_POST['gender']. " | ";
echo $_POST['state']. " | ";
echo $_POST['city']. " | ";
echo $_POST['postcode']. " | ";

if($_SERVER['REQUEST_METHOD']=='POST'){ 
    if(isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['address']) && isset($_POST['note']) && isset($_POST['age']) && isset($_POST['gender']) && isset($_POST['state']) && isset($_POST['city']) && isset($_POST['postcode'])
    && !empty($_POST['name']) && !empty($_POST['phone']) && !empty($_POST['address']) && !empty($_POST['note']) && !empty($_POST['age']) && !empty($_POST['gender']) && !empty($_POST['state']) && !empty($_POST['city']) && !empty($_POST['postcode'])){
        $addReceiver = new Receiver();
        $result = $addReceiver->editReceiver($_POST);
        echo "success";
        if ($user_data['Role'] == "Admin"){
            header("Location: receiverDashboard.php");
        } else {
            header("Location: receiverProfile.php");
        }
        
    }else{
        echo "error";
        if ($user_data['Role'] == "Admin"){
            header("Location: receiverDashboard.php");
        } else {
            header("Location: receiverProfile.php");
        }
    }  
    
}       
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $note = $_POST['note'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $state = $_POST['state'];
        $city = $_POST['city'];
        $postcode = $_POST['postcode'];
?>