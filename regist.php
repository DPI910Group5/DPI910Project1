<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="dpi.css">
</head>
<body>
    <div class="head">
        <h1> Sign Up For DPI Account</h1>
      </div>
      <div class="nav_bar">
        <a href="index.html" target="_blank">Home</a>
        <a href="login.php" target="_login">Login</a>
        <a href="about.html">About Us</a>
        <a href="contact.html">Contact Us</a>
      </div>


<form name='registration' action="" method="POST" style="border:1px solid #ccc">
    <div class="container">
   <b> <p>Kindly complete this form to create an account.</p> </b> 
      <hr>
  
      <label for="fname"><b>First Name</b></label>
      <input type="text" placeholder="Enter First Name" name="fname" required>

      <label for="lname"><b>Last Name</b></label>
      <input type="text" placeholder="Enter Last Name" name="lname" required>

      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>
  
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
  
      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
      
                   
      <div class="clearfix">
        <button type="button" class="cancelbtn">Cancel</button>
        <button type="submit" name="submit" class="signupbtn">Sign Up</button>
      </div>
    </div>
  </form>
<?php  
if(isset($_POST["submit"])){  
if(!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['email']) && !empty($_POST['psw'])) {  
    $fname=$_POST['fname'];  
    $lname=$_POST['lname']; 
    $email=$_POST['email']; 
    $pass=$_POST['psw'];  
    $con=mysql_connect('localhost','root','') or die(mysql_error());  
    mysql_select_db('dpi910') or die("cannot select DB");  
  
    $query=mysql_query("SELECT * FROM users WHERE fname='".$user."'");  
    $numrows=mysql_num_rows($query);  
    if($numrows==0)  
    {  
    $sql="INSERT INTO users(fname,lname,email,password) VALUES('$fname','$lname','$email','$pass')";  
  
    $result=mysql_query($sql);  
        if($result){  
    echo "Account Successfully Created";  
    } else {  
    echo "Failure!";  
    }  
  
    } else {  
    echo "That username already exists! Please try again with another.";  
    }  
  
} else {  
    echo "All fields are required!";  
}  
}  
?> 
</body>
</html>