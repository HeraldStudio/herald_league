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
		  
		  .center {
				width: auto;
				display: table;
				margin-left: auto;
				margin-right: auto;
				}
		.text-center {
				text-align: center;
				}
	    .spant3{
		          width:220px;
		}
		.top100{padding-top:100px}
	    @media (max-width: 979px){
		     #celeft{
			    display:none;
			 }
			 #ceright{
			    margin-left:40px;	
				padding-top:30px;
			 }
			 #more{
				margin-left:40px;
			}
		 }
	
	</style>
</head>

<body style="font-family:微软雅黑;font-size:16px; background-image:url(__Public__/Images/noise-all.png)">
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
						<li><a data-toggle="modal" href="#listModal">社团列表</a></li>
						<li><a href="#">社团空间</a></li>
						<li><a href="#">二手市场</a></li>
						<li><a href="#">失物招领</a></li>
					</ul>
					<ul class="nav pull-right">        
                         <li class="dropdown" >
							<a class="dropdown-toggle" data-toggle="dropdown" href="#menutest1"> Name <b class="caret"></b> </a>
                             <ul class="dropdown-menu">
								<li><a href="#">个人空间</a></li>
								<li><a href="#">二手市场</a></li>
								<li><a href="#">其他</a></li>
								<li class="divider"></li>
								<li><a href="#">登出</a></li>
							</ul>
						</li>
					</ul>
				</div><!-- /.nav-collapse -->
			</div>
		</div>
	</div>
	<div class="container-fluid " >
		<div class="span3 fixed-left" style="background-image:url(__Public__/Images/main-bg.png)" id="celeft">
			<ul class="nav nav-tabs nav-stacked " id="filter-buttons" style="margin-bottom:0px;">
				<li class="active"><a href="#">分类</a></li>
				<li><a href="#" data-filter="*" class="selected">show all</a></li>
				<li><a href="#" data-filter=".web">web</a></li>
				<li><a href="#" data-filter=".print">print</a></li>
				<li><a href="#"data-filter=".design">design</a></li>
				<li><a href="#" data-filter=".photo">photo</a></li>
				<li><a href="#" data-filter=".movie">movie</a></li>
			</ul>	
		</div>
	    <div class="offset3 top100" id="ceright" style="margin-right:40px;">
			<div id="filter-container" class="cf isotope" >
					<figure class="movie isotope-item" >
						<a href="#" class="thumb"><img src="__Public__/Images/t01.jpg" alt="alt"></a>
						<figcaption>
							<div class="heading">
								<a data-toggle="modal" href="#myModal">东南大学先声之夜夜夜夜</a>
								<a href="#" title="关注此活动">
									<img src="__Public__/Images/attention.png"/>
								</a>
							</div>
							<p>主办方：<a href="#">东南大学先声网</a>
								<a href="#" title="关注此社团"><img src="__Public__/Images/attention-small.png"/></a>
							</p><br>
							<p>时间：2013年06月30日 18:30</p><br>
							<p>地点：焦廷标馆</p>
							<br><img src="__Public__/Images/need-sign.png" class="pull-right"/>
						</figcaption>
					</figure>
					
					<figure class="movie isotope-item" >
						<a href="#" class="thumb"><img src="__Public__/Images/02.jpg" alt="alt"></a>
						<figcaption>
							<div class="heading">
								<a data-toggle="modal" href="#myModal">先声之夜</a>
								<a href="#" title="关注此活动"><img src="__Public__/Images/attention.png"/></a>
							</div>
							<p>主办方：<a href="#">东南大学先声网</a>
								<a href="#" title="关注此社团"><img src="__Public__/Images/attention-small.png"/></a>
							</p><br>
							<p>时间：2013年06月30日 18:30</p><br>
							<p>地点：焦廷标馆</p>
							<br><img src="__Public__/Images/need-sign.png" class="pull-right"/>
						</figcaption>
					</figure>
					
					
					<figure class="movie design isotope-item" >
						<a href="#" class="thumb"><img src="__Public__/Images/t03.jpg" alt="alt"></a>
						<figcaption>
							<div class="heading">
								<a href="#">东南大学先声之夜</a>
								<a href="#" title="关注此活动"><img src="__Public__/Images/attention.png"/></a>
							</div>
							<p>主办方：<a href="#">东南大学先声网</a>
								<a href="#" title="关注此社团"><img src="__Public__/Images/attention-small.png"/></a>
							</p><br>
							<p>时间：2013年06月30日 18:30</p><br>
							<p>地点：焦廷标馆</p>
							<br><img src="__Public__/Images/need-sign.png" class="pull-right"/>
						</figcaption>
					</figure>
					
					
					<figure class="photo isotope-item" >
						<a href="#" class="thumb"><img src="__Public__/Images/04.jpg" alt="alt"></a>
						<figcaption>
							<div class="heading">
								<a href="#">先声之夜</a>
								<a href="#" title="关注此活动"><img src="__Public__/Images/attention.png"/></a>
							</div>
							<p>主办方：<a href="#">东南大学先声网</a>
								<a href="#" title="关注此社团"><img src="__Public__/Images/attention-small.png"/></a>
							</p><br>
							<p>时间：2013年06月30日 18:30</p><br>
							<p>地点：焦廷标馆</p>
						</figcaption>
					</figure>
					
					
					<figure class="web photo isotope-item" >
						<a href="#" class="thumb"><img src="__Public__/Images/t05.jpg" alt="alt"></a>
						<figcaption>
							<div class="heading">
								<a href="#">先声之夜</a>
								<a href="#" title="关注此活动"><img src="__Public__/Images/attention.png"/></a>
							</div>
							<p>主办方：<a href="#">东南大学先声网</a>
								<a href="#" title="关注此社团"><img src="__Public__/Images/attention-small.png"/></a>
							</p><br>
							<p>时间：2013年06月30日 18:30</p><br>
							<p>地点：焦廷标馆</p>
							<br><img src="__Public__/Images/need-sign.png" class="pull-right"/>
						</figcaption>
					</figure>
					
					
					<figure class="web print isotope-item" >
						<a href="#" class="thumb"><img src="__Public__/Images/06.jpg" alt="alt"></a>
						<figcaption>
							<div class="heading">
								<a href="#">先声之夜</a>
								<a href="#" title="关注此活动"><img src="__Public__/Images/attention.png"/></a>
							</div>
							<p>主办方：<a href="#">东南大学先声网</a>
								<a href="#" title="关注此社团"><img src="__Public__/Images/attention-small.png"/></a>
							</p><br>
							<p>时间：2013年06月30日 18:30</p><br>
							<p>地点：焦廷标馆</p>
						</figcaption>
					</figure>
					
					
					<figure class="photo isotope-item" >
						<a href="#" class="thumb"><img src="__Public__/Images/t04.jpg" alt="alt"></a>
						<figcaption>
							<div class="heading">
								<a href="#">先声之夜</a>
								<a href="#" title="关注此活动"><img src="__Public__/Images/attention.png"/></a>
							</div>
							<p>主办方：<a href="#">东南大学先声网</a>
								<a href="#" title="关注此社团"><img src="__Public__/Images/attention-small.png"/></a>
							</p><br>
							<p>时间：2013年06月30日 18:30</p><br>
							<p>地点：焦廷标馆</p>
						</figcaption>
					</figure>
					
					
					<figure class="web movie isotope-item" >
						<a href="#" class="thumb"><img src="__Public__/Images/05.jpg" alt="alt"></a>
						<figcaption>
							<div class="heading">
								<a href="#">先声之夜夜夜夜</a>
								<a href="#" title="关注此活动"><img src="__Public__/Images/attention.png"/></a>
							</div>
							<p>主办方：<a href="#">东南大学先声网</a>
								<a href="#" title="关注此社团"><img src="__Public__/Images/attention-small.png"/></a>
							</p><br>
							<p>时间：2013年06月30日 18:30</p><br>
							<p>地点：焦廷标馆</p>
						</figcaption>
					</figure>
					
					
					<figure class="web movie isotope-item" >
						<a href="#" class="thumb"><img src="__Public__/Images/t01.jpg" alt="alt"></a>
						<figcaption>
							<div class="heading">
								<a href="#">先声之夜</a>
								<a href="#" title="关注此活动"><img src="__Public__/Images/attention.png"/></a>
							</div>
							<p>主办方：<a href="#">东南大学先声网</a>
								<a href="#" title="关注此社团"><img src="__Public__/Images/attention-small.png"/></a>
							</p><br>
							<p>时间：2013年06月30日 18:30</p><br>
							<p>地点：焦廷标馆</p>
						</figcaption>
					</figure>
					
			</div><!-- ENDS Filter container -->
	          
		</div>
		<div id="more" class="offset3" style="margin-right:60px;font-family:微软雅黑">
			<div class="btn btn-large btn-block">加载更多</div>
		</div>
	</div>
	

	<div id="myModal" class="modal hide fade ">
	<div class="modal-header">
		<a class="close" data-dismiss="modal">×</a>
		<h3>东南大学先声之夜夜夜夜
			<a href="#" title="关注此活动"><img id="modal-header-attention" src="__Public__/Images/attention.png"/></a>
			
		</h3>
	</div>
	<div class="modal-body">
	  <div class="row-fluid">
		<div class="span3">
			<div id="follower">
				<h5 class="pull-left">关注者</h5>
				<h5 class="pull-right">17人</h5>
			</div>
			<div id="follower-list">
				<div class="row-fluid">
					<div class="span4"><img src="__Public__/Images/head.jpg"/><br>我是谁谁</div>
					<div class="span4"><img src="__Public__/Images/head.jpg"/><br>我是谁</div>
					<div class="span4"><img src="__Public__/Images/head.jpg"/><br>我是谁</div>
				</div>
				<div class="row-fluid">
					<div class="span4"><img src="__Public__/Images/head.jpg"/><br>我是谁</div>
					<div class="span4"><img src="__Public__/Images/head.jpg"/><br>我是谁</div>
					<div class="span4"><img src="__Public__/Images/head.jpg"/><br>我是谁</div>
				</div>
				<div class="row-fluid">
					<div class="span4"><img src="__Public__/Images/head.jpg"/><br>我是谁</div>
					<div class="span4"><img src="__Public__/Images/head.jpg"/><br>我是谁</div>
					<div class="span4"><img src="__Public__/Images/head.jpg"/><br>我是谁</div>
				</div>
				<div class="row-fluid">
					<div class="span4"><img src="__Public__/Images/head.jpg"/><br>我是谁</div>
					<div class="span4"><img src="__Public__/Images/head.jpg"/><br>我是谁</div>
					<div class="span4"><img src="__Public__/Images/head.jpg"/><br>我是谁</div>
				</div>
				<div class="row-fluid">
					<div class="span4"><img src="__Public__/Images/head.jpg"/><br>我是谁</div>
					<div class="span4"><img src="__Public__/Images/head.jpg"/><br>我是谁</div>
					<div class="span4"><img src="__Public__/Images/head.jpg"/><br>我是谁</div>
				</div>
				<div class="row-fluid">
					<div class="span4"><img src="__Public__/Images/head.jpg"/><br>我是谁</div>
					<div class="span4"><img src="__Public__/Images/head.jpg"/><br>我是谁</div>
				</div>
			</div>
		</div>
		<div class="span9">
			<div class="act-info-header">
				<h4>活动信息</h4>
			</div>
			<div class="act-info-body">
				<div class="act-info"><i class="icon-user"></i>主办方：<a href="#">东南大学先声网</a>
					<!--<a href="#" title="关注此社团">
						<img src="__Public__/Images/attention-small.png"/>
					</a>-->
				</div>
				<div class="act-info"><i class="icon-time"></i>时间：2013年06月30日 18:30</div>
				<div class="act-info"><i class="icon-home"></i>地点：焦廷标馆</div>
				<div class="act-info"><i class="icon-envelope"></i>联系方式：行政楼520</div>
				<div class="act-info-para">
					<p> 棋在其中占据了独特的地位。棋作为体育项目之一，也是随着国运的变动而起起伏伏。陈毅元帅说过：“国运昌，棋运盛。”如今中国进步发展了，在大家的推动下，棋也会有蓬勃之象。
					</p>
					<p>我们先辈发明的围棋能够延衍千年而不至湮灭。黑白色的棋子在象征意义的穹宇之间寥寥落落地布下，演练的是风云际会，人生拼搏。许多棋手由是而领悟了世事的兴盛与衰没，欢乐与痛苦，失败与成就乃至死亡与新生。
					</p>
					<p>12年春季，北京大学生围棋联赛如火如荼地举行了，多家知名媒体新浪、搜狐报导围棋赛事，围棋第一大杂志《围棋天地》刊登比赛状况。但是现在，上海的大学生们面临着一个难题，很多同学喜欢围棋并对围棋有着浓厚的兴趣，却面临着无棋可下，无赛可参的窘境。
					</p>
					<p>为了搭建同学之间交流的平台，推广和宣传围棋文化，丰富同学课余生活让同学更深入的了解认识中国棋文化，弘扬中国民族文化艺术，培养学生特色技能，展现朝气蓬勃、积极进取、开拓创新的精神风貌，增进各校之间的交流与来往。故而举办这次“大学生围棋联赛”。
					</p>
				</div>
				<div class="act-info-pic">
					<img src="__Public__/Images/head.jpg"/>
				</div>
			</div>
		</div>
	  </div>
	</div>
	<div class="modal-footer">
		<a href="#" class="btn btn-primary" data-dismiss="modal">知道了</a>
	</div>
