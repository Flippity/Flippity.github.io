<?php
// Initialize the session
session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}
?>

<!DOCTYPE html>
<html class="index" id="index">

    <head>
        <title>ioVid</title> 
		<link rel="icon" href="images/favicon.png" type="image/ico">
		<link rel="stylesheet" href="index.css" type="text/css">
		
    </head>
		
    <body>
		
		<div class="page-header">
			<h1>Hi, <b><?php echo htmlspecialchars($_SESSION['username']); ?></b>. Welcome to our site.</h1>
		</div>
    <p><a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a></p>
		
		<?php //include 'login/login.php';?>
		
		<h1 id="heading" class="heading" align=center>ioVid</h1>
		<h1 id="sub-heading" class="sub-heading" align=center></h1>
		<hr>
		
	    <script src="splash/js/splash.js"></script>
		
		<div class="copyright" id="copyright">
			<?php include 'copyright/php/copyright.php';?>
		</div>
		
    </body>
    
</html>
