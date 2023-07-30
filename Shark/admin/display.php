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
            .update
            {
                background-color: rgba(110, 249, 237, 0.7);
                border: 0;
                outline: none;
                border-radius: 5px;
                height: 22px;
                width: 80px;
                font-weight: bold;
                padding: 5px;
                cursor: pointer;
                color: green;
            }
            .delete
            {
                background-color: rgba(110, 249, 237, 0.7);
                border: 0;
                outline: none;
                border-radius: 5px;
                height: 22px;
                width: 80px;
                font-weight: bold;
                padding: 5px;
                cursor: pointer;
                color: red;
            }
        </style>
    </head>


<?php
include ("db_connect.php");
error_reporting(0);

$query = "SELECT * FROM regemp";
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
            <th width="12%">Operations</th>
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


                <td><a href='empedit.php?id=$result[id]'><input type = 'submit' value = 'Update' class='update'></a>
                    <a href='delete.php?id=$result[id]'><input type = 'submit' value = 'Delete' class='delete' onclick = 'return checkdelete()'></a></td>
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

<script>
    function checkdelete()
    {
        return confirm('Are you Sure want to delete record ?');
    }
</script>