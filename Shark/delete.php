<?php
include("db_connect.php");

$id = $_GET['id'];

$query = "DELETE FROM regemp WHERE id = '$id' ";
$data = mysqli_query($con,$query);

if($data)
        {
            echo "<script>alert('Record Deleted')</script>";
            ?>
            <meta http-equiv = "refresh" content = "0; url = http://localhost/shark/display.php" />

            <?php
        }
        else
        {
            echo "not deleted";
        }
        
?>