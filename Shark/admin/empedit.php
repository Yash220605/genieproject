<?php include("db_connect.php");

$id = $_GET['id'];

$query = "SELECT * FROM regemp where id = '$id' ";
$data = mysqli_query($con,$query);

$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/style.css">
    <title>Tech Army's | Update Emp</title>
</head>
<body>
    <div class="container">
        <form action="#" method="POST">
        <div class="title">
            Update Employee Details
        </div>
        <div class="form">
        <div class="input_field">
            <label>First Name</label>
            <input type="text" value = "<?php echo $result['fn'] ?>" class="input" name="fn" required>
        </div>
        <div class="input_field">
            <label>Last Name</label>
            <input type="text" value = "<?php echo $result['ln'] ?>" class="input" name="ln" required>
        </div>
        <div class="input_field">
            <label>Password</label>
            <input type="password" value = "<?php echo $result['pw'] ?>" class="input" name="pw" required>
        </div>
        <div class="input_field">
            <label>Confirm Password</label>
            <input type="password" value = "<?php echo $result['cpw'] ?>" class="input" name="cpw" required>
        </div>
        <div class="input_field">
            <label>Gender</label>
            <div class="selectbox">
            <select name = "gen" required>
            <option value="">Select</option>
                <option value="Male"
                <?php
                    if ($result['gen'] == 'Male') {
                        echo "selected";
                    }
                ?>
                >
            Male</option>
                <option value="Female" <?php
                    if ($result['gen'] == 'Female') {
                        echo "selected";
                    }
                ?>
                >
            Female</option>
            </select>
            </div>
        </div>
        <div class="input_field">
            <label>Email Address</label>
            <input type="text" value = "<?php echo $result['ea'] ?>" class="input" name="ea">
        </div>
        <div class="input_field">
            <label>Phone Number</label>
            <input type="text" value = "<?php echo $result['pn'] ?>" class="input" name="pn" required>
        </div>
        <div class="input_field">
            <label>Address</label>
            <textarea class="textarea" name="add" required><?php echo $result['ad'] ?></textarea>
        </div>
        <div class="input_field terms">
            <label class="check">
                <input type="checkbox" required>
                <span class="checkmark"></span>
            </label>
            <p>Agree to all terms and condition</p>
        </div>
        <div class="input_field">
            <input type="submit" value="Update Details" class="egister" name="update"> 
        </div>
        </div>
</form>
    </div>
</body>



<?php
    if($_POST['update'])
    {
        $fn = $_POST['fn'];
        $ln = $_POST['ln'];
        $pw = $_POST['pw'];
        $cpw = $_POST['cpw'];
        $gen = $_POST['gen'];
        $ea = $_POST['ea'];
        $pn = $_POST['pn'];
        $add = $_POST['add'];

        $mid = "UPDATE regemp set fn='$fn',ln='$ln',pw='$pw',cpw='$cpw',gen='$gen',ea='$ea',pn='$pn',ad='$add' where id = '$id'";
        $data = mysqli_query($con,$mid);

        if($data)
        {
            echo "<script>alert('Record Updated')</script>";
            ?>
            <meta http-equiv = "refresh" content = "0; url = http://localhost/shark/display.php" />

            <?php
        }
        else
        {
            echo "not inserted";
        }
    }

?>