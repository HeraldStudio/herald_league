<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>Test</title>
	
	<meta charset='utf-8'>

		<link href="__Public__/Css/bootstrap/bootstrap-combine.css" rel="stylesheet" media="screen"> 
	<script src="__Public__/Js/bootstrap/bootstrap.js"></script>	
	
	
	<link rel="stylesheet" media="all" href="__Public__/Css/kuxuan/style.css">		
		<!-- JS -->
		<script src="__Public__/Js/kuxuan/jquery-1.7.1.min.js"></script>
		<script src="__Public__/Js/kuxuan/custom.js"></script>
		<script src="__Public__/Js/kuxuan/tabs.js"></script>
		<script src="__Public__/Js/kuxuan/css3-mediaqueries.js"></script>
		<script src="__Public__/Js/kuxuan/jquery.columnizer.min.js"></script>
		
		<!-- Isotope -->
		<script src="__Public__/Js/kuxuan/jquery.isotope.min.js"></script>
		
		<!-- Lof slider -->
		<script src="__Public__/Js/kuxuan/jquery.easing.js"></script>
		<script src="__Public__/Js/kuxuan/lof-slider.js"></script>
		<link rel="stylesheet" href="__Public__/Css/kuxuan/lof-slider.css" media="all"> 
		<!-- ENDS slider -->
		
		<!-- GOOGLE FONTS -->
		<link href="__Public__/Css/kuxuan/css" rel="stylesheet" type="text/css">

		<!-- Tweet -->
		<link rel="stylesheet" href="__Public__/Css/kuxuan/jquery.tweet.css" media="all"> 
		<script src="__Public__/Js/kuxuan/jquery.tweet.js"></script> 
		<!-- ENDS Tweet -->
		
		<!-- superfish -->
		<link rel="stylesheet" media="screen" href="__Public__/Css/kuxuan/superfish.css"> 
		<script src="__Public__/Js/kuxuan/hoverIntent.js"></script>
		<script src="__Public__/Js/kuxuan/superfish.js"></script>
		<script src="__Public__/Js/kuxuan/supersubs.js"></script>
		<!-- ENDS superfish -->
		
        <!-- prettyPhoto -->
		<script src="__Public__/Js/kuxuan/jquery.prettyPhoto.js"></script>
		<link rel="stylesheet" href="__Public__/Css/kuxuan/prettyPhoto.css" media="screen">
		<!-- ENDS prettyPhoto -->
		
		<!-- poshytip -->
		<link rel="stylesheet" href="__Public__/Css/kuxuan/tip-twitter.css">
		<link rel="stylesheet" href="__Public__/Css/kuxuan/tip-yellowsimple.css">
		<script src="__Public__/Js/kuxuan/jquery.poshytip.min.js"></script>
		<!-- ENDS poshytip -->
		

		
		<!-- JCarousel -->
		<script type="text/javascript" src="__Public__/Js/kuxuan/jquery.jcarousel.min.js"></script>
		<link rel="stylesheet" media="screen" href="__Public__/Css/kuxuan/carousel.css"> 
		<!-- ENDS JCarousel -->
		
		<!-- GOOGLE FONTS -->
		<link href="__Public__/Js/kuxuan/css" rel="stylesheet" type="text/css">

		<!-- modernizr -->
		<script src="__Public__/Js/kuxuan/modernizr.js"></script>
		
		<!-- SKIN -->
		<link rel="stylesheet" media="all" href="__Public__/Css/kuxuan/skin.css">
		
		<!-- Less framework -->
		<link rel="stylesheet" media="all" href="__Public__/Css/kuxuan/lessframework.css">
		
		<!-- flexslider -->
		<link rel="stylesheet" href="__Public__/Css/kuxuan/flexslider.css">
		<script src="__Public__/Js/kuxuan/jquery.flexslider.js"></script>
	
	<style>
		.fixed-left{
			position: fixed;
			left: 0;
			z-index: 1030;
			top: 100px;
		}
	</style>
	<!--<style type="text/css">
	@media (min-width:980px){
		body{
		padding-top:48px;}
	}
	</style>-->

