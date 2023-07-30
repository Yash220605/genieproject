<?php
    session_start();
    include("db_connect.php");

    if(isset($_POST['login']))
    {
        if (!empty(trim($_POST['ea'])) && !empty(trim($_POST['pw']))) {
            $ea = mysqli_real_escape_string($con,$_POST['ea']);
            $pw = mysqli_real_escape_string($con,$_POST['pw']);

            $login_query = "SELECT * FROM regemp WHERE ea='$ea' AND pw='$pw'";
             $login_query_run = mysqli_query($con,$login_query);

        }
        else
        {
            $_SESSION['status'] - "All Fields are mandatory";
            header("Location: loginpage.php");
        }
    }
?>
