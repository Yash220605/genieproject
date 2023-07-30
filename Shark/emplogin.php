<html>
    <head>
        <title>Employees Record</title>
        <style>
            body{
                background: #24F9F4;
            }
            table{
                background-color: #EEF8FD;
            }
        </style>
    </head>
<?php
include ("db_connect.php");
error_reporting(0);


$query = "SELECT * FROM regemp WHERE ea = '$ea' AND pw = '$pw' ";
$data = mysqli_query($con,$query);

$total = mysqli_num_rows($data);



if($total!=0)
{
    ?>

    <h2 align= "center">Dislaying All Employees</h2>
    <table border="1" cellspacing="5" width="100%">
        <tr>
            <th width="5%">Emp_ID</th>
            <th width="8%">First Name</th>
            <th width="8%">Last Name</th>
            <th width="10%">Gender</th>
            <th width="24%">Email Address</th>
            <th width="14%">Phone Number</th>
            <th width="19%">Address</th>
        </tr>            
    <?php 
    
    while($result = mysqli_fetch_assoc($data))
    {
        echo "
            <tr>
                <td>".$result["id"]."</td>
                <td>".$result["fn"]."</td>
                <td>".$result["ln"]."</td>
                <td>".$result["gen"]."</td>
                <td>".$result["ea"]."</td>
                <td>".$result["pn"]."</td>
                <td>".$result["ad"]."</td>
            </tr>
        ";
    }
}
else
{
    echo"Table not have records";
}
?>
</table>
</html>
