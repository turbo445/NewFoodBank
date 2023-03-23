<?php

class DataBase
{

    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $db = "foodbank";

    function connect()
    {
        $connection = new mysqli($this->host, $this->username, $this->password, $this->db);
        return $connection;
    }

    function read($query)
    {
        $conn = $this->connect();
        $results = mysqli_query($conn,$query);  //return reults T/F

        if(!$results){
            return false;
        }
        else
        {
            $data =false;
            while($row = mysqli_fetch_assoc($results))
            {
                $data[] = $row;
            }
            return $data;
        }
    }

    function save($query)
    {
        $conn = $this->connect();
        $results = mysqli_query($conn,$query);  //return reults T/F

        if(!$results){
            return false;
        }else{
            return true;
        }
    }
}

/*    **test**

$DB= new DataBase();
$query = "select * from users";
$data = $DB->read($query);

echo "<pre>";
print_r($data);
echo " </pre>";
*/


/* 

to insert manually

$first_name="adam";
$last_name="koh";

$query = "insert into users(first_name,last_name) values ('$first_name','$last_name')";

mysqli_query($connection,$query);
echo $query;


echo mysqli_error($connection); //check for error
*/

/* print data
$query= "select * from users";
$results = mysqli_query($connection,$query);
print_r ($results);

*/


?>