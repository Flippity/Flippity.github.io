<?php
require_once '../config.php';
// Initialize the session
session_start();
$PLACEHOLD = "Sign In";
$url = "login/login.php";
$signout = $email = $verify = "";
$username = $_SESSION['username'];

$fakeid = mysqli_query($link, "SELECT id FROM users WHERE username ='$username'");
$id = mysqli_fetch_assoc($fakeid);
$resultid = $id['id'];

$fakeverify = mysqli_query($link, "SELECT verified FROM users WHERE id ='$resultid'");
$verify = mysqli_fetch_assoc($fakeverify);
$resultverify = $verify['verified'];

if(isset($_SESSION['username'])){
	$PLACEHOLD = $_SESSION['username'];
	$url = "";
	$signout = "Signout";
}

if($resultverify == 1){
	header("Location: /index.php");
	die();
}


if($_SERVER["REQUEST_METHOD"] == "POST"){
	$sql = "UPDATE users SET verified = 1 WHERE id = '$resultid'";
	if($stmt = mysqli_prepare($link, $sql)){
		$param_id = $id;
		mysqli_stmt_bind_param($stmt, "s", $param_id);
		if(mysqli_stmt_execute($stmt)){
                header("location: /index.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }else{
			echo "failed to prepare";
		}
		// Close statement
        mysqli_stmt_close($stmt);
	// Close connection
    mysqli_close($link);
}
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
		
		<form action="verified.php" method="post">
			<input type="hidden" name="act" value="run">
			<input type="submit" value="Verify">
		</form>
		
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