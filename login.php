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
        <a href="index.html">Home</a>
        <a href="about.html">About Us</a>
        <a href="contact.html">Contact Us</a>
      </div>
      <form action="" method="POST" style="border:1px solid #ccc">
        <div class="container">
       <b> <p>Sign in to Access your Account.</p> </b> 
          <hr>
      
          <label for="fname"><b>First Name</b></label>
          <input type="text" placeholder="Enter First Name" name="fname" required>
    
          <label for="lname"><b>Last Name</b></label>
          <input type="text" placeholder="Enter Last Name" name="lname" required>
               
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" required>
                                   
          <div class="clearfix">
            <button type="submit" class="signupbtn">Sign In</button>
          </div>
        </div>
      </form>
<?php  
if(isset($_POST["submit"])){  
  
if(!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['psw'])) {  
    $user=$_POST['fname'];  
    $pass=$_POST['lname'];
    $psw=$_POST['psw'];  
  
    $con=mysql_connect('localhost','root','') or die(mysql_error());  
    mysql_select_db('dpi910') or die("cannot select DB");  
  
    $query=mysql_query("SELECT * FROM users WHERE fname='".$user."' AND password='".$psw."'");  
    $numrows=mysql_num_rows($query);  
    if($numrows!=0)  
    {  
    while($row=mysql_fetch_assoc($query))  
    {  
    $dbusername=$row['fname'];  
    $dbpassword=$row['password'];  
    }  
  
    if($user == $dbusername && $pass == $dbpassword)  
    {  
    session_start();  
    $_SESSION['sess_user']=$user;  
  
    /* Redirect browser */  
    header("Location: member.php");  
    }  
    } else {  
    echo "Invalid username or password!";  
    }  
  
} else {  
    echo "All fields are required!";  
}  
}  
?>
</body>
</html>