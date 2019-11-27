<?php include 'header.php'?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
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
			padding:20px;
			bottom:500px;
			font-size:50px;
			font-weight:bold;
			color:white;
			text-align:center;
		}
		main
		{
			height:800px;
		}
		.add
		{
			display:flex;
			width:780px;
			margin:auto;
			padding:20px;
			height:300px;
		}
		
		.aone
		{
			width:250px;
			height:220px;
			padding:10px;
			margin-left:10px;
			border:1px solid black;
			text-align:center;
		}
		.aone h5
		{
			font-size:20px;
		}
		.aone p
		{
			font-size:15px;
		}
		.aone i
		{
			color:blue;
			font-size:20px;
		}
		.form-deco
		{
			width:530px;
			margin:auto;
			border:1px solid lightgray;
			padding:50px;
		}
		.inp
		{
			width:430px;
			height:40px;
			margin-bottom:10px;
			font-size:15px;
			padding:10px;
		}
		input[type=submit]
		{
			width:250px;
			height:40px;
			border:none;
			outline:0;
			background:darkblue;
			color:white;
			cursor:pointer;
			font-weight:bold;
		}
		input[type=submit]:hover
		{
			background:white;
			border:2px solid darkblue;
			color:darkblue;
		}
		main h3
		{
			text-align:center;
			width:350px;
			margin:auto;
			padding-bottom:30px;
		}
		.map
		{
			height:300px;
		}
	</style>
</head>
<body>
<div class="content">
<div class="content-inside">
<header id="head">
	<img src="img/network.jpg">
	<h1>Connect With Us</h1>
</header>
<main>
	<div class="add">
		<div class="aone">
			<i class="fas fa-map-marker-alt"></i>
			<h5>Address</h5>
			<p>A3A-07,Block A,Kelana Square,Jalan 7/26,47301,Petaling Jaya,Selangor,Malaysia</p>
		</div>
		<div class="aone">
			<i class="fa fa-phone"></i>
			<h5>Contact</h5>
	        <p>+603-7610 4843/4844</p>
		</div>
		<div class="aone">
			<i class="far fa-envelope"></i>
			<h5>Email</h5>
			<p>ask@skbassociate.com</p>
		</div>
	</div>
	<h3>If you got any questions
please do not hesitate to send us a message
</h3>
<form method="post" class="form-deco">
<input type="text" name="name" placeholder="Your Name" class="inp">
<input type="email" name="email" placeholder="Your Email" class="inp">
<input type="text" name="subject" placeholder="Subject" class="inp">
<textarea class="inp" name="message" placeholder="Message"></textarea>
<input type="submit" name="submit" value="Submit">
</form></main>
<div class="map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.9586829088976!2d101.58988631426281!3d3.105629254285923!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc4c228930ba33%3A0x16ee59af51ca15e1!2sSKB%20Associates!5e0!3m2!1sen!2smy!4v1574750290061!5m2!1sen!2smy" width=100% height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe></div>
</div>
</div>
<?php include 'footer.php'?>
</body>
</html>