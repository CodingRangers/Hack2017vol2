<?php
	session_start();
	include("utilities.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Word of magic</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Fantasy World Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- gallery -->
<link rel="stylesheet" href="css/lightGallery.css" type="text/css" media="all" />
<!-- //gallery -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 

<!-- //font-awesome icons -->
<link href="//fonts.googleapis.com/css?family=Questrial" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Jura:300,400,500,600" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="style.css">
<script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="css/Profile.css">
<link rel="stylesheet" type="text/css" href="Standings.css">
<link rel="stylesheet" type="text/css" href="questions.css">
<link rel="stylesheet" type="text/css" href="css/pre-arena.css">
<link rel="stylesheet" type="text/css" href="arena2.css">
<?php include_once('conn.php'); ?>
<style type="text/css">
	#logout{
		border: none;
	    background-color: inherit;
	    font-size: 1.5em;
	    color: #FFF;
	    font-family: "Jura",sans-serif;
	}
	#logout:hover{
		 background-color: #FFF;
		 border-radius: 4px;
		 color: #000;
	  	 transition: 0.8s ease;

	}
	#username_header{
		font-weight: bold;
		color: #CDA869;
	}
	#form_in_login{
		width: 40%;
		margin-left: 30%;
		margin-top: 50px;
	}
	#answer{
		border: none;
	    background-color: inherit;
	    font-size: 1.5em;
	    color: #000;
	    font-family: "Jura",sans-serif;
	}
	#answer:hover{
		 background-color: #000;
		 border-radius: 4px;
		 color: #FFF;
	  	 transition: 0.8s ease;

	}
</style>
</head>
	
<body>
<!-- header -->

	<div class="header">
		<img src="symbol/symbol1_white.png" alt="Coding Ranger"><h3>CODING RANGERS</h3>
		<?php
		if(isset($_SESSION['username']))
		{
			?>
				<div style="position: absolute; right: 15%; top: 1.5%; margin-right: 50px; z-index: 10000; color: #FFF;">
					<h3>Hello, <span id=username_header><?php echo $_SESSION['username']?></span></h3>
				</div>
			<?php
			?>
				<div style="position: absolute; right: 5%; top: 1.5%; margin-right: 25px; z-index: 100;">
					<form method="post" style="z-index: 200;">
						<input type="submit" name="logout" value="LOG OUT" id=logout>
					</form>
				</div>
			<?php
			if(isset($_POST['logout']))
			{
				unset($_SESSION['username']);
				session_destroy();
				header("location:home.php");
			}
		}
		?>
	</div>
	<div class="w3_navigation">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div class="w3_navigation_pos">
						<h1><a href="index.html"><img src="img/header_logo.jpg" alt="World of Magic" height="70"></a></h1>
					</div>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="cl-effect-5" id="cl-effect-5">
						<ul class="nav navbar-nav">
							<li class="active"><a href="index.html"><span data-hover="Home">Home</span></a></li>

							<li><a href="Login.php"><span data-hover="Login">Login</span></a></li>
							<?php
							if(!isset($_SESSION['username']))
							{
							?>
							<li><a href="Register.php" style="z-index: 999;"><span data-hover="Register">Register</span></a></li>
							<?php
							}
							?>
							<li><a href="Standings_wins.php"><span data-hover="Standings">Standings</span></a></li>
							<?php 
							if(isset($_SESSION['username'])){
								echo '
									<li><a href="pre-arena.php" ><span data-hover="Arena.php">Arena</span></a></li>
							<li><a href="Profile.php"><span data-hover="Profile">Profile</span></a></li>
								';

							}

							 ?>
						</ul>
					</nav>
				</div>
			</nav>	
		</div>
	</div>
<!-- //header -->