<?php
error_reporting(0);
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "empdetails";

    $con = mysqli_connect($servername,$username,$password,$dbname);

    if($con)
    {
        //echo "connection ok";
    }
    else
    {
        echo "Conection failed";
    }
?>