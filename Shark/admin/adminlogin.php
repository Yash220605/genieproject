<?php 
    include("admin_connect.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./style.css">
    <title>Tech Army's</title>
</head>
<body>
    
 <div class="wrapper">
    


<!----------------------------- Form box ----------------------------------->    

    
    <div class="form-box">
        
        <!------------------- login form -------------------------->
        
        <div class="login-container" id="login">
        <form method="POST">
        <div class="top">
            <span>Don't have an account? <a href="register.php" onclick="register()">Sign Up</a></span>
                <header>Admin Login</header>
            </div>
            <form method="POST" autocomplete="off">
            <div class="input-box">
                <input type="text" name="admin_email" class="input-field" placeholder=" Email">
                <i class="bx bx-user"></i>
            </div>
            <div class="input-box">
                <input type="password" name="admin_password" class="input-field" placeholder="Password">
                <i class="bx bx-lock-alt"></i>
            </div>
            <div class="input-box">
                <input type="submit" class="submit" name="signin" value="Sign In">
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
if(isset($_POST['signin']))
{
    echo "clicked";
}
?>
</body>
</html>