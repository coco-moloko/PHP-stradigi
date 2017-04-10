<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <title>Kraken</title>
  <link rel="stylesheet" href="public/css/template.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  
  <!--FOUC hamburger menu-->
  	<style type="text/css">
  		.menu {display:none;}
  	</style>
  	
</head>

<body>
	
	<div class="topMenu">
		<a href="/"><img class="desktopLogo" src="public/img/logo-desktop.png"></img></a>
		
		<div class="linkNav">
			<a href="#">LOGOUT</a>
			<a href="/gallery">GALLERY</a>
			<a href="/panels">LIST ITEM</a>
			<div class="profilePic"><img src="public/img/user-profilepic.jpg"></img></div>
		</div>
		
		<!--hamburger menu for tablet and smartphone-->
		<div class="hamburgerMenu" display="none">
			<button class="hamburger">&#9776;</button>
  			<button class="cross">&#735;</button>
  		</div>
  		
  		<div class="menu">
		  <ul>
		    <a href="#"><li>LOGOUT</li></a>
		    <a href="/gallery"><li>GALLERY</li></a>
		    <a href="/panels"><li>LIST ITEMS</li></a>
		  </ul>
		</div>
		
		@yield("content")
	
	<script type="text/javascript" src="public/js/template.js"></script>
</body>
</html>