</div>
	<div id="listModal" class="modal hide fade ">
	<div class="modal-header">
		<a class="close" data-dismiss="modal">×</a>
		<h3>社团列表</h3>
	</div>
	<div class="modal-body">
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span12">
					<div class="accordion" id="accordion-list">
						<div class="accordion-group">
							<div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-list" href="#kxjs">
								<h4 style="color:#99CCFF;">科学技术类（23）<i class="icon-star pull-right" title="点我试试"></i></h4>
							</a>
							</div>
							<div id="kxjs" class="accordion-body in collapse">
								<div class="accordion-inner">
									<div class="row-fluid">
										<div class="span3">
											<a target="_blank" href="#"><img src="__Public__/Images/head-club.jpg">网络安全联盟</a>
											<a href="#" title="关注此社团"><img src="__Public__/Images/attention-small.png"/></a>
										</div>
										<div  class="span3">
											<a target="_blank" href="#"><img src="__Public__/Images/head-club.jpg"/>爱立信俱乐部</a>
											<a href="#" title="关注此社团"><img src="__Public__/Images/attention-small.png"/></a>
										</div>
										<div  class="span3">
											<a target="_blank" href="#"><img src="__Public__/Images/head-club.jpg"/>物流协会</a>
											<a href="#" title="关注此社团"><img src="__Public__/Images/attention-small.png"/></a>
										</div>
										<div  class="span3">
											<a target="_blank" href="#"><img src="__Public__/Images/head-club.jpg"/>日语俱乐部</a>
											<a href="#" title="关注此社团"><img src="__Public__/Images/attention-small.png"/></a>
										</div>
										
									</div>
									<div class="row-fluid">
										<div  class="span3">
											<a target="_blank" href="#"><img src="__Public__/Images/head-club.jpg"/>日语俱乐部</a>
											<a href="#" title="关注此社团"><img src="__Public__/Images/attention-small.png"/></a>
										</div>
										<div  class="span3">
											<a target="_blank" href="#"><img src="__Public__/Images/head-club.jpg"/>日语俱乐部</a>
											<a href="#" title="关注此社团"><img src="__Public__/Images/attention-small.png"/></a>
										</div>
										<div  class="span3">
											<a target="_blank" href="#"><img src="__Public__/Images/head-club.jpg"/>啊啊啊啊啊啊</a>
											<a href="#" title="关注此社团"><img src="__Public__/Images/attention-small.png"/></a>
										</div>
										<div  class="span3">
											<a target="_blank" href="#"><img src="__Public__/Images/head-club.jpg"/>天文协会</a>
											<a href="#" title="关注此社团"><img src="__Public__/Images/attention-small.png"/></a>
										</div>
									</div>
									<div class="row-fluid">
										<div  class="span3">
											<a target="_blank" href="#"><img src="__Public__/Images/head-club.jpg"/>天文协会</a>
											<a href="#" title="关注此社团"><img src="__Public__/Images/attention-small.png"/></a>
										</div>
										<div  class="span3">
											<a target="_blank" href="#"><img src="__Public__/Images/head-club.jpg"/>天文协会</a>
											<a href="#" title="关注此社团"><img src="__Public__/Images/attention-small.png"/></a>
										</div>
										<div  class="span3">
											<a target="_blank" href="#"><img src="__Public__/Images/head-club.jpg"/>天文协会</a>
											<a href="#" title="关注此社团"><img src="__Public__/Images/attention-small.png"/></a>
										</div>
										<div  class="span3">
											<a target="_blank" href="#"><img src="__Public__/Images/head-club.jpg"/>天文协会</a>
											<a href="#" title="关注此社团"><img src="__Public__/Images/attention-small.png"/></a>
										</div>
									</div>
									<div class="row-fluid">
										<div  class="span3">
											<a target="_blank" href="#"><img src="__Public__/Images/head-club.jpg"/>天文协会</a>
											<a href="#" title="关注此社团"><img src="__Public__/Images/attention-small.png"/></a>
										</div>
										<div  class="span3">
											<a target="_blank" href="#"><img src="__Public__/Images/head-club.jpg"/>天文协会</a>
											<a href="#" title="关注此社团"><img src="__Public__/Images/attention-small.png"/></a>
										</div>
										<div  class="span3">
											<a target="_blank" href="#"><img src="__Public__/Images/head-club.jpg"/>天文协会</a>
											<a href="#" title="关注此社团"><img src="__Public__/Images/attention-small.png"/></a>
										</div>
										<div  class="span3">
											<a target="_blank" href="#"><img src="__Public__/Images/head-club.jpg"/>天文协会</a>
											<a href="#" title="关注此社团"><img src="__Public__/Images/attention-small.png"/></a>
										</div>
									</div>
									<div class="row-fluid">
										<div  class="span3">
											<a target="_blank" href="#"><img src="__Public__/Images/head-club.jpg"/>天文协会</a>
											<a href="#" title="关注此社团"><img src="__Public__/Images/attention-small.png"/></a>
										</div>
										<div  class="span3">
											<a target="_blank" href="#"><img src="__Public__/Images/head-club.jpg"/>天文协会</a>
											<a href="#" title="关注此社团"><img src="__Public__/Images/attention-small.png"/></a>
										</div>
										<div  class="span3">
											<a target="_blank" href="#"><img src="__Public__/Images/head-club.jpg"/>天文协会</a>
											<a href="#" title="关注此社团"><img src="__Public__/Images/attention-small.png"/></a>
										</div>
										<div  class="span3">
											<a target="_blank" href="#"><img src="__Public__/Images/head-club.jpg"/>天文协会</a>
											<a href="#" title="关注此社团"><img src="__Public__/Images/attention-small.png"/></a>
										</div>
									</div>
									<div class="row-fluid">
										<div  class="span3">
											<a target="_blank" href="#"><img src="__Public__/Images/head-club.jpg"/>天文协会</a>
											<a href="#" title="关注此社团"><img src="__Public__/Images/attention-small.png"/></a>
										</div>
										<div  class="span3">
											<a target="_blank" href="#"><img src="__Public__/Images/head-club.jpg"/>天文协会</a>
											<a href="#" title="关注此社团"><img src="__Public__/Images/attention-small.png"/></a>
										</div>
										<div  class="span3">
											<a target="_blank" href="#"><img src="__Public__/Images/head-club.jpg"/>天文协会</a>
											<a href="#" title="关注此社团"><img src="__Public__/Images/attention-small.png"/></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="accordion-group">
							<div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-list" href="#tyjs">
								<h4 style="color:#FFCC00;">体育健身类（23）<i class="icon-star pull-right" title="点我试试"></i></h4>
							</a>
							</div>
							<div id="tyjs" class="accordion-body in collapse">
								<div class="accordion-inner">
									<div class="row-fluid">
										<div  class="span3">
											<a target="_blank" href="#"><img src="__Public__/Images/head-club.jpg"/>天文协会</a>
											<a href="#" title="关注此社团"><img src="__Public__/Images/attention-small.png"/></a>
										</div>
										<div  class="span3">
											<a target="_blank" href="#"><img src="__Public__/Images/head-club.jpg"/>天文协会</a>
											<a href="#" title="关注此社团"><img src="__Public__/Images/attention-small.png"/></a>
										</div>
										<div  class="span3">
											<a target="_blank" href="#"><img src="__Public__/Images/head-club.jpg"/>天文协会</a>
											<a href="#" title="关注此社团"><img src="__Public__/Images/attention-small.png"/></a>
										</div>
										<div  class="span3">
											<a target="_blank" href="#"><img src="__Public__/Images/head-club.jpg"/>天文协会</a>
											<a href="#" title="关注此社团"><img src="__Public__/Images/attention-small.png"/></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="accordion-group">
							<div class="accordion-heading">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-list" href="#whys">
									<h4 style="color:#99FF99;">文化艺术类（15）<i class="icon-star pull-right" title="点我试试"></i></h4>
								</a>
							</div>
							<div id="whys" class="accordion-body in collapse">
								<div class="accordion-inner">
									<div class="row-fluid">
										<div  class="span3">
											<a target="_blank" href="#"><img src="__Public__/Images/head-club.jpg"/>天文协会</a>
											<a href="#" title="关注此社团"><img src="__Public__/Images/attention-small.png"/></a>
										</div>
										<div  class="span3">
											<a target="_blank" href="#"><img src="__Public__/Images/head-club.jpg"/>天文协会</a>
											<a href="#" title="关注此社团"><img src="__Public__/Images/attention-small.png"/></a>
										</div>
										<div  class="span3">
											<a target="_blank" href="#"><img src="__Public__/Images/head-club.jpg"/>天文协会</a>
											<a href="#" title="关注此社团"><img src="__Public__/Images/attention-small.png"/></a>
										</div>
										<div  class="span3">
											<a target="_blank" href="#"><img src="__Public__/Images/head-club.jpg"/>天文协会</a>
											<a href="#" title="关注此社团"><img src="__Public__/Images/attention-small.png"/></a>
										</div>
									</div>
									<div class="row-fluid">
										<div  class="span3">
											<a target="_blank" href="#"><img src="__Public__/Images/head-club.jpg"/>天文协会</a>
											<a href="#" title="关注此社团"><img src="__Public__/Images/attention-small.png"/></a>
										</div>
										<div  class="span3">
											<a target="_blank" href="#"><img src="__Public__/Images/head-club.jpg"/>天文协会</a>
											<a href="#" title="关注此社团"><img src="__Public__/Images/attention-small.png"/></a>
										</div>
										<div  class="span3">
											<a target="_blank" href="#"><img src="__Public__/Images/head-club.jpg"/>天文协会</a>
											<a href="#" title="关注此社团"><img src="__Public__/Images/attention-small.png"/></a>
										</div>
										<div  class="span3">
											<a target="_blank" href="#"><img src="__Public__/Images/head-club.jpg"/>天文协会</a>
											<a href="#" title="关注此社团"><img src="__Public__/Images/attention-small.png"/></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="accordion-group">
							<div class="accordion-heading">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-list" href="#wxcm">
									<h4 style="color:#CC66FF">文学传媒类（16）<i class="icon-star pull-right" title="点我试试"></i></h4>						
								</a>
							</div>
							<div id="wxcm" class="accordion-body in collapse">
								<div class="accordion-inner">
									<div class="row-fluid">
										<div  class="span3">
											<a target="_blank" href="#"><img src="__Public__/Images/head-club.jpg"/>天文协会</a>
											<a href="#" title="关注此社团"><img src="__Public__/Images/attention-small.png"/></a>
										</div>
										<div  class="span3">
											<a target="_blank" href="#"><img src="__Public__/Images/head-club.jpg"/>天文协会</a>
											<a href="#" title="关注此社团"><img src="__Public__/Images/attention-small.png"/></a>
										</div>
										<div  class="span3">
											<a target="_blank" href="#"><img src="__Public__/Images/head-club.jpg"/>天文协会</a>
											<a href="#" title="关注此社团"><img src="__Public__/Images/attention-small.png"/></a>
										</div>
										<div  class="span3">
											<a target="_blank" href="#"><img src="__Public__/Images/head-club.jpg"/>天文协会</a>
											<a href="#" title="关注此社团"><img src="__Public__/Images/attention-small.png"/></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal-footer">
		<a href="#" class="btn btn-primary" data-dismiss="modal">关闭</a>
	</div>
</div>
	<hr style="border-top: 1px solid black;border-bottom: 1px solid #ffffff;">
   <h5 class="center"> CopyRight &copy 2013 Herald.seu.edu.cn</h5>
   <div style="height:10px"></div>  
</body>
</html>