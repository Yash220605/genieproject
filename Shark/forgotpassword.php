<!DOCTYPE html>
<html>

<head>
  <title>Tech Army's | Forgot Password</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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

       <div class="form-box">
        <div class="login-container" id="login">
            <div class="top">
                <header>Forget Password</header>
            </div>
            <div class="input-box">
                <input type="text" class="input-field" placeholder="Username or Email">
                <i class="bx bx-user"></i>
                <div class="input-box">
                  <input type="submit" class="submit" value="Reset Password">
  </div>
        </div>
        </div>
        </div>
        
</body>

</html>
