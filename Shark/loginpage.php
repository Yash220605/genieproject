<?php include("db_connect.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/style.css">
    <title>Tech Army's</title>
</head>
<body>
    
 <div class="wrapper">
    <nav class="nav">
        <div class="nav-logo">
            <p><a href="loginpage.php"><img src = "images/logo.png" width="233.6" height="100" ></a></p>
        </div>
        <div class="nav-menu" id="navMenu">
            <ul>
                <li><a href="#" class="link active">Home</a></li>
                <li><a href="#" class="link">Services</a></li>
                <li><a href="#" class="link">About</a></li>
            </ul>
        </div>
        <div class="nav-button">
            <button class="btn white-btn" id="loginBtn" onclick="login()">Sign In</button>
        </div>
        <div class="nav-menu-btn">
            <i class="bx bx-menu" onclick="myMenuFunction()"></i>
        </div>
    </nav>


<!----------------------------- Form box ----------------------------------->    

    
    <div class="form-box">
        
        <!------------------- login form -------------------------->

        <div class="login-container" id="login">
            <div class="top">
            <span>Don't have an account? <a href="register.php" onclick="register()">Sign Up</a></span>
                <header>Login</header>
            </div>
            <form method="POST" autocomplete="off">
            <div class="input-box">
                <input type="text" name="ea" class="input-field" placeholder=" Email">
                <i class="bx bx-user"></i>
            </div>
            <div class="input-box">
                <input type="password" name="pw" class="input-field" placeholder="Password">
                <i class="bx bx-lock-alt"></i>
            </div>
            <div class="input-box">
                <input type="submit" class="submit" name="login" value="Sign In">
            </div>
            <div class="two-col">
                <div class="one">
                    <input type="checkbox" id="login-check">
                    <label for="login-check"> Remember Me</label>
                </div>
                <div class="two">
                    <label><a href="forgotpassword.php">Forgot password?</a></label>
                </div>
            </div>
        </div>
    </div>
    </form>
</div>

<script>
   
   function myMenuFunction() {
    var i = document.getElementById("navMenu");

    if(i.className === "nav-menu") {
        i.className += " responsive";
    } else {
        i.className = "nav-menu";
    }
   }
 
</script>

<script>

    var a = document.getElementById("loginBtn");
    var b = document.getElementById("registerBtn");
    var x = document.getElementById("login");
    var y = document.getElementById("register");

    function login() {
        x.style.left = "4px";
        y.style.right = "-520px";
        a.className += " white-btn";
        b.className = "btn";
        x.style.opacity = 1;
        y.style.opacity = 0;
    }

</script>
<?php
    

    if(isset($_POST['login']))
    {

        $query = "SELECT * FROM 'regemp' WHERE ea = '$_POST[ea]' AND pw = '$_POST[pw]'";
        $result=mysqli_query($con,$query);

        if(mysqli_num_rows($result)==1)
        {
            session_start();
            $_SESSION['emploginid']=$_POST['ea'];
            header("location: emplogin.php");
        }
        else
        {
             echo "<script>alert('Incorrect Password OR Data is not present')</script>";
        }
    }
?>

</body>
</html>

