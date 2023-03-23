<?php

    include("loadclass.php");

    $email = "";
    $password = "";

    $emailMsg = "";
    $passMsg = "";
    $errorMsg = " "; 

    if($_SERVER['REQUEST_METHOD']=='POST'){ 
        if(isset($_POST['email']) && isset($_POST['password']) && !empty($_POST['password']) && !empty($_POST['email'])){
                
                $login = new Login();
                $result = $login->check($_POST);

                if($result!=""){
                    //echo "not";
                    header("Location: indexN2.php");
                }else
                {
                    //echo "yes";
                    header("Location: foodbankDashboard.php");
                    
                }

        }else
        {   
            //$errorMsg = "Incorrect Email or Password"; 
            header("Location: indexN2.php");
        }   

       

       
        $email = $_POST['email']; 
        $password = $_POST['password'];
    }    
?>