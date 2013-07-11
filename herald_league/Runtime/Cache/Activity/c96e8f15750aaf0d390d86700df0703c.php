<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>先声网-活动信息平台</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">	
	<meta charset='utf-8'>
	<script type="text/javascript" src="__Public__/Js/bootstrap/jquery.js"></script>
	<link href="__Public__/Css/back-to-top/backtotop.css" rel="stylesheet" media="screen"> 
	<link href="__Public__/Css/activity.css" rel="stylesheet" media="screen">
	<link href="__Public__/Css/bootstrap/bootstrap.css" rel="stylesheet" media="screen"> 
	<link href="__Public__/Css/bootstrap/bootstrap-responsive.css" rel="stylesheet" media="screen"> 
	<script src="__Public__/Js/bootstrap/bootstrap.js"></script>	
	<script type="text/javascript" src="__Public__/Js/activitydetial.js"></script>
	<script src="__Public__/Js/back-to-top/backtotop.js"></script>
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
			#more{
				margin-right:80px;
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
				margin-right:40px;
			}
		 }
	
	</style>
	<script>
		$(document).ready(function(){
			$("#leaguelogin").click(function(){
				if($("#inputEmail").val() == ""){
					alert("用户名不能为空");
				}else if($("#inputPassword").val() == ""){
					alert("密码不能为空");
				}else{
					$.ajax({
						url:'<?php echo U('leagueLogin');?>',
						type:'post',
						dataType:'text',
						data:'leagueid='+$("#inputEmail").val()+'&password='+$("#inputPassword").val(),
						success:function(data){
							alert(data);
						}
					});
				}
			});
			$(".logout").click(function(){
				$.ajax({
					url:'<?php echo U('Public/Login/logout');?>',
					type:'post',
					dataType:'text',
					success:function(data){
						alert(data);
					}
				});
			});
		});
	</script>
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
					<?php if($loginuser): else: ?>
					<ul class="nav pull-right" style="text-decoration:none;">        
                         <li class="dropdown" >
							<a class="dropdown-toggle" data-toggle="dropdown" href="#"> 登录 
								<b class="caret"></b></a>
							<ul class="dropdown-menu" style="min-width:0px;">
								<li><a href="http://herald.seu.edu.cn/useraccount/">个人登录</a></li>
								<li><a data-toggle="modal" href="#loginModal">社团登录</a></li>
							</ul>
						</li>
					</ul><?php endif; ?>
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
					<?php if($loginusertype == 2): ?><ul class="nav pull-right">        
                         <li class="dropdown" >
							<a class="dropdown-toggle" data-toggle="dropdown" href="#menutest1"> <?php echo ($loginusername); ?> 
							<p class="new-message-all">3</p>
							<b class="caret"></b> </a>
                             <ul class="dropdown-menu">
								<li><a href="#">个人空间<p class="new-message-single">1</p></a></li>
								<li><a href="#">二手市场<p class="new-message-single">2</p></a></li>
								<li><a href="#">其他<p class="new-message-single">33</p></a></li>
								<li class="divider"></li>
								<li><a href="javascript:void(0)" class="logout">登出</a></li>
							</ul>
						</li>
					</ul>
					<?php elseif($loginusertype == 1): ?>
					<ul class="nav pull-right">        
                         <li class="dropdown" >
							<a class="dropdown-toggle" data-toggle="dropdown" href="#menutest1"> <?php echo ($loginusername); ?> 
							<b class="caret"></b> </a>
                             <ul class="dropdown-menu">
								<li><a href="#">发布活动</a></li>
								<li><a href="#">上传照片</a></li>
								<li><a href="#">修改社团信息</a></li>
								<li class="divider"></li>
								<li><a href="javascript:void(0)" class="logout">登出</a></li>
							</ul>
						</li>
					</ul><?php endif; ?>
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
			<div id="no-activity" style="text-align:center;display:none">
				<img src="__Public__/Images/no-activity.jpg"></img>
			</div>
			<div id="filter-container" class="cf isotope" >
				<?php if(is_array($activityinfo)): $i = 0; $__LIST__ = $activityinfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vai): $mod = ($i % 2 );++$i;?><figure class="<?php echo ($vai["class"]); ?> isotope-item" >
				<?php if(!empty($vai["post_add"])): ?><a href="#" class="thumb">
					<img src="__Uploads__/ActivityPost/<?php echo ($vai["post_add"]); ?>" alt="alt" />
				</a><?php endif; ?>
					<figcaption>
						<div class="heading">
							<a data-toggle="modal" href="#myModal" class="activityname" id="<?php echo ($vai["id"]); ?>"><?php echo ($vai["name"]); ?></a>
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
		<div id="more" class="offset3" style="font-family:微软雅黑">
			<div class="btn btn-large btn-block">加载更多</div>
		</div>
	</div>
	

