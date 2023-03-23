<?php

include("loadclass.php");


if($_SERVER['REQUEST_METHOD']=='POST'){ 
        if(isset($_POST['email']) && isset($_POST['password']) 
        && !empty($_POST['email']) && !empty($_POST['password'])){

            $editUser = new User();
            $result = $editUser->editUser($_POST);
            //echo "success";
            header("Location: userDashboard.php");
            
        }else{
            //echo"error";
            header("Location: userDashboard.php");
        }  
        
    }

?>