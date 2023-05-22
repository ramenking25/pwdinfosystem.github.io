<?php


    if(!isset($_SESSION['username']))
    {
        $_SESSION['checklogin'] = "";
        header("Location: login.php");
    }


?>