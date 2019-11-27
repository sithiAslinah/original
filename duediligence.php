<?php include 'header.php'?>
<!DOCTYPE html>
<html>
<head>
	<title>Due Diligence</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans|Source+Sans+Pro&display=swap" rel="stylesheet">
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
		#head h2
		{ 

			position:relative;
			text-align:center;
			bottom:550px;
			font-size:50px;
			font-weight:bold;
			color:#040926;
		}
		#head p
		{
		    position:relative;
			padding-bottom:15px;
			bottom:550px;
			font-size:20px;
			color:black;
			width:350px;
			margin:auto;
			text-align:center;
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
		.fir
		{
			padding:10px;
		}
		.fir img
		{
			width:300px;
		}
        .fir p
        {
        	line-height:1.6;
        	font-size:15px;
        	color:gray;
        	padding-top:10px;
        }
        .break{
           position:relative;
           background:url(img/break.jpg);
           width:100%;
           height:100px;
        
      
    }
    .break h4{
           padding:30px;
           font-size:30px;
           color:white;
           text-align:center;
    }
    *{
    	box-sizing:border-box;

    }
      
.services-section{
	position:relative;
}
.inner-width
{
	width:100%;
	max-width:1200px;
	margin:auto;
	padding:0 20px;
	overflow:hidden;
}
.section-title
{
	text-align:center;
	text-transform:uppercase;
	font-size:20px;
}
.order
{
	width:160px;
	height:2px;
	background: #B2ccdd;
	margin:40px auto;
}
.services-container
{
	display:flex;
	flex-wrap:wrap;
	justify-content:center;
}
.service-box
{
	max-width:23.33%;
	padding:10px;
	text-align:center;
	cursor:pointer;
}
.service-icon
{
	display:inline-block;
	width:70px;
	height:70px;
	border:3px solid black;
	cursor:blue;
	transform:rotate(45deg);
	margin-bottom: 30px;
	transition:0.3s linear;
}
.service-icon i
{
	line-height:70px;
	transform:rotate(-45deg);
	font-size:26px;
	color:darkblue;
}
.service-box:hover .service-icon 
{
	background:darkblue;
	color:#ddd;
}
.service-box:hover .service-icon  i
{
	color:white;
}
.service-title
{
	font-size:18px;
	text-transform:uppercase;
	margin-bottom:10px;
}
.service-desc
{
	font-size:14px !important;
    color:darkgray !important; 

}
@media screen and (max-width:960px)
{
	.service-box
	{
		max-width:45%;
	}
}
@media screen and (max-width:768px)
{
	.service-box
	{
		max-width:50%;
	}
}

@media screen and (max-width:480px)
{
	.service-box
	{
		max-width:100%;
	}
}


	</style>
</head>
<body>
<div class="content">
<div class="content-inside">
<header id="head">
	<img src="img/duedeligence.jpg">
	<h2>Due Diligence</h2>
	<p>Independent evaluations for the right decision</p>
	<a href="contact.php"><button>Contact Us</button></a>
</header>
<main>
	<h3 style="text-align:center;position:relative;font-size:25px">LOOKING FOR RIGHT DECISION?</h3>
	<div class="border">
	<div class="fir">
	<p>SKB evaluation provides salient information to be considered before any concrete financial commitments are made. As such, it is a helpful tool in making a more informed credit or investment decision. It also provides information that can be used in the crafting of the lending or investment instruments for the benefit of the lending or investing entities</p>
    </div>
    <div class="fir">
    <img src="img/oneway.jpg">
    </div>
</div>

<div class="break"><h4>WHY YOU NEED US?</h4></div>
</main>
<div class="services-section">
	<div class="inner-width">
		<h1 class="section-title">Our Solution</h1>
		<div class="order"></div>
		<div class="services-container">
			<div class="service-box">
			<div class="service-icon">
				<i class="fas fa-chart-line"></i>
			</div>
			<div class="section-title">MARKET POSITIONING</div>
			<div class="service-desc">
			we will provide clear 
understanding of competition, 
capabilities  and market
dynamics question.
			</div></div>

           

           <div class="service-box">
			<div class="service-icon">
				<i class="fas fa-user-cog"></i>
			</div>
			<div class="section-title">EXECUTION CAPABILITIES</div>
			<div class="service-desc">
				 Execution capabilities  including
 strategy, management capabilities,
 cost structure, customer service
, quality, and product innovation.
			</div></div> 
		
          <div class="service-box">
			<div class="service-icon">
				<i class="fas fa-donate"></i>
			</div>
			<div class="section-title">CASH FLOW</div>
			<div class="service-desc">
				Cash flow forecast, quality of earnings and debt service capabilities.
			</div></div> 

		<div class="service-box">
			<div class="service-icon">
				<i class="far fa-paper-plane"></i>
			</div>
			<div class="section-title">BUSINESS PLAN</div>
			<div class="service-desc">
Attainability of business plan & projections
</div></div> </div></div></div>
</div>
</div>
<?php include 'footer.php' ?>
</body>
</html>