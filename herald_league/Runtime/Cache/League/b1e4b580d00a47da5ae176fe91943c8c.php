<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
	<head>
		<title>先声网-活动信息平台</title>
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<meta charset='utf-8'>
		<link rel="stylesheet" type="text/css" href="__Public__/Css/bootstrap/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="__Public__/Css/bootstrap/bootstrap-responsive.css" />
		<link rel="stylesheet" type="text/css" href="__Public__/Css/iealert/style.css" />
		<link rel="stylesheet" type="text/css" href="__Public__/Css/Css_all.css" />
		<script type="text/javascript" src="__Public__/Js/bootstrap/jquery.js"></script>
		<script type="text/javascript" src="__Public__/Js/isotope/jquery-1.7.1.min.js"></script>
		<script type="text/javascript" src="__Public__/Js/bootstrap/bootstrap.js"></script>
		<script type="text/javascript" src="__Public__/Js/isotope/jquery.isotope.min.js"></script>
		<script type="text/javascript" src="__Public__/Js/Js_all.js"></script>
		
		<!--[if lte IE 6]>
		<!-- bsie css 补丁文件 -->
		<!--<link rel="stylesheet" type="text/css" href="__Public__/Css/bootstrap3/bootstrap-ie6.css">-->
		<!-- bsie 额外的 css 补丁文件 -->
		<!--<link rel="stylesheet" type="text/css" href="__Public__/Css/bootstrap3/ie.css">-->
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="__Public__/Js/bootstrap3/html5shiv.js"></script>
		<script src="__Public__/Js/bootstrap3/respond.min.js"></script>
		<![endif]-->
		<!-- JS -->
		<!--[if IE 8]>
		<style type="text/css">
		#navbar{position: static;}
		.container{width:1170px;}
		.span2 {width: 170px;}
		.span10 {width: 970px;}
		#filter-buttons{width: 170px;}
		#ceright{padding-top:10px;}
		#celeft{padding-top:10px;}
		</style>
		<![endif]-->
		<!--[if lt IE 8]>
		<style type="text/css">
		#navbar{position: static;}
		.container{width:1170px;}
		.span2 {width: 170px;}
		.span10 {width: 970px;}
		#filter-buttons{width: 170px;}
		#ceright{padding-top:10px;}
		#celeft{padding-top:10px;}
		</style>
		<![endif]-->
	</head>
	<body>
		<div class="navbar navbar-fixed-top " id="navbar" >
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
								<a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);" id="login"> 登录
								<b class="caret"></b></a>
								<ul class="dropdown-menu" style="min-width:0px;">
									<li><a href="http://herald.seu.edu.cn/useraccount/login.html">个人登录</a></li>
									<li><a data-toggle="modal" href="#loginModal">社团登录</a></li>
								</ul>
							</li>
							<li>
								<a id="leagueregester" href="<?php echo U('League/Index/leagueregester');?>">社团注册</a>
							</li>
						</ul><?php endif; ?>
						<form class="navbar-form pull-right">
							<input type="text" class="search-query span3" placeholder="Search">
							<button type="submit" class="btn">Go</button>
						</form>
						<ul class="nav">
							<li class="<?php if($currentpage == 1): ?>active<?php endif; ?>"><a href="<?php echo U('/Activity/Index/index');?>">平台首页</a></li>
							<li class="<?php if($currentpage == 2): ?>active<?php endif; ?>"><a href="<?php echo U('/League/Index/leaguelist');?>">社团列表</a></li>
							<li><a href="javascript:alert('开发中...');">二手市场</a></li>
							<li><a href="http://herald.seu.edu.cn/laf/item/list/all/0/1/">失物招领</a></li>
						</ul>
						<?php if($loginusertype == 2): ?><ul class="nav pull-right">
							<li class="dropdown" >
								<a class="dropdown-toggle" data-toggle="dropdown" href="#menutest1"> <?php echo ($loginusername); ?>
								<b class="caret"></b> </a>
								<ul class="dropdown-menu">
									<li><a href="javascript:alert('开发中...');">个人空间</a></li>
									<li class="divider"></li>
									<li><a href="javascript:void(0)" class="logout">登出</a></li>
									<input type="hidden" id="loginuserid" value="<?php echo ($loginuserid); ?>"/>
								</ul>
							</li>
						</ul>
						<?php elseif($loginusertype == 1): ?>
						<ul class="nav pull-right">
							<li class="dropdown" >
								<a class="dropdown-toggle" data-toggle="dropdown" href="#menutest1"> <?php echo ($loginusername); ?>
								<b class="caret"></b> </a>
								<ul class="dropdown-menu">
									<li><a href="/herald_league/index.php/League/Admin/addactivity/leagueid/<?php echo ($loginuserid); ?>">发布活动</a></li>
									<li><a href="/herald_league/index.php/League/Admin/managealbum/leagueid/<?php echo ($loginuserid); ?>">相册管理</a></li>
									<li><a href="/herald_league/index.php/League/Index/index/leagueid/<?php echo ($loginuserid); ?>">社团空间</a></li>
									<li><a href="/herald_league/index.php/League/Admin/manageactivity/leagueid/<?php echo ($loginuserid); ?>">活动管理</a></li>
									<li><a href="/herald_league/index.php/League/Admin/changeinfo/leagueid/<?php echo ($loginuserid); ?>">修改社团信息</a></li>
									<li class="divider"></li>
									<li><a href="javascript:void(0)" class="logout">登出</a></li>
								</ul>
							</li>
						</ul><?php endif; ?>
						</div><!-- /.nav-collapse -->
					</div>
				</div>
			</div>
			<div id="loginModal" class="modal hide fade " style="width:560px;margin-left:-280px;">
				<div class="modal-header">
					<a class="close" data-dismiss="modal">×</a>
					<h3>社团登录</h3>
				</div>
				<form class="form-horizontal" style="margin-top:30px;margin-bottom:0;" action="" method="post">
					<div class="modal-body">
						<div class="control-group">
							<label class="control-label" for="inputEmail">用户名</label>
							<div class="controls">
								<input type="text" id="inputEmail" placeholder="用户名/邮箱" name="leaguename">
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="inputPassword">密码</label>
							<div class="controls">
								<input type="password" id="inputPassword" placeholder="密码" name="password">
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button id="leaguelogin" type="submit" class="btn btn-primary" data-dismiss="modal">登录</button>
						<a href="javascript:void(0);" class="btn" data-dismiss="modal" id="leaguelogincancle">取消</a>
					</div>
				</form>
			</div>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>跳转提示</title>
