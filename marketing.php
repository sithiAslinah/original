<?php include 'header.php';?>
<!DOCTYPE html>
<html>
<head>
	<title>Marketing Consultancy</title>
<link href="https://fonts.googleapis.com/css?family=Open+Sans|Source+Sans+Pro&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<style type="text/css">
		html, body {
               height: 100%; 
               padding:0;
               margin: 0;
               font-family:'Open Sans', sans-serif
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
		#head h2
		{ 

			position:relative;
			bottom:600px;
			font-size:50px;
			font-weight:bold;
			color:#040926;
			text-align:center;
		}
		#head p
		{
		    position:relative;
			padding-bottom:20px;
			bottom:600px;
			font-size:20px;
			color:black;
			width:350px;
			margin:auto;
			text-align:center;
		}
		#head button
		{
			position:relative;
			bottom:600px;
			font-size:15px;
			background:#001f99;
			width:200px;
			height:50px;
			border:none;
			cursor:pointer;
			color:white;
			left:43%;

		}
		.border
		{
			display:flex;
			width:800px;
			margin:auto;
			padding:10px;
			position:relative;
		}
		.fir img
		{
			padding:10px;
			width:300px;
		}
        .fir p
        {
        	line-height:1.6;
        	font-size:15px;
        	color:gray;
        }
        .box
        {
        	display:flex;margin:auto;
        	position:relative;
        	
        	
        }
        .bx1
        {
        	padding:15px;
        	border:1px solid lightgray;
        	width:200px;
        	margin:6px auto;
        	text-align:center;
        	background:#303F9F;
        	color:white;
        	border-radius:10px;
        }
        .bx1:hover
        {
        	background:white;
        	color:darkblue;
        	box-shadow:0 10px 40px rgba(0,0,0,0.1);
        	width:250px;
        }
	</style>
</head>
<body>
<div class="content">
<div class="content-inside">
<header id="head">
	<img src="img/mark.jpg">
	<h2>Marketing Consultancy</h2>
	<p>Leveraging on your intrinsic strengths</p>
	<a href="contact.php"><button>Contact Us</button></a>
</header>
<main>
	<h2 style="text-align:center;position:relative;">Marketing Solution</h2>
	<div class="border">
	<div class="fir">
    <img src="img/5.jpg" data-aos="fade-down">
    </div>
	<div class="fir">
	<p>As a complete solution provider for small & medium sized enterprises that lack strong marketing & brand building resources, SKB has been extending support of marketing consultancy to nurture & grow their brands.</p>

<p>SKB have helped many organizations to develop a strategic plan for their products & services thereby growing their businesses manifold and improving the overall intrinsic value of their organizations.</p>
</div>
</div>
</main>
<h3 style="text-align:center;color:blue;font-size:15px;position:relative;">SKB GROUP</h3>
<h2 style="text-align:center;
position:relative;">Marketing Services</h2>
<div class="box">
	<div class="bx1" data-aos="fade-up">
		<h5>Online and offline direct marketing services covering both ATL & BTL activities.</h5>
	</div>
	<div class="bx1" data-aos="fade-down"><h5>Planning and Forecasting Consultancy</h5></div>
	<div class="bx1" data-aos="fade-up"><h5>Distributor development and management services</h5></div>
	<div class="bx1" data-aos="fade-down"><h5>Customized marketing activities as required by our clients</h5></div>
</div>
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
<?php include 'footer.php' ?>
</body>
</html>