<?php

class User{

    public function getAllUser(){

        $query = "select * from users "; 
    
                $DB = new DataBase();
                $result = $DB->read($query);
    
                if($result){
                    return $result;
                }else{
                    return false;
                }
    }

    public function getUserCount(){

        $query = "select count(*) as total from users "; 
    
                $DB = new DataBase();
                $result = $DB->read($query);
    
                if($result){
                    return $result[0]['total'];
                }else{
                    return false;
                }
    }

    public function getReceiverCount(){
            
            $query = "select count(*) as total from users where Role = 'receiver' "; 
        
                    $DB = new DataBase();
                    $result = $DB->read($query);
        
                    if($result){
                        return $result[0]['total'];
                    }else{
                        return false;
                    }
    }

    public function getDonatorCount(){
            
            $query = "select count(*) as total from users where Role = 'donator' "; 
        
                    $DB = new DataBase();
                    $result = $DB->read($query);
        
                    if($result){
                        return $result[0]['total'];
                    }else{
                        return false;
                    }
    }

    public function getAdminCount(){
            
            $query = "select count(*) as total from users where Role = 'admin' "; 
        
                    $DB = new DataBase();
                    $result = $DB->read($query);
        
                    if($result){
                        return $result[0]['total'];
                    }else{
                        return false;
                    }
    }

    public function getdetailUser($id){

        $query = "select * from users where id= '$id' limit 1"; 
    
                $DB = new DataBase();
                return $DB->read($query);

    }

    public function editUser($data){

        $email = $_POST['email'];
        $password = $_POST['password'];
        $id = $_POST['id'];

        $radioval = $_POST['role'];

            if($radioval == "receiver"){
            $radioval = "receiver";
            }elseif($radioval == "admin"){
                $radioval = "admin";
            }else{
            $radioval = "donator";
            }

        $query = "update users set Email = '$email', Password = '$password', Role = '$radioval' WHERE id=$id limit 1"; 

        $DB = new DataBase();
        $DB->save($query);

}

    public function addUser($data){

        $email = $_POST['email'];
        $password = $_POST['password'];
        $role = $_POST['Role'];

        $radioval = $_POST['role'];

        if($radioval == "receiver"){
            $radioval = "receiver";
        }else if ($radioval == "admin"){
            $radioval = "admin";
        }else{
            $radioval = "donator";
        }
    
        $query = "insert into users (Email,Password,Role) values ('$email','$password','$radioval')";
        
        //echo $query;
    
        $DB = new DataBase();
        $DB->save($query);
    
    
    }
}




?>