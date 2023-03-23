<?php


class Foodbank{

public function getAllFoodbank(){

    $query = "select * from foodbank "; 

            $DB = new DataBase();
            $result = $DB->read($query);

            if($result){
                return $result;
            }else{
                return false;
            }

}

public function getFoodbankCount(){

    $query = "select count(*) as total from foodbank"; 

            $DB = new DataBase();
            $result = $DB->read($query);

            if($result){
                return $result[0]['total'];
            }else{
                return false;
            }

}

public function getdetailFoodbank($id){

    $query = "select * from foodbank where fb_id= '$id' limit 1"; 

            $DB = new DataBase();
            return $DB->read($query);

            

}

public function editFoodbank($data){

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
    $id = $_POST['id'];

    $query = "update foodbank set Fb_name = '$name', Phone = '$phone', Address = '$address', OpeningTime = '$openTime', ClosingTime = '$closeTime', Address2 = '$address2', State = '$state', City = '$city', Postcode = '$postcode', Email = '$email', Description = '$description'  WHERE fb_id=$id limit 1";    

    $DB = new DataBase();
    $DB->save($query);

}

public function addFoodbank($data){

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
    

    $query = "insert into foodbank (Fb_name,Phone,Address,OpeningTime,ClosingTime,Address2,State,City,Postcode,Email,Description) values ('$name','$phone','$address','$openTime','$closeTime','$address2','$state','$city','$postcode','$email','$description')";
    
    //echo $query;

    $DB = new DataBase();
    $DB->save($query);


}

// public function editFoodbank($data){

//     $name = $_POST['name'];
//     $phone = $_POST['phone'];
//     $address = $_POST['address'];
//     $time = $_POST['time'];
//     $description = $_POST['description'];
    

//     $query = "insert into foodbank (Fb_name,Phone,Address,Time,Description) values ('$name','$phone','$address','$time','$description')";
    
//     //echo $query;

//     $DB = new DataBase();
//     $DB->save($query);


// }




}

?>