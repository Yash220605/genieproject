<?php include("db_connect.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/style.css">
    <title>Tech Army's | Registration</title>
</head>
<body>
    <div class="container">
        <form action="#" method="POST">
        <div class="title">
            Registration Form
        </div>
        <div class="form">
        <div class="input_field">
            <label>First Name</label>
            <input type="text" class="input" name="fn" required>
        </div>
        <div class="input_field">
            <label>Last Name</label>
            <input type="text" class="input" name="ln" required>
        </div>
        <div class="input_field">
            <label>Password</label>
            <input type="password" class="input" name="pw" required>
        </div>
        <div class="input_field">
            <label>Confirm Password</label>
            <input type="password" class="input" name="cpw" required>
        </div>
        <div class="input_field">
            <label>Gender</label>
            <div class="selectbox">
            <select name = "gen" required>
            <option value="">Select</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            </div>
        </div>
        <div class="input_field">
            <label>Email Address</label>
            <input type="text" class="input" name="ea">
        </div>
        <div class="input_field">
            <label>Phone Number</label>
            <input type="text" class="input" name="pn" required>
        </div>
        <div class="input_field">
            <label>Address</label>
            <textarea class="textarea" name="add" required></textarea>
        </div>
        <div class="input_field terms">
            <label class="check">
                <input type="checkbox" required>
                <span class="checkmark"></span>
            </label>
            <p>Agree to all terms and condition</p>
        </div>
        <div class="input_field">
            <input type="submit" value="Register" class="egister" name="submit"> 
        </div>
        </div>
</form>
    </div>
</body>



<?php
    if($_POST['submit'])
    {
        $fn = $_POST['fn'];
        $ln = $_POST['ln'];
        $pw = $_POST['pw'];
        $cpw = $_POST['cpw'];
        $gen = $_POST['gen'];
        $ea = $_POST['ea'];
        $pn = $_POST['pn'];
        $add = $_POST['add'];


        if($fn != "" && $ln != "" && $pw != "" && $cpw != "" && $gen != "" && $ea != "" && $add != "" )
            {

        $mid = "INSERT INTO regemp(fn,ln,pw,cpw,gen,ea,pn,ad) values('$fn','$ln','$pw','$cpw','$gen','$ea','$pn','$add')";
        $data = mysqli_query($con,$mid);

        if($data)
        {
            echo "<script>alert('Data Inserted')</script>";
        }
        else
        {
             echo "<script>alert('Data Not Inserted')</script>";
        }
    }
        else
        {
            echo "<script>alert('fields are empty');</scirpt>";
        }
    }

?>