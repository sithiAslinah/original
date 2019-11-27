<?php include 'header.php'?>
<!DOCTYPE html>
<html>
<head>
	<title>Project Facilitation</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans|Source+Sans+Pro&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<style type="text/css">
			html, body {
  height: 100%; 
  padding:0;
  margin: 0;
  font-family:'Open Sans', sans-serif;
}
.content {
  min-height: 100%;
}
.content-inside {
  padding-bottom: 50px;
}
#head
{
	height:700px;
}
		#head img
		{
			width:100%;
			height:700px;
			background-size: cover;
		}
		#head h1
		{ 

			position:relative;
			bottom:600px;
			font-size:50px;
			font-weight:bold;
			text-align:center;
		}
		#head p
		{
		    position:relative;
			padding-bottom:15px;
			bottom:600px;
			font-size:20px;
			width:450px !important;
			margin:auto;
			text-align:center;padding-bottom:20px;
		}
		#head button
		{
			position:relative;
			bottom:600px;
			font-size:15px;
			background:darkblue;
			width:200px;
			height:50px;
			border:none;
			cursor:pointer;
			color:white;
			left:43%;


		}
		main
		{
			margin-left:10px;
			padding-bottom:30px;
		}
		main h2
		{

			position:relative;
			text-align:center;
			padding:10px;
		}
		.pser
		{
			display:flex;
			position:relative;
			width:1200px;
			 box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			 margin:auto;
		}
		.ser img
		{
			width:300px;
		}
		.project-content
		{
			padding:15px;
		}
		.project-content p
		{
			padding-top:15px;
			line-height:1.6;
		}
		.project-content h3
		{
			font-size:20px;
		}
		.project-service
		{
			display:flex;
			position:relative;
			top:50px;
			width:800px;
			padding:10px;
		}
		.service-one
		{
			position:relative;
			bottom:30px;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			width:300px;
			margin:5px auto;
			padding:10px;
		}
		.service-one h5
		{
           font-size:20px;
           color:darkblue;
		}
		.service-one p
		{
           font-size:15px;
		}
		.border
		{
			
			width:100% !important;
			height:5px;
			background:blue;
			position:relative;
		}

	</style>
</head>
<body>
<div class="content">
    <div class="content-inside">
<header id="head">
	<img src="img/check.jpg">
	<h1 style="color:#ffffff">Project Facilitation</h1>
	<p style="color:#ffffff">Contributing to nation buliding through project management and facilitation</p>
	<a href="contact.php"><button>Contact Us</button></a>
</header>
<main>
	<h2>Project Management and Facilitation</h2>
	<div class="pser">
		<div class="ser">
			<img src="img/secpro.jpg">
		</div>
		<div class="ser">
			<div class="project-content" data-aos="fade-up">
<h3>Contributing to nation building through project management & facilitation</h3>
<p>At SKB Group we manage large Project Facilitation initiatives in accordance to the strategic plans of the nation. We have been working with several GLCs and local authorities in several of our projects.
</p> 
<p>
We have been appointed by several bodies to act as mediators to large infrastructural projects and are responsible to liaise with prospective investors, real estate developers and project management firms.
</p>
<h2 style="position:relative;top:25px;text-align:center;right:30px;padding:10px ">Our Services</h2>
<div class="project-service">
<div class="service-one" data-aos="fade-down"><div class="border" style="bottom:10px;"></div>
<h5>Project Consultancy Services</h5>
<p>We have earned an impeccable reputation as a project consultancy and management firm through our strict adherence to local laws & regulations as well as ensuring smooth management & transfer of the deals to obtain best financial returns for the investing firms.</p>
</div>
<div class="service-one" data-aos="fade-up">
<h5>Promotion of Proposed Projects</h5>
<p>
	Promotion of proposed projects has been one of our rewarding services and we have been successful in creating interest among prospective investors from around the world. With our strong local knowledge & expertise we have been serving the country with our Project Facilitation services.
</p>
<div class="border" style="top:10px;"></div>
</div>
</div>
</div>
</div>
</div>
 <div>
</div>
</main>
</div>
</div>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
    	offset:400,
    	duration:500,
    	easing: 'ease'
    });
  </script>
<?php include 'footer.php'?>
</body>
</html>