<!DOCTYPE html>
<html>
    <head>
        <title>iovid </title> 
    </head>
		
    <body>
		
		<div class="tab">
			<?php include 'tab.php';?>
		</div>

		<h1 id= "heading" class="heading" align=center>ioVid</h1>
		<h1 id= "sub-heading" class="sub-heading" align=center></h1>
		<hr>
		
	    <script>
			var splash = new Array('splash.txt', 'index.html', 'Flippity.github.io', 'iovid', ':0', 'Back to the lab again', 'yo yo yo, everybody', 'Insert Racist Text Here');
			document.getElementById("sub-heading").innerHTML = splash[Math.floor(Math.random() * (splash.length))];
		</script>
		
    </body>
    
    <style>
		.heading{
			font-size: 50pt;
			color:white;
			font-family: "Comic Sans MS";
		}
		html{
			height: 100%;
			background: linear-gradient(to top right, black, blue);
		}
		.sub-heading{
			font-size: 25pt;
			color:white;
			font-family: "Comic Sans MS";
		}
    </style>
    
</html>