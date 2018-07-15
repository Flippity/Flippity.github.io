<?php
require_once '../config.php';
session_start();
$resultid = $username = "";
if(isset($_SESSION['username'])){
	$username = $_SESSION['username'];
	$fakeid = mysqli_query($link, "SELECT email FROM users WHERE username ='$username'");
	$id = mysqli_fetch_assoc($fakeid);
	$resultid = $id['email'];
}

$to = $resultid;
$subject = "Verification for ioVid";
$txt = "Hello! Please verify your account by following this link:\nhttps://iovid.000webhostapp.com/verified/verified.php\nIf this was not you, please ignore this email.\nClick the 'Verify' button once in the page.";
$txt = wordwrap($txt,70);
$headers = "From: noreply@iovid.com" . "\r\n" .
"CC: noreply@iovid.com";

mail($to,$subject,$txt,$headers);
?>

<!DOCTYPE html>
<html class="index" id="index">
    <head>
        <title>ioVid</title> 
		<link rel="icon" href="../images/favicon.png" type="image/ico">
		<link rel="stylesheet" href="../index.css" type="text/css">
    </head>
		
    <body>
		
		<h1 id="heading" class="heading" align=center> <?php echo $_SESSION['username'];?></h1>
		<h1 class="sub-heading" align=center>Please Verify Your Account</h1>
		<p class="sub-sub-heading" align=center>We have sent you an email.</p>
		<h1 id="sub-heading" class="sub-heading" align=center></h1>
		<hr>
		
	    <script src="../splash/js/splash.js"></script>
		
		<div class="copyright" id="copyright">
			<?php include '../copyright/php/copyright.php';?>
		</div>
		
    </body>
    <style>
body, html {   
    width: 100%;
    height: 50%;
    margin: 0;
    padding: 0;
    display:table;
	text-align: center;
	font-family: "Comic Sans MS";
}
body {
    display:table-cell;
    vertical-align:middle;
}
form {
    display:table;/* shrinks to fit content */
    margin:auto;
	background-color: transparent;
}
.parent{
	background-color: transparent;
}
</style>
</html>
