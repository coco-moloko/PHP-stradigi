<head>
    
<link rel="stylesheet" href="{{ URL::asset('css/header.css') }}">
  <!--FOUC hamburger menu-->
  	<style type="text/css">
  		.menu {display:none;}
  		.cross{display:none;}
  	</style>
  	
</head>

<header>
	
	<div class="topMenu">
		<a href="/"><img class="desktopLogo" src="{{ URL::asset('img/logo-desktop.png') }}"></img></a>
		
		<div class="linkNav">
			<a href="#">LOGOUT</a>
			<a href="/gallery">GALLERY</a>
			<a href="/panels">LIST ITEM</a>
			<div class="profilePic"><img src="{{ URL::asset('img/user-profilepic.jpg') }}"></img></div>
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
	
	<script type="text/javascript" src="{{ URL::asset('js/header.js') }}"></script>
	
</header>

    @yield("content")