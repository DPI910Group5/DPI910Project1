<?php include('server.php')?>
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
        <h3> <p id="weeks" class="outset"  style="color:rgb(102, 83, 204)"></p> 
            <script src="dayofweek.js"></script></h3>
             <h3> <p id="date" class="outset"  style="color:rgb(102, 83, 204)"></p> 
            <script src="datetime.js"></script></h3>
      </div>
      <div class="nav_bar">
        <a href="index.php" target="_blank">Home</a>
        <a href="login.php" target="_login">Login</a>
        <a href="about.html">About Us</a>
        <a href="contact.html">Contact Us</a>
      </div>


<form name='registration' action="regist.php" method="POST" style="border:1px solid #ccc">
<?php include ('errors.php');?>    
<div class="container">
      <table> <td>
        <p><img src="reg.jpg" alt="bk1" width="275" height="210" align="left"/></p></td></table>
   <b> <p>Kindly complete this form to create an account.</p> </b> 
      <hr>  
      <label for="fname"><b>First Name</b></label>
      <input type="text" placeholder="Enter First Name" name="fname" value="<?php echo $fname;?>" required>

      <label for="lname"><b>Last Name</b></label>
      <input type="text" placeholder="Enter Last Name" name="lname" value="<?php echo $lname;?>" required>

      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" value="<?php echo $email;?>" required>
  
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" value="<?php echo $psw;?>" required>
  
      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="pswRepeat" value="<?php echo $pswRepeat;?>" required>
      
                   
      <div class="tlf">
        <button id=" btn" type="button" class="cancelbtn">Cancel</button>
     
        <button type="submit" class="signupbtn">Sign Up</button>
      </div>
     </div>
     <script src="cancel.js"></script></h3>
  </form>
</body>
</html>
