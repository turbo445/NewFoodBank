<?php


class Request{

public function getAllRequest(){

    $query = "select * from request "; 

            $DB = new DataBase();
            $result = $DB->read($query);

            if($result){
                return $result;
            }else{
                return false;
            }

}

public function getRequestCount(){

    $query = "select count(*) as total from request "; 

            $DB = new DataBase();
            $result = $DB->read($query);

            if($result){
                return $result[0]['total'];
            }else{
                return false;
            }

}

public function getdetailRequest($id){

    $query = "select * from request where id= '$id' limit 1"; 

            $DB = new DataBase();
            return $DB->read($query);

            

}

public function editRequest($data){

    $name = $_POST['fb_name'];
    $email = $_POST['email'];
    $id = $_POST['id'];
    $note = $_POST['note'];

    $query = "update request set Fb_name = '$name', Email = '$email', Note = '$Note' WHERE fb_id=$id limit 1";    

    $DB = new DataBase();
    $DB->save($query);

}

public function addRequest($data){

    $name = $_POST['fb_name'];
    $email = $_POST['email'];
    $note = $_POST['note'];
    

    $query = "insert into request (Fb_name,Email,Note) values ('$name','$email','$note')";
    
    //echo $query;

    $DB = new DataBase();
    $DB->save($query);

}
}