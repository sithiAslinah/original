<?php include 'header.php'?>
<!DOCTYPE html>
<html>
<head>
	<title>Finance</title>
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
		#head h2
		{ 

			position:relative;
			bottom:600px;
			font-size:50px;
			font-weight:bold;
			color:black;
			text-align:center;
			
		}
		#head p
		{
		    position:relative;
			padding-bottom:15px;
			text-align:center;
			bottom:600px;
			font-size:20px;
			color:black;
			width:450px;
			margin:auto;
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
		main
		{
			width:600px;
			margin:auto;
		}
		main h2
		{

			position:relative;
			text-align:center;
			color:black;
			
		}
		.tainer
{
	width:1100px;
	height:900px;
	margin:auto;
	overflow:hidden;
}
.main-header
{
	height:35vh;
	display:flex;
	flex-direction:column;
	align-items: center;
	justify-content:center;
	text-align:center;
}
.main-header h1
{
	font-size:25px;
	margin-bottom: 2rem;
	line-height:1.2;
}
.main-header h1 span
{
	color:darkblue;

}
.main-header p
{
	font-size:15px;
}
img
{
	width:100%;
}
.card
{
	display:grid;
	grid-template-columns:repeat(2,1fr);
	grid-gap:2rem;
	background:#f1f1f1;
	margin-bottom:2rem;
}
.card h3
{
	margin-bottom:2rem;
}
.card img
{
	height:400px;
}
.card > div
{
	padding:2rem;
}
.card:nth-child(even) img
{
	order:2;
}
.btn 
{
	display:inline-block;
	background: #000;
	color:#fff;
	padding:0.8rem 1.8rem;
	margin-top: 2rem;
	cursor:pointer;
}
.btn:hover
{
	opacity:0.8;
}
@media(max-width:700px)
{
	.card
	{
		display:block;
	}
}
	</style>
</head>
<body>
<div class="content">
<div class="content-inside">
<header  id="head">
	<img src="img/money.jpg">
	<h2>Corporate Finance</h2>
	<p>Customize solutions for all your financial needs.</p>
	<a href="contact.php"><button>Contact Us</button></a>
</header>
<div class="main-header">
	<h1><span>Our Finance</span> Service</h1>
	<p>Provide financial consultation & financing routes to our clients without causing unnecessary hassles and displacement of the clients’ usual system of operation.</p>
</div>
<main class="tainer">
	<section class="card">
		<img src="img/merge.jpg">
		<div>
			<h3>Financial Advisory Service</h3>
			<p>Our Financial Advisory Service
provides comprehensive financial, 
economic and strategic advice for our 
clients to increase the innate value of their company</p>
		</div>
	</section>

	<section class="card" data-aos="fade-right">
		<img src="img/1.jpg">
		<div>
			<h3>Restructuring Service</h3>
			<p>Our Financial restructuring services help companies 
evaluate cash flow capabilities, and determine the 
optimum capital structure that will balance the cash flow 
availability with debt service requirements.</p>
		</div>
	</section>
</main>
 <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
    	offset:400,
    	duration:1000,
    	easing: 'ease'
    });
  </script>
</div>
</div>
<?php include 'footer.php'?>
</body>
</html>