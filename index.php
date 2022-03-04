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
    <a class="btn" href="logout.php">Logout</a>
</div>
<ul>
  <li><a>Welcome <?php echo $fname;?>!</a></li>
</ul>
</body>
</html>