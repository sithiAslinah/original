<?php include 'header.php'?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
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
			padding:20px;
			bottom:550px;
			font-size:50px;
			font-weight:bold;
			color:white;
		}
		#head p
		{
		    position:relative;
			padding:20px;
			bottom:550px;
			font-size:25px;
			color:white;
			width:260px;
		}
		#head button
		{
			position:relative;
			bottom:550px;
			font-size:15px;
			background:darkblue;
			width:200px;
			height:50px;
			border:none;
			cursor:pointer;
			color:white;
			left:20px;

		}
		main h2
		{
			text-align:center;
			position:relative;
		    padding-top:30px;
		}
		.client
{
  display:grid;
  width:1300px;
  height:600px;
  align-content: center;
  grid-template-columns: auto auto auto auto;
  grid-gap:10px;
  margin:auto;

}
.first{
  position:relative;background:#F2F4F4;
  width:250px;
  height:220px; 
  box-shadow:0 10px 20px rgba(0,0,0,.2);
  overflow: hidden;

}
.first:hover .contt p
{
	color:black;
}
.header__bg {
  position: absolute;
  width: 100%;
  height:60%;
  background-image: linear-gradient(to right, #6a11cb 0%, #2575fc 100%);
  transform: skewY(-6deg);
  transform-origin: top left;
}
.first:hover .header__bg
{
	background-image: linear-gradient(to top, #1e3c72 0%, #1e3c72 1%, #2a5298 100%);
}
.first h1 {
  position: relative;
  color: white;
  font: 44px "Arial";
  text-align: center;
  font-weight:bold;
  padding:10px;
}
.contt
{
	background:#F2F4F4;
}
.contt p
{
	position:relative;
	font-size:15px;
	padding:10px;
	 
	color:#839192;
}
       </style>
</head>
<body>
<div class="content">
<div class="content-inside">
<header id="head">
	<img src="img/chck.jpg">
	<h1>Join With Us</h1>
	<a href="contact.php"><button>Contact Us</button></a>
</header>
<main>
	<h2>How to become SKB client?</h2>
<div class="client">
<div class="first" data-aos="fade-up">
  <div class="header__bg"></div>
  <h1>1</h1>
<div class="contt">
  <p>Sales Team to meet client</p>
</div>
</div>

<div class="first" data-aos="fade-down">
  <div class="header__bg"></div>
  <h1>2</h1>
<div class="contt">
  <p>Submission of 
Application Form,
 Document Checklist and
CCRIS Consent Form
</p>
</div>
</div>

<div class="first" data-aos="fade-up">
  <div class="header__bg"></div>
  <h1>3</h1>
<div class="contt">
  <p>SKB POD to do Analysis of Clients Documents</p>
</div>
</div>

<div class="first" data-aos="fade-down">
  <div class="header__bg"></div>
  <h1>4</h1>
<div class="contt">
  <p>Client to Pay for CAM upon Confirmation of Case</p>
</div>
</div>

<div class="first" data-aos="fade-up">
  <div class="header__bg"></div>
  <h1>5</h1>
<div class="contt">
  <p>SKB to Carry out Full diligence, Site Visit & Preparation of Proposal</p>
</div>
</div>


<div class="first" data-aos="fade-down">
  <div class="header__bg"></div>
  <h1>6</h1>
<div class="contt">
  <p>Client Interview / Presentation at SKB Office</p>
</div>
</div>

<div class="first" data-aos="fade-up">
  <div class="header__bg" ></div>
  <h1>7</h1>
<div class="contt">
  <p>The Signing of Agreement and Initial Payment Receipt by Client</p>
</div>
</div>


<div class="first" data-aos="fade-down">
  <div class="header__bg" style="transform:none !important;height:100% !important;background-image: linear-gradient(-20deg, #00cdac 0%, #8ddad5 100%);"></div>
  <h1 style="font-size:25px !important;justify-content:center;position:relative;top:50px">Commencement of works</h1>
</div>
</div>
</main></div></div>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
    	offset:400,
    	duration:500
    });
  </script>
<?php include 'footer.php'?>
</body>
</html>