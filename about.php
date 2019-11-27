<?php include 'header.php'?>
<!DOCTYPE html>
<html>
<head>
	<title>About Us</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans|Source+Sans+Pro&display=swap" rel="stylesheet">
	<script
  src="https://code.jquery.com/jquery-1.12.4.min.js"
  integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script> 
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
	height:600px;
}
		#head img
		{
			width:100%;
			height:600px;
			background-size: cover;
		}
		#head h1
		{ 

			position:relative;
			padding:20px;
			bottom:550px;
			font-size:50px;
			font-weight:bold;
			color:darkblue;
		}
		#head p
		{
		    position:relative;
			padding:20px;
			bottom:560px;
			font-size:25px;
			color:white;
			width:260px;
		}
		#head button
		{
			position:relative;
			bottom:550px;
			font-size:15px;
			background:#001f99;
			width:200px;
			height:50px;
			border:none;
			cursor:pointer;
			border-radius:50px;
			color:white;
			

		}
		.abt{
      position:relative;
      display:flex;
      width:1100px;
      height:480px; 
      margin:auto;
    }
.sec1
{
	padding-right:15px;
}
.sec1 p{
      font-size:15px;
      line-height:1.6;
      color:#7f8c8d;
}
.sec1 img
{
	position:relative;
	width:560px;
}
.container  
{  
            
            position:relative;
            overflow:hidden;
            
}    
.container-right  
{  
        	   position:relative;
            background:#F7F9F9;  
            padding:5px;  
            border:solid 1px #CCC;  
            float:left;
            margin-top:10px;
            font-size:15px; 
            border-radius:10px;
            color:#616A6B;

}  
          
.container-left {  
            width:500px;  
}  
          
.container-right {  
            width:360px;
            height:120px;  
}
.btn{
            width:100px;
            height:40px;
            border:none;
            color:white;
            cursor:pointer;
            border-radius:10px;
            border:1px solid lightgray;
            outline:0;
            font-weight:bold;
 }
.work{background:blue}
.notwork{background:white;color:black}
 .break{
           position:relative;
           background:url(img/break.jpg);
           width:100%;
           height:250px;
        
      
    }
.mcal{
  position:relative;
  display:flex;
  margin:auto;
  width:600px;
}
.one{
text-align:center; 
margin: auto;
}
.scon
{ 
  position:relative;
  margin-top:0px !important;
  font-size:20px;
  color:#ffffff;
}
.counter
{
color:white!important;
font-size:50px !important;
}
.slideshow-container
{
	 width:1000px;
	 height:300px;
	 border-radius:20px;
	 margin:auto;
	 background:#F8F9F9;
	 position:relative;
}
.ent
{
	position:relative;
	display:flex;
	width:1000px;
}
.clt
{
	  display:flex;
	  margin:auto;
	  padding:10px;
	  height:200px;
}
.clt img
{
	 width:100px;
	 height:100px;
	 border-radius:50%;
	 position:relative;
	 top:30px;
}
.contclt
{
	   padding-left:15px; 
}
.contclt p
{
	line-height:1.6;
}
.contclt i 
{
	 color:blue;
	 font-size:30px;
}
/* The dots/bullets/indicators */
.dot {
	position:relative;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
  margin-bottom:10px;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}
.nme
{
	position:relative;
	
}
.nme h5
{
	padding-top:10px;
	color:blue;
}
</style>
</head>
<body>
<div class="content">
<div class="content-inside">
<header style="text-align:center;" id="head">
	<img src="img/about.jpg">
	<h1>ABOUT US</h1>
	<p style="margin:auto;width:600px">STRATEGIC BUSINESS CONSULTANCY FOR YOUR SUCCESS</p>
	<a href="contact.php"><button>Contact Us</button></a>
</header>
<div class="abt">
  <div class="sec1" style="float:left"><img src="img/abt.jpg"></div>
  <div class="sec1" style="position:relative;
  width:500px;float:right;">
  <h3 style="color:blue;font-size:15px !important;">WELCOME TO SKB</h3>
  <h2 style="font-size:30px">The Smartest Thing To Do  With Your Business</h2>
  <p>Business consulting operates four subsidiaries in Malaysia.We are designed to manage the diverse portfolio of our clients.Our clients have
  been benefited from our diverse range of services in Malaysia.We help
 our clients complete and win both domestically and internationally.</p>
 
 <div class="container"> 
    <div class="container-left"> 
    <button id="one" class="btn work">Purpose</button>
    <button id="two" class="btn notwork">Mission</button>
    <button id ="three" class="btn notwork">Values</button>
    <button id ="four" class="btn notwork">Commitment</button>
    </div > 
    <div class ="container-right"> 
    <h2>To help our clients manage their companies better through our knowledge and experience.</h2></div>
 </div> 
</div>
</div>
<div class="break">
<div class="mcal">
 <div class="one">
 <p class="counter">2500</p>
 <p class="scon">HAPPY CLIENTS</p>
</div>
 <div class="one" style="width:200px;">
 <p class="counter">21</p>
 <p class="scon">YEARS EXPERIENCED</p>
</div>
</div></div>
<script src="jquery.counterup.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<script src="cout.js"></script>

<h2></h2>
<p></p>
<h2 style="text-align:center;padding:10px;line-height:20px;position:relative;">Our Clients
 Says</h2>
</div>
<div class="slideshow-container">
<div class="mySlides fade">
    <div class="clt">
    <img src="img/ray.jpg">
  <div class="contclt">
    <i class="fas fa-quote-left"></i>
    <p>Thank you SKB for identifying the possible challenges that we might have faced in our M&A process. Your professional and friendly guidance always makes every process go smoothly. You are my preferred choice for guiding me in my new businesses.</p>
<div class="nme">
<h4>Mr. Peter Foong</h4>
<h5>Managing Director, Traxx Industries (M) Sdn Bhd
Client since 2006
</h5>
</div>

</div>
</div>
</div>

<div class="mySlides fade">
<div class="clt">
     <img src="img/ray.jpg">
  <div class="contclt">
    <i class="fas fa-quote-left"></i>
    <p>  
We always take advice from SKB before all our financial initiatives. They have proved over the years as a truly trustworthy and knowledgeable consultancy firm.</p>
<div class="nme">
<h4>Mr. Haniff Hashim</h4>
<h5>Chairman, DYNAMIC DEVELOPMENT SDN BHD
Client since 2010</h5></div>
  </div>
  </div>
</div>

<div class="mySlides fade">
  <div class="clt">
     <img src="img/ray.jpg">
  <div class="contclt">
    <i class="fas fa-quote-left"></i>
    <p>SKB showed us the way when we thought that all the doors have closed. Today we are a successful enterprise and we intend to take advise from SKB always as they are like our friends.</p>
<div class="nme">

<h4>Mr. Petyer Hoitz</h4>
<h5>Managing Director, Traxx Industries (M) Sdn Bhd
Client since 2006
</h5>
</div>
  </div>
  </div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
<script src="sli.js"></script>
</div></div>
<?php include 'footer.php'?>
</body>
</html>