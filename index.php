<?php 
  session_start(); 

  if (!isset($_SESSION['fname'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['fname']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DPI910 Project</title>
    <link rel="stylesheet" href="dpi.css">
</head>
<body>
    <div class="head">
        <h1>Welcome To DPI910 Web Form</h1>
      </div>
      <div class="nav_bar">
        <a href="index.php">Home</a>
        <a href="login.php">Login</a>
        <a href="regist.php">Sign Up</a>
        <a href="about.html">About Us</a>
        <a href="contact.html">Contact Us</a>
      </div>
    <div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['fname'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['fname']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>
</body>
</html>