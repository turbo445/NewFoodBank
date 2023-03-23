<?php
include("loadclass.php");
// $host = "localhost";
// $username = "root";
// $password = "";
// $db = "foodbank";

// $connection = new mysqli($host, $username, $password, $db);

// if ($connection->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }
// if($_SERVER['REQUEST_METHOD']=='POST'){ 
//   if(isset($_POST['emailS']) && isset($_POST['passwordS']) && !empty($_POST['passwordS']) && !empty($_POST['emailS'])){

//     $radioval = $_POST['user'];

//     if($radioval == "receiver"){
//       $radioval = "receiver";
//     }else{
//       $radioval = "donator";
//     }

//     $login = new Login();
//     $result = $login->checkRegister($_POST);

//     if($result){
//       $row = $result[0];
      
//         if($_POST['emailS'] == $row['Email']){
//           echo $_POST['emailS'];
//                     echo $row['Email'];
//       // //     //header("Location: indexN2.php");
//       // //header("Location: indexN.html");
//       //     echo "sucess";
//         }else{
//         echo "not";
//         //header("Location: receiverProfile.html");
//         // $email = $_POST['emailS'];
//         // $password = $_POST['passwordS'];
//         // $res = mysqli_query($connection,"insert into users (Email,Password,Role) values ('$email','$password','$radioval') ");
          
//       //   if($res){
//       //     echo "success";
          
//       //     $login = new Login();
//       //     $result = $login->readalluser();
          

//       //     $_SESSION['userid'] = $row['id'];
//       //     header("Location: foodbankDashboard.php");
//       //   }else{
//       //     echo "fail";
//       //   }
//       }
//     }
//   }else
//   {
//     echo "not";
//     // header("Location: indexN2.php");
//    }
// }

if($_SERVER['REQUEST_METHOD']=='POST'){ 
  if(isset($_POST['emailS']) && isset($_POST['passwordS']) && !empty($_POST['passwordS']) && !empty($_POST['emailS'])){
          
        $radioval = $_POST['user'];

      if($radioval == "receiver"){
        $radioval = "receiver";
      }else{
        $radioval = "donator";
      }
    
    
          $login = new Login();
          $result = $login->checkRegister($_POST);

          if($result!=""){
             //echo "error";       
            header("Location: indexN2.php");
          }else
          { 
            //echo "nothing";
              $email = $_POST['emailS'];
              $password = $_POST['passwordS'];
              $query = "insert into users (Email,Password,Role) values ('$email','$password','$radioval')";
              $DB = new DataBase();
              $results = $DB->save($query);  

              if($results){
                echo "success";
                $query = "select * from users where Email = '$email' limit 1" ;
                $result = $DB->read($query);
                $row = $result[0];  
                $_SESSION['userid'] = $row['id'];
                header("Location: foodbankDashboard.php");
              }
          }   
    }else
  {   
      //$errorMsg = "Incorrect Email or Password"; 
      header("Location: indexN2.php");
  } 
  }  

 

 
   
?>