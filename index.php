<?php
// Initialize the session
require_once 'config.php';

session_start();
$PLACEHOLD = "Sign In";
$url = "login/login.php";
$signout = $email = "";
if(isset($_SESSION['username'])){
	$username = $_SESSION['username'];
	$fakeid = mysqli_query($link, "SELECT id FROM users WHERE username ='$username'");
	$id = mysqli_fetch_assoc($fakeid);
	$resultid = $id['id'];
	$fakeverify = mysqli_query($link, "SELECT verified FROM users WHERE id ='$resultid'");
	$verify = mysqli_fetch_assoc($fakeverify);
	$resultverify = $verify['verified'];
}
if(isset($_SESSION['username'])){
	$PLACEHOLD = $username;
	$HTML = "<p id='signin' class='signin' align=right><?php echo '$PLACEHOLD'?></p>";
	$url = "";
	$signout = "Signout";
	if($resultverify == 0){
		header("Location: verified/verify.php");
		die();
	}
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
		<div id="row" class="row">
			<a href= "login/logout.php"> <p id='signout' class='signout' align=right><?php echo $signout;?></p> </a>
			<a href= "<?php echo $url;?>"> <p id='signin' class='signin' align=left><?php echo $PLACEHOLD;?></p> </a>
		</div>
		<div style="clear: both;"></div>

		<h1 id="heading" class="heading" align=center>ioVid</h1>
		<h1 id="sub-heading" class="sub-heading" align=center></h1>
		<hr>
		
	    <script src="splash/js/splash.js"></script>
		
		<div class="copyright" id="copyright">
			<?php include 'copyright/php/copyright.php';?>
		</div>
		
    </body>
    
</html>