<style type="text/css">
*{ padding: 0; margin: 0; }
body{ background-image: url("/herald_league/Public/Images/noise-all.png"); font-family: '微软雅黑'; color: #333; font-size: 16px; }
.system-message{ padding: 24px 48px; }
.system-message h1{ font-size: 100px; font-weight: normal; line-height: 120px; margin-bottom: 12px; }
.system-message .jump{ padding-top: 10px}
.system-message .jump a{ color: #333;}
.system-message .success,.system-message .error{ line-height: 1.8em; font-size: 36px }
.system-message .detail{ font-size: 12px; line-height: 20px; margin-top: 12px; display:none}
</style>
</head>
<body>
<div class="system-message">
	<?php if(isset($message)): ?><div style="text-align:center;padding-top:50px;" >
			<img src="__Public__/Images/success.png" />
			<p class="success" style="color:#555">成功：<?php echo($message); ?></p>
		</div>
		<?php else: ?>
		<div style="text-align:center;padding-top:50px;" >
			<img src="__Public__/Images/error.png" />
			<p class="error" style="color:#555">错误：<?php echo($error); ?></p>
		</div><?php endif; ?>
	<p class="detail"></p>
	<p class="jump" style="text-align:center">
	页面自动 <a id="href" href="<?php echo($jumpUrl); ?>">跳转</a> 等待时间： <b id="wait"><?php echo($waitSecond); ?></b>
	</p>
</div>
<script type="text/javascript">
(function(){
var wait = document.getElementById('wait'),href = document.getElementById('href').href;
var interval = setInterval(function(){
	var time = --wait.innerHTML;
	if(time <= 0) {
		location.href = href;
		clearInterval(interval);
	};
}, 1000);
})();
</script>
</body>
</html>
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
					<li><a tabindex="-1" href="#">东大之声</a></li>
					<li><a tabindex="-1" href="#">东大文苑</a></li>
					<li><a tabindex="-1" href="#">先声知道</a></li>
				</ul>
			</div>
		</div>
		<div id="Msg3"><p class="text-center">东大信息</p></div>
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
<div style="height: 100px;margin-top:30px;">
	<hr style="border-top: 1px solid #999;margin:0px 40px 0px 40px;">
	<h5 class="center" style="text-align:center;padding-top:36px;margin:0;color:#666;"> CopyRight &copy; 2001-2013 Herald.seu.edu.cn</h5>
</div>
<script>
$("body").iealert();
</script>
</body>
</html>