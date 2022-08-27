<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Restaurant</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Flamenco&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
	

</head>
<body>	
	<header>
		<nav>
			<div class="row clearfix">
				<img src="images/del.jpg" class="logo">

				<ul class="main-nav animate slideInDown" id="check-class">
					<li><a href="#">MENU</a></li>
					<li><a href="#">HOME TO ORDER</a></li>
					<li><a href="#">CHECK MORE</a></li>
					<li><a href="logout.php">Log Out</a></li>
				</ul>
				<a href="#" class="mobile-icon" onclick="slideshow()"><i class="fa fa-bars"></i></a>		
			</div>
		</nav>
		<div class="main-content-header">
		<h1>WELCOME TO  <span class="colorchange">DELICIOUS RESTAURANT</span>.<br>
		HOUSE OF LOVER OO YES. </h1>
		<a href="#" class="btn btn-full">click to order</a>
		<a href="#" class="btn btn-nav" > show me more</a>
	</div>
	</header>

<script type="text/javascript">
	
	function slideshow(){
		var x =document.getElementById('check-class');
		if(x.style.display === "none")
		{
			x.style.display="block";
		}else{
			x.style.display="none";
		}

	}
</script>

</body>
</html>