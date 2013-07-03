<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>Index</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">	
	<meta charset='utf-8'>
	<script type="text/javascript" src="__Public__/Js/bootstrap/jquery.js"></script>
	<link href="__Public__/Css/activity.css" rel="stylesheet" media="screen">
	<link href="__Public__/Css/bootstrap/bootstrap.css" rel="stylesheet" media="screen"> 
	<link href="__Public__/Css/bootstrap/bootstrap-responsive.css" rel="stylesheet" media="screen"> 
	<script src="__Public__/Js/bootstrap/bootstrap.js"></script>	
	<script type="text/javascript" src="__Public__/Js/activitydetial.js"></script>

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
			top: 100px;
		}
	
	     .well{
		  background-color:rgb(103, 212, 240);
		 }
		 
         .navbar-inner {
			background-color: #fafafa;
			background-image: -moz-linear-gradient(top, #ffffff, #f2f2f2);
			background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#ffffff), to(#f2f2f2));
			background-image: -webkit-linear-gradient(top, #ffffff, #f2f2f2);
			background-image: -o-linear-gradient(top, #ffffff, #f2f2f2);
			background-image: linear-gradient(to bottom, #ffffff, #f2f2f2);
			background-repeat: repeat-x;
				border: 1px solid #d4d4d4;
					-webkit-border-radius: 4px;
					   -moz-border-radius: 4px;
							border-radius: 4px;
		  }
		  
		.text-center {
				text-align: center;
				}
	    .spant3{
		          width:220px;
		}
		@media (min-width:980px){
			#ceright{
				margin-right:80px;
				padding-top:100px;
			}
		}
	    @media (max-width: 979px){
		     #celeft{
			    display:none;
			 }
			 #ceright{
			    margin-left:40px;	
				padding-top:30px;
				margin-right:40px;
			 }
			 #more{
				margin-left:40px;
			}
		 }
	
	</style>
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
						<li class="active"><a href="#">平台首页</a></li>
						<li><a href="#">社团列表</a></li>
						<li><a href="#">社团空间</a></li>
						<li><a href="#">二手市场</a></li>
						<li><a href="#">失物招领</a></li>
					</ul>
					<ul class="nav pull-right">        
                         <li class="dropdown" >
							<a class="dropdown-toggle" data-toggle="dropdown" href="#menutest1"> Name 
							<p class="new-message-all">3</p>
							<b class="caret"></b> </a>
                             <ul class="dropdown-menu">
								<li><a href="#">个人空间<p class="new-message-single">1</p></a></li>
								<li><a href="#">二手市场<p class="new-message-single">2</p></a></li>
								<li><a href="#">其他<p class="new-message-single">33</p></a></li>
								<li class="divider"></li>
								<li><a href="#">登出</a></li>
							</ul>
						</li>
					</ul>
				</div><!-- /.nav-collapse -->
			</div>
		</div>
	</div>
	<div class="container-fluid" >
		<div class="span2 fixed-left" style="background-image:url(__Public__/Images/main-bg.png);margin-left:100px;" id="celeft">
			<ul class="nav nav-tabs nav-stacked " id="filter-buttons" style="margin-bottom:0px;">
				<li class="active"><a href="#">分类</a></li>
				<li><a href="#" data-filter="*" class="selected">显示全部</a></li>
				<?php if(is_array($activityclass)): $i = 0; $__LIST__ = $activityclass;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$va): $mod = ($i % 2 );++$i;?><li><a href="#" data-filter=".<?php echo ($va["id"]); ?>"><?php echo ($va["class"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>	
		</div>
	    <div class="offset3" id="ceright" style>
			<div id="filter-container" class="cf isotope" >
				<?php if(is_array($activityinfo)): $i = 0; $__LIST__ = $activityinfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vai): $mod = ($i % 2 );++$i;?><figure class="<?php echo ($vai["class"]); ?> isotope-item" >
				<?php if(!empty($vai["post_add"])): ?><a href="#" class="thumb">
					<img src="__Uploads__/ActivityPost/<?php echo ($vai["post_add"]); ?>" alt="alt" />
				</a><?php endif; ?>
					<figcaption>
						<div class="heading">
							<a data-toggle="modal" href="#myModal" class="activityname"><?php echo ($vai["name"]); ?></a>
							<a href="#" title="关注此活动"><img src="__Public__/Images/attention.png"/></a>
						</div>
						<p>主办方：<a href="#"><?php echo ($vai["league_name"]); ?></a>
							<a href="#" title="关注此社团"><img src="__Public__/Images/attention-small.png"/></a>
						</p><br>
						<p>时间：<?php echo ($vai["start_time"]); ?></p><br>
						<p>地点：<?php echo ($vai["place"]); ?></p>
						<br /><img src="__Public__/Images/need-sign.png" class="pull-right"/>
					</figcaption>
				</figure><?php endforeach; endif; else: echo "" ;endif; ?>
					
			</div><!-- ENDS Filter container -->
	          
		</div>
		<div id="more" class="offset3" style="margin-right:60px;font-family:微软雅黑">
			<div class="btn btn-large btn-block">加载更多</div>
		</div>
	</div>
	

	<div id="myModal" class="modal hide fade ">
	<div class="modal-header">
		<a class="close" data-dismiss="modal">×</a>
		<h3>
		<a href="#" title="关注此活动"><img id="modal-header-attention" src="__Public__/Images/attention.png"/></a>	
		</h3>
	</div>
	<div class="modal-body">
	<iframe src="__Public__/frame.html" style="width:100%;height:430px"></iframe>

	</div>
	<div class="modal-footer">
		<a href="#" class="btn btn-primary" data-dismiss="modal">知道了</a>
	</div>
</div>
<div style="height:100px">
	<hr style="border-top: 1px solid black;margin-bottom:36px;margin-left:40px;margin-right:40px">
	<h5 class="center" style="display:table;margin-left: auto;margin-right: auto;"> CopyRight &copy 2001-2013 Herald.seu.edu.cn</h5>
</div>  
</body>
</html>