<?php

session_start();

if(isset($_SESSION['userid']))
{   
    $_SESSION['userid'] = null;
    unset($_SESSION['userid']);
}

header("Location: indexN2.php");
die;

?>