</head>
<body style="font-family:微软雅黑; background-image:url(__Public__/Images/noise-all.png)">
	<div class="navbar navbar-fixed-top well">
		<div class="navbar-inner">
			<div class="container-fluid">
				<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="brand" href="#"><strong>活动平台</strong></a>
				<div class="nav-collapse collapse">
					<a href="#" class="navbar-text pull-right" style="text-decoration:none;padding-left:20px">登录</a>
					<form class="navbar-form pull-right">
						<input type="text" class="search-query span3" placeholder="Search">
						<button type="submit" class="btn">Go</button>
					</form>
					<ul class="nav">
						<li class="active"><a href="#">首页</a></li>
						<li><a href="#">社团列表</a></li>
						<li><a href="#">社团空间</a></li>
						<li><a href="#">二手市场</a></li>
						<li><a href="#">失物招领</a></li>
					</ul>
				</div><!-- /.nav-collapse -->
			</div>
		</div>
	</div>
	<div class="container-fluid" style="padding-top:100px">
	  <div class="span3 " style="background-image:url(__Public__/Images/main-bg.png)">
		<ul class="nav nav-tabs nav-stacked " id="filter-buttons" style="margin-bottom:0px;border-top:0px;">
			<li class="active"><a href="#">分类</a></li>
			<li><a href="#" data-filter="*" class="selected">show all</a></li>
			<li><a href="#" data-filter=".web">web</a></li>
			<li><a href="#" data-filter=".print">print</a></li>
			<li><a href="#"data-filter=".design">design</a></li>
			<li><a href="#" data-filter=".photo">photo</a></li>
			<li><a href="#" data-filter=".movie">movie</a></li>
		</ul>
	    
	  </div>
	  <div class="span9 ">
	   <div id="filter-container" class="cf isotope" >
					<figure class="movie isotope-item" >
						<a href="#" class="thumb"><img src="__Public__/Images/01.jpg" alt="alt"></a>
						<figcaption>
							<a href="#"><h3 class="heading">1Pellentesque </h3></a>
							met, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. </figcaption>
					</figure>
					
					<figure class="movie isotope-item" >
						<a href="#" class="thumb"><img src="__Public__/Images/02.jpg" alt="alt"></a>
						<figcaption>
							<a href="#"><h3 class="heading">2Pelletant morbi</h3></a>
							tae, ultricies egetsit amet quam egestas semper. Aenean ultricies mi vitae est. </figcaption>
					</figure>
					
					
					<figure class="movie design isotope-item" >
						<a href="#" class="thumb"><img src="__Public__/Images/03.jpg" alt="alt"></a>
						<figcaption>
							<a href="#"><h3 class="heading">3Habitant morbi</h3></a>
							Tenean ultricies mi vitae est. </figcaption>
					</figure>
					
					
					<figure class="photo isotope-item" >
						<a href="#" class="thumb"><img src="__Public__/Images/04.jpg" alt="alt"></a>
						<figcaption>
							<a href="#"><h3 class="heading">4Pellentesque habitant morbi</h3></a>
							Trultric. Aenean ultricies mi vitae est. </figcaption>
					</figure>
					
					
					<figure class="web photo isotope-item" >
						<a href="#" class="thumb"><img src="__Public__/Images/05.jpg" alt="alt"></a>
						<figcaption>
							<a href="#"><h3 class="heading">5Pell morbi</h3></a>
							Tfeugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. </figcaption>
					</figure>
					
					
					<figure class="web print isotope-item" >
						<a href="#" class="thumb"><img src="__Public__/Images/06.jpg" alt="alt"></a>
						<figcaption>
							<a href="#"><h3 class="heading">6Pellentmorbi</h3></a>
							Tristique senricies mi vitae est. </figcaption>
					</figure>
					
					
					<figure class="photo isotope-item" >
						<a href="#" class="thumb"><img src="__Public__/Images/04.jpg" alt="alt"></a>
						<figcaption>
							<a href="#"><h3 class="heading">7Pelleabitant morbi</h3></a>
							Tristique senectus et netus esit amet quam egestas semper. Aenean ultricies mi vitae est. </figcaption>
					</figure>
					
					
					<figure class="web movie isotope-item" >
						<a href="#" class="thumb"><img src="__Public__/Images/05.jpg" alt="alt"></a>
						<figcaption>
							<a href="#"><h3 class="heading">8Pellentesquerbi</h3></a>
							Tristique senas semper. Aenean ultricies mi vitae est. </figcaption>
					</figure>
					
					
					<figure class="web movie isotope-item" >
						<a href="#" class="thumb"><img src="__Public__/Images/01.jpg" alt="alt"></a>
						<figcaption>
							<a href="#"><h3 class="heading">Pel是多少多少多少多少到山顶uemorbi</h3></a>
							Tristique senectus et netus et malesuavitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. </figcaption>
					</figure>
					
				</div><!-- ENDS Filter container -->
	   
	  
	  </div>
	
	</div>
	
	<script src="__Public__/Js/bootstrap/bootstrap.min.js"></script>
</body>
</html>