<div id="myModal" class="modal hide fade ">
	<div class="modal-header">
		<a class="close" data-dismiss="modal">×</a>
		<h3>
		<span></span>
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

<div id="loginModal" class="modal hide fade " style="width:560px;margin-left:-280px;">
	<div class="modal-header">
		<a class="close" data-dismiss="modal">×</a>
		<h3>社团登录</h3>
	</div>
	<div class="modal-body">
		<form class="form-horizontal" style="margin-top:30px;" action="" method="post">
			<div class="control-group">
				<label class="control-label" for="inputEmail">用户名</label>
				<div class="controls">
					<input type="text" id="inputEmail" placeholder="用户名" name="leaguename">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputPassword">密码</label>
				<div class="controls">
					<input type="password" id="inputPassword" placeholder="密码" name="password">
				</div>
			</div>
		</form>
	</div>
	<div class="modal-footer">
		<button id="leaguelogin" type="submit" class="btn btn-primary" data-dismiss="modal">登录</button>
		<a href="javascript:void(0);" class="btn" data-dismiss="modal" id="leaguelogincancle">取消</a>
	</div>
</div>

	<div id="fixdiv">
		<p id="back-to-top" onmouseover="mover(1)" onmouseout="mout(1)"><a href="#top"><span></span></a></p>
		<div id="MsgGoUp"><p class="text-center">返回顶部</p></div>
		<div class="move" id="fix2">
			<div id="fix2pic"  onmouseover="mover(2)" onmouseout="mout(2)"></div>
			<div id="menu2">
				<div style="height:97px; width:175px;">
					<ul class="dropdown-menu" id="menub2" role="menu" aria-labelledby="dropdownMenu" style="display: block; position:static; margin-bottom: 5px; *width: 180px;">
						<li><a tabindex="-1" href="#">加入我们</a></li>
						<li><a tabindex="-1" href="#">先声大纪事</a></li>
						<li><a tabindex="-1" href="#">先声元老</a></li>
					</ul>
				</div>
			</div>
			<div id="Msg2"><p class="text-center">关于我们</p></div>
		</div>
		
		<div class="move" id="fix3">
			<div id="fix3pic"  onmouseover="mover(3)" onmouseout="mout(3)"></div>
			<div id="menu3">
				<div style="height:97px; width:175px;">
					<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu" style="display: block; position:static; margin-bottom: 5px; *width: 180px;">
						<li><a tabindex="-1" href="#">那个什么</a></li>
						<li><a tabindex="-1" href="#">那个什么</a></li>
						<li><a tabindex="-1" href="#">那个什么</a></li>
					</ul>
				</div>
			</div>
			<div id="Msg3"><p class="text-center">那个什么</p></div>
		</div>
		
		<div class="move" id="fix4">
			<div id="fix4pic"  onmouseover="mover(4)" onmouseout="mout(4)"></div>
			<div id="menu4">
				<div style="height:97px; width:175px;">
					<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu" style="display: block; position:static; margin-bottom: 5px; *width: 180px;">
						<li><a tabindex="-1" href="#">跑操查询</a></li>
						<li><a tabindex="-1" href="#">校车时刻表</a></li>
						<li><a tabindex="-1" href="#">图书馆</a></li>
					</ul>
				</div>
			</div>
			<div id="Msg4"><p class="text-center">校园助手</p></div>
		</div>
	</div>
				
	<div class="myboder" onmouseover="mboder()" id="bodert" style="width:175px; height:25px; position:fixed; right:7px; bottom:237px; display:none"></div>
	<div class="myboder" onmouseover="mboder()" id="boderb" style="width:175px; height:38px; position:fixed; right:7px; bottom:0px; display:none;"></div>
	<div class="myboder" onmouseover="mboder()" id="boderl" style="width:80px; height:262px; position:fixed; right:181px; bottom:0px; display:none;"></div>
	<div class="myboder" onmouseover="mboder()" id="boderr" style="width:7px; height:262px; position:fixed; right:0px; bottom:0px; display:none;"></div>
<div style="height:100px">
	<hr style="border-top: 1px solid black;margin-bottom:36px;margin-left:40px;margin-right:40px">
	<h5 class="center" style="display:table;margin-left: auto;margin-right: auto;"> CopyRight &copy 2001-2013 Herald.seu.edu.cn</h5>
</div>  
</body>
</html>