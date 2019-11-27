<?php include 'header.php';?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans|Source+Sans+Pro&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow&display=swap" rel="stylesheet">
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
		.himg{
			width:100%;
			height:700px;
			background-size:cover;
		}
		#head
		{
			height:600px;
		}
		#head h2{

			position:relative;
			text-align:center;
			bottom:600px;
			color:white; 
			font-size:50px;
			font-weight:bold;
			
		}
        .title p{
        	position:relative;
        	bottom:600px;
        	width:450px;
        	color:#fff;
            font-size:20px;
            text-align:center;
            margin:auto;
            padding-bottom:15px;
        }
        .exp{
        	font-size:15px;
        	position:relative;
        	width:150px;
        	height:50px;
        	background:#001f99;
        	color:white;
        	bottom:600px;
        	border:none;
        	left:43%;
        	cursor:pointer;
        	text-align:center;

        }
       .exp:hover{
       	background:#fff;
       	border:1px solid black;
       	color:darkblue;
       }
       .main
       {
       	background:white;
        position:relative;
       	width:600px;
       	display:flex;
        margin:auto;
        padding:20px;
        box-shadow:0 10px 40px rgba(0,0,0,0.3);
       }
       .bord
       {
       	width:50px;
       	height:280px;
       	background:darkblue;
       }
       .mcon
       {
       	padding:10px;
       }
       .mcon p
       {
       	padding:10px;
       	font-size:15px;
       	line-height:1.6;
       	color:#7f8c8d;
       }
       .next h3{
       	font-size:20px;
       	padding:5px;
       }
       *{
	box-sizing:border-box;

           }
.services-section{
	position:relative;
	padding:20px;
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
}
.border
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
	max-width:33.33%;
	padding:10px;
	text-align:center;
	cursor:pointer;
}
.service-icon
{
	display:inline-block;
	width:70px;
	height:70px;
	border:3px solid #B2ccdd;
	cursor:blue;
	transform:rotate(45deg);
	margin-bottom: 30px;
	margin-top:16px;
	transition:0.3s linear;
}
.service-icon i
{
	line-height:70px;
	transform:rotate(-45deg);
	font-size:26px;
	color:gray;
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
	<img src="img/puzzle.jpg" class="himg">
	<div class="wow">
	<h2>MERGERS & ACQUISITIONS</h2> 
    <div class="title">
    <p>At SKB we understand your growth potential.
	By harnessing our vast network and market knowledge we help you unlock your true value.</p></div>
	<a href="contact.php"><button class="exp">Contact Us</button></a>
	</div>
</header>
<div class="main" data-aos="fade-up">
<div class="next">
	<div class="bord"></div>
</div>
<div class="next" >
	<div class="mcon">
	<h3 class="h22">Why Mergers & Acquisition is important?</h3>
	<p class="para">Mergers & Acquisitions can be very tricky if not managed properly.<br> 
Just like a marriage, M&As should be a long-term commitment by <br>
both parties involved in the process. If not handled professionally,<br>
 M&As can lead to massive degradation of the company 
wealth & overall value of both parties.</p></div>
</div></div>



<div class="services-section">
	<div class="inner-width">
		<h2 class="section-title">Our Solution</h2>
		<div class="border"></div>
		<div class="services-container">
			<div class="service-box">
			<div class="service-icon">
				<i class="fas fa-cogs"></i>
			</div>
			<div class="section-title">Critical Aspect</div>
			<div class="service-desc">
				Manage the critical
aspects and intricate 
issue of the M&A process.
			</div></div>

           

           <div class="service-box">
			<div class="service-icon">
				<i class="fas fa-project-diagram"></i>
			</div>
			<div class="section-title">Acquisition</div>
			<div class="service-desc">
				Manage the acquisition of
Malaysian owned business
by foreign companies under 
the legal and regulatory
			</div></div> 
		


		<div class="service-box">
			<div class="service-icon">
				<i class="fas fa-users-cog"></i>
			</div>
			<div class="section-title">Formalizing</div>
			<div class="service-desc">
				Formalizing the terms of
purchase and payments 
evaluation of the tangible
value of the selling company
and strategic negotiations on 
behalf of both party

</div>

</div> 

</div>
</div>
</div>
</div>
</div>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
    	offset:400,
    	duration:1000,
    	easing: 'ease'
    });
  </script>
<?php include 'footer.php' ?>
</body>
</html>