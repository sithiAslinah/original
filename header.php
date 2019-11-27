<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
	<style type="text/css">
		header
		{
			position:relative;
			background:black;
			width:100%;
			height:60px;
			box-sizing:border-box;
		}
		header .logo
		{
			color:#fff;
			height:50px;
			line-height:50px;
			font-size:24px;
			float:left;
			font-weight:bold;
			padding:5px;
			padding-left:10px;

		}
		.logo img
		{
			width:50px;
			height:50px;
		}
		header nav
		{
			float:right;
		}
		header nav ul
		{
			margin:0;
			padding:0;
			display:flex;
		}
		header nav ul li
		{
			list-style:none;
			position:relative;
		}
		header nav ul li.sub-menu:before
		{
			font-family: "Font Awesome 5 Free";
		    font-weight: 900; 
		    content: "\f0d7";
			position:absolute;
			line-height:60px;
			color:#fff;
			right:5px;
           
		}
		header nav ul li.active.sub-menu:before
		{
           font-family: "Font Awesome 5 Free";
		    font-weight: 900; 
		    content: "\f0d8";
		    color:black;
		}
		.submenu a
		{
			font-size:10px !important;
			color:black !important;
		}
		header nav ul li ul
		{
			position:absolute;
			left:0;
			background:white;
			border-bottom:2px solid black;
			display:none;
			z-index:2;
		}
		header nav ul li.active ul
		{
           display:block;
		}
		header nav ul li ul li
		{
            display:block;
            border-bottom:1px solid lightgray;
            width:300px;
            z-index:2;
		}
		header nav ul li ul li a
		{
			color:black !important;
		}
		header nav ul li ul li a:hover
		{
          background:lightgray !important;
		}
		header nav ul li a
		{
			height:60px;
			font-size:15px;
			line-height:60px;
			padding:0 20px;
			color:#fff;
			text-decoration:none !important;
			display:block;
		}
		header nav ul li a:hover,
		header nav ul li a.active
		{
          color:black;
          border-bottom:5px solid darkblue;
          background:white;
		}
		.menu-toggle
		{
			color:#fff;
			float:right;
			line-height:60px;
			font-size:24px;
			cursor:pointer;
			display:none;
		}
		@media (max-width:991px)
		{
			header
			{
				padding:0 20px;
			}
			.menu-toggle
			{
				display:block;
			}
			header nav
			{
				
				position:absolute;
				width:100%;
				height:calc(100vh-50px);
				background:#333;
				top:50px;
				left:-100%;
				transition:0.5s;
				z-index:2;
			}
			header nav.active
			{
               left:0;
			}
			header nav ul
			{
				display:block;
				text-align:center;
				position:relative;
				z-index:2;
			}
			header nav ul li a
			{
				border-bottom:1px solid rgba(0,0,0,.2);
			}
			header nav ul li.active ul
			{
				position:relative;
				background:#003e6f;
				z-index:2;
			}
			header nav ul li ul li
			{
			   position:relative;
               width:100%;
               z-index:2;
               
			} 
			header nav ul li ul li a
			{
				color:white !important;
			}
			header nav ul li ul li a:hover
		    {
                color:black !important;
		     }
		}
	</style>
</head>
<body>
	<header>
	<div class="logo"><img src="img/SKB_LATEST LOGO_PNG.png"></div>
	<nav>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li class="sub-menu">
        <a href="#">Services</a>
            <ul>
            	<li><a href="merge.php">MERGERS & ACQUISITIONS</a></li>
            	<li><a href="finance.php">CORPORATE FINANCING</a></li>
            	<li><a href="project.php">PROJECT FACILITATION</a></li>
            	<li><a href="duediligence.php">DUE DILIGENCE</a></li>
            	<li><a href="restruct.php">COMPANY RESTRUCTURING</a></li>
            	<li><a href="marketing.php">MARKETING CONSULTANCY</a></li>
            	<li><a href="client.php">CLIENT</a></li>
            </ul></li>
            <li><a href="feature.php">Feature</a></li>
			<li><a href="about.php">About</a></li>
			<li><a href="contact.php">Contact</a></li>
		</ul>
	</nav>
	<div class="menu-toggle">
		<i class="fas fa-bars" aria-hidden="true"></i>
	</div>

</header>
<script
  src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('.menu-toggle').click(function(){
			$('nav').toggleClass('active')
		})
		$('ul li').click(function(){

			$(this).siblings().removeClass('active');
			$(this).toggleClass('active');
		})
	})
</script>
</body>
</html>