<?php include 'header.php'?>
<!DOCTYPE html>
<html>
<head>
	<title>Features</title>
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
			bottom:450px;
			font-size:50px;
			font-weight:bold;
			color:white;
		}
		.feat{
      position:relative;
      padding:10px;
      width:1200px !important;
      height:1000px !important;
      display:flex;
      margin:auto;
    }
    .swiper-wrapper
    {
  display:grid;
  height:600px;
  align-content: center;
  grid-template-columns: auto auto auto;
  grid-gap:20px;
  padding:20px;
  margin:auto;
    }
    .swiper-slide {
      font-size: 18px;
      background: #fff;
      border:1px solid black;
      width:300px;
      height:450px;
      /* Center slide text vertically */
    }
    .swiper-slide:hover
    {
    	box-shadow:0 10px 20px rgba(0,0,0,.4);
    }
    .swiper-slide img
    { 
      position:relative;
      width:300px;
      padding:0 !important;
      transition:0.3s linear;
    }
    .swiper-slide h3
    { 
      position:relative;
    }
    .swiper-slide p
    {
      font-size:12px !important;
      line-height:1.6;
      
    }
    .swiper-slide button
    {
      position:relative;
      
      left:10px;
      border-radius:50px;
      width:120px !important;
      height:40px !important;
      background:#001f99;
      cursor:pointer;
      border:none;
      color:white;
      font-size:15px;
      outline:0;
    }
    .swiper-slide button:hover
    {
      background:white;
      border:2px solid darkblue;
      color:blue;
    }
    .art{
      height:100px !important;
      position:relative;
      padding:10px;
      bottom:90px;
    }
    .art h3{
      font-size:20px;
      bottom:10px;

    }
    .dat
    {
      padding:3px;
      padding-top:2px;
      position:relative;
      width:60px;
      height:80px;
      background:#FF5733;
      color:white;
      bottom:85px;
     }
    .dat p
    {
       position:relative;
       text-align:center;
       line-height: .75em;
    }
    .hbot 
    {
      font-size:35px !important;
      float:left !important;
    }
    .ok1{
      
      padding:10px;
    }
    .ok1 h2{
      position:relative;
      color:orange;
      left:40%;

      font-size:50px;
      font-weight:bold;
      display:inline;
      text-decoration:underline;
      padding:5px;
    }
    .ok1 p{
      position:relative;
      color:#7f8c8d;
      width:300px;
      left:75%;
    
      text-align:left;
      font-size:20px;
      line-height:1.6;

    }
    .hbt{
      position:relative;
      width:200px;
      height:50px;
      border-radius:50px;
      background:darkblue;
      border:none;
      cursor: pointer;
      left:35%;
 
      color:white;
    }
    .hbt:hover{
      background:white;
      border:1px solid blue;
      color:black;
      box-shadow:0 10px 40px rgba(0,0,0,0.5);

    }
    .d-block{
    height:600px;
    }
    .fok
    {
      position:relative;
 
    }
    .fok h2
    {
      position:relative;
      font-size:50px;
      font-weight:bold;
      padding:5px;
      color:blue;
    }
    .fok p
    {
      position:relative;
      left:80px;
      width:650px;
      font-size:20px;
      line-height:1.6;
      text-align:center;
    }
    .secbtn
    {
       position:relative;
      width:200px;
      height:50px;
      border-radius:50px;
      background:darkblue;
      border:none;
      cursor: pointer;
      color:white;
    }
     .secbtn:hover{
      background:lightblue;
      border:1px solid blue;
      color:black;
      box-shadow:0 10px 40px rgba(0,0,0,0.5);

    }
	</style>
</head>
<body>
	<div class="content">
<div class="content-inside">
<header id="head">
	<img src="img/feature.jpg">
	<h1 style="color:darkblue;position:relative;margin-left:650px;">FEATURES</h1>
</header>
<div class="feat">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
      <img src="img/1.jpg">
      <div class="dat">
        <strong>
        <p style="font-size:15px !important;">16</p>
        <p>Nov</p>
        <p>2019</p></strong>
      </div>
      <div class="art">
      <h3>Why start ups</h3>
      <p>Most people start up
businesses for the
wrong reasons. As
Making money is not
the KEY FACTOR when
doing so...
Let us explore the
fundamentals as to
WHY START-UPS FAIL IN
MALAYSIA....</p></div>
<a href="whystartups.pdf">
<button>READ MORE..</button></a>
      </div>
      <div class="swiper-slide">
        <img src="img/2.jpg">
        <div class="dat">
        <strong>
        <p style="font-size:15px !important;">16</p>
        <p>Nov</p>
        <p>2019</p></strong>
      </div>
      <div class="art">
      <h3>Is your business bankable?</h3>
      <p>In Malaysia there is a
huge distinction between
running a successful
business and making the
same business
“Bankable”. The mistake
that many entrepreneurs
make is to judge the
...</p></div>
<a href="isyourbusinessbankable.pdf"><button>READ MORE..</button></a>
      </div>
      <div class="swiper-slide"><img src="img/8.jpg">
        <div class="dat">
        <strong>
        <p style="font-size:15px !important;">16</p>
        <p>Nov</p>
        <p>2019</p></strong>
      </div>
      <div class="art">
      <h3>Browing above your capacity!</h3>
      <p>This case is 
is something that
jolted us in the financial
consultancy line as the
facts didn’t add up at first
but 
...</p></div>
<a href="whystartups.pdf"><button>READ MORE..</button></a></div>
      <div class="swiper-slide"><img src="img/4.jpg">
        <div class="dat">
        <strong>
        <p style="font-size:15px !important;">16</p>
        <p>Nov</p>
        <p>2019</p></strong>
      </div>
      <div class="art">
      <h3>Surviving the economic wave</h3>
      <p>Malaysian’s are currently
going into an Economic
frenzy with the Ringgit
devaluing against the US
Dollar... Businesses are on
a PANIC Stride.</p></div>
<a href="survivingtheeconomicwave.pdf"><button>READ MORE..</button></div></a>
      <div class="swiper-slide"><img src="img/5.jpg">
      <div class="dat">
        <strong>
        <p style="font-size:15px !important;">16</p>
        <p>Nov</p>
        <p>2019</p></strong>
      </div>
      <div class="art">
      <h3>Judging investors in Malaysia</h3>
      <p>With the current
econoimic conditions and
stringent regulations by
 Banks, SME’s
are looking onto the
lucrative Investment
option for their
Businesses...</p></div>
<button>READ MORE..</button></div>
      <div class="swiper-slide"><img src="img/restructure6.png">
        <div class="dat">
        <strong>
        <p style="font-size:15px !important;">16</p>
        <p>Nov</p>
        <p>2019</p></strong>
      </div>
      <div class="art">
      <h3>Surviving the Economic Challenges for Private Educational Organizations</h3>
      <p>Challenges
faced by the Education
Industry today. Especially
the booming ...</p></div>
<button>READ MORE..</button></div>
      
    </div>
</div></div></div>
<?php include 'footer.php'?>
</body>
</html>