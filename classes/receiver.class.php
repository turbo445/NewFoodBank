<?php

class Receiver{

    public function getAllReceiver(){

        $query = "select * from receiver "; 
    
                $DB = new DataBase();
                $result = $DB->read($query);
    
                if($result){
                    return $result;
                }else{
                    return false;
                }
    
    }

    public function getReceiverCount(){

        $query = "select count(*) as total from receiver "; 
    
                $DB = new DataBase();
                $result = $DB->read($query);
    
                if($result){
                    return $result[0]['total'];
                }else{
                    return false;
                }
    
    }

    public function getdetailReceiver($id){

        $query = "select * from receiver where id= '$id' limit 1"; 
    
                $DB = new DataBase();
                return $DB->read($query);

    }

    public function editReceiver($data){

        $name = $_POST['name'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $address2 = $_POST['address2'];
        $state = $_POST['state'];
        $city = $_POST['city'];
        $postcode = $_POST['postcode'];
        $note  = $_POST['note'];
        $id = $_POST['id'];
        $email = $_POST['email'];
        
        $query = "update receiver set Name = '$name', Age = '$age', Gender = '$gender', Phone='$phone', Address='$address', Address2='$address2', State='$state', City='$city', Postcode='$postcode', Note='$note', Email ='$email' WHERE id=$id";

        $DB = new DataBase();
        $DB->save($query);

}

    public function addReceiver($data){

        $name = $_POST['name'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $address2 = $_POST['address2'];
        $state = $_POST['state'];
        $city = $_POST['city'];
        $postcode = $_POST['postcode'];
        $note  = $_POST['note'];
        $email = $_POST['email'];
        
    
        $query = "insert into receiver (Name, Age, Gender, Phone, Address, Address2, State, City, Postcode, Email, Note) values ('$name', '$age', '$gender', '$phone', '$address', '$address2', '$state', '$city', '$postcode','$email', '$note')";
        
        //echo $query;
    
        $DB = new DataBase();
        $DB->save($query);
    
    
    }
}




?>