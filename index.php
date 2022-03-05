<?php
// Starting the session, to use and
// store data in session variable
session_start();

if (!isset($_SESSION['fname'])) {
    $_SESSION['msg'] = "You have to log in first";
    header('location: login.php');
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['fname']);
    header("location: login.php");
}
?>
<?php
$fname = $_SESSION['fname'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DPI910 Project</title>
    <link rel="stylesheet" href="dpi.css">
      <p><img src="logo.png" alt="bk1" width="275" height="210" align="left"/></p>
</head>
<body>
    <div class="head">
        <h1>Welcome To DPI910 Web Form</h1>
        <h3> <p id="weeks" class="outset"  style="color:rgb(102, 83, 204)"></p> 
            <script src="dayofweek.js"></script></h3>
             <h3> <p id="date" class="outset"  style="color:rgb(102, 83, 204)"></p> 
            <script src="datetime.js"></script></h3>
      </div>
      <div class="nav_bar">
        <a href="index.php">Home</a>
        <a href="login.php">Login</a>
        <a href="regist.php">Sign Up</a>
        <a href="about.html">About Us</a>
        <a href="contact.html">Contact Us</a>
      </div>
      <ul>
  <li><a>Welcome <?php echo $fname;?>!</a></li>
</ul>
    <a class="btn" href="logout.php">Logout</a>
</div>
</body>
</html>
