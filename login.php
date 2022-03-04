<?php include ('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="stylesheet" href="dpi.css">
</head>
<body>
    <div class="head">
        <h1>Welcome to DPI910 Sign In</h1>
      </div>
      <div class="nav_bar">
        <a href="index.php">Home</a>
        <a href="about.html">About Us</a>
        <a href="contact.html">Contact Us</a>
      </div>
      <form action="login.php" method="POST" style="border:1px solid #ccc">
        <div class="container">
       <b> <p>Sign in to Access your Account.</p> </b> 
          <hr>
      
          <label for="fname"><b>First Name</b></label>
          <input type="text" placeholder="Enter First Name" name="fname" required>
    
          <label for="lname"><b>Last Name</b></label>
          <input type="text" placeholder="Enter Last Name" name="lname" required>
               
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" required>
                                   
          <div class="tlf">
            <button type="submit" name="login" class="signupbtn">Sign In</button>
          </div>
        </div>
      </form>
</body>
</html>
