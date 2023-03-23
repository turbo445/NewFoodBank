<?php


class Message{

public function getAllMessage(){

    $query = "select * from messageboard "; 

            $DB = new DataBase();
            $result = $DB->read($query);

            if($result){
                return $result;
            }else{
                return false;
            }

}

public function getMessageCount(){

    $query = "select count(*) as total from messageboard "; 

            $DB = new DataBase();
            $result = $DB->read($query);

            if($result){
                return $result[0]['total'];
            }else{
                return false;
            }

}

public function addMessage($data){

    $email = $_POST['email'];
    $message = $_POST['message'];
    

    $query = "insert into messageboard (email,message) values ('$email','$message')";
    
    //echo $query;

    $DB = new DataBase();
    $DB->save($query);

}
}