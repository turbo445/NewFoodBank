<?php

class Login{

    private $errorMsg = "";

    public function check($data)
    {   
                 //for protection
        $email = addslashes($data['email']);
        $password = addslashes($data['password']);

        $query = "select * from users where Email = '$email' limit 1" ;
        
        //echo $query;

        $DB = new DataBase();
        $result = $DB->read($query);

        if($result)
                {   
                    $row = $result[0];    //getting the first result and put in row
                    // echo $_POST['email'];
                    // echo $row['Email'];
                    // echo $row['Password'];
                    // echo $row['id'];
                    if($_POST['email']==$row['Email'] && $_POST['password']==$row['Password']){
                       $_SESSION['userid'] = $row['id'];
            
                    } else
                    {   
                        $this->errorMsg .="Wrong email or password!";
                    }   

                }

        return $this->errorMsg;
    }

    //get all result for user
    public function readalluser(){
        $query = "select * from users" ;
        
        //echo $query;

        $DB = new DataBase();
        $result = $DB->read($query);

        return $result;
    }

    public function check_login($id)
    {
        if( is_numeric($id))
        {
            $query = "select * from users where id = '$id' limit 1" ;
            
            //echo $query;

            $DB = new DataBase();
            $result = $DB->read($query);

            if($result)     //if result correct get the whole row
            {   
                $user_data = $result[0];
                return $user_data;
            }else
            {
                header("Location: foodbankDashboard.php");
                die;
            }

                
        }else
        {
            header("Location: foodbankDashboard.php");
            die;
        }
    }

    public function checkRegister($data)
    {   
                 //for protection
        $email = addslashes($data['emailS']);
        $password = addslashes($data['passwordS']);

        $query = "select * from users where Email = '$email' limit 1" ;
        
        //echo $query;

        $DB = new DataBase();
        $result = $DB->read($query);

        if($result)
        {   
            $row = $result[0];    //getting the first result and put in row
            // echo $_POST['email'];
            // echo $row['Email'];
            // echo $row['Password'];
            // echo $row['id'];
            if($_POST['emailS']==$row['Email']){
                $this->errorMsg .="Email already exist!";
    
            }  

        }

        return $this->errorMsg;
    }


}

?>


            