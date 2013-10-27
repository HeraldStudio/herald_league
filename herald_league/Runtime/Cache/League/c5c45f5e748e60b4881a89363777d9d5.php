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
<script type="text/javascript">
window.UEDITOR_HOME_URL = "__Public__/Ueditor/";    //UEDITOR_HOME_URL、config、all这三个顺序不能改变(绝对路径)
</script>
<script type="text/javascript" src="__Public__/Ueditor/ueditor.config.js"></script>
<script type="text/javascript" src="__Public__/Ueditor/ueditor.all.min.js"></script>
<script type="text/javascript" src="__Public__/Js/changeinfo.js"></script>

<div class="container-fluid" style="margin-top:90px;">
<div class="row-fluid">
	<div class="span1"></div>		
	<div class="span10">
		<h3 style="border-bottom-width:1px; border-bottom-style:solid; border-bottom-color:#D3D3D3; padding-bottom:5px;">修改社团信息</h3>
			<div class="row-fluid">		   
				<div class="span12">
					<form class="form-horizontal"  style="border-bottom-width:1px; border-bottom-style:dashed; border-bottom-color:#D3D3D3;" action="" method="post">
						<fieldset>
							<div class="control-group formSep infor" style="margin-top:10px;">
								<label for="groupName" class="control-label title">社团名称：</label>
								<div class="controls">
									<input type="text" id="groupName" class="input-xlarge title" name="leaguename" value="<?php echo ($leaguename); ?>"/>										
								</div>
							</div>
							
							<div class="control-group formSep infor" >
								<label for="groupName" class="control-label title">社团类别：</label>
								<div class="controls">
									<select class="span1"  id="unclass" style="width:150px;" name="leagueclass">
									<?php if(is_array($leagueclasslist)): $i = 0; $__LIST__ = $leagueclasslist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vcl): $mod = ($i % 2 );++$i;?><option><?php echo ($vcl["class_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
									</select>
								</div>
							</div>
							
							<div class="control-group formSep infor" >
								<label for="fileinput" class="control-label title">社团头像：</label>
								<div class="controls">
									<div data-fileupload="image" class="fileupload fileupload-new">
										<div style="width: 150px; height: 150px;" class="fileupload-new thumbnail">
											<img src="__Uploads__/LeagueAvatar/<?php echo ($avatr); ?>" alt="">
										</div>
									</div>			
									<a class="btn" style="margin-top:15px" href = "/herald_league/index.php/League/Admin/updateavatar/leagueid/<?php echo ($leagueid); ?>">修改社团头像</a>
								</div>
							</div>
							
							<div class="control-group formSep infor" >
								<label for="groupIntro" class="control-label title">社团介绍：</label>
								<div class="controls">
									<script type="text/plain" id="introduce" name="introduce"></script>
								</div>
							</div>
							
							<div class="control-group formSep infor" >
								<label for="groupMum" class="control-label title">社团成员：</label>
								<div class="controls">
									<script type="text/plain" id="member" name="member"></script>
									<script type="text/javascript">
									$(function(){
									    var introduce, member;
									    var options = {
									        initialFrameWidth:700,        //初化宽度
									        initialFrameHeight:300,        //初化高度
									        focus:false,                        //初始化时，是否让编辑器获得焦点true或false
									        maximumWords:1000,        //允许的最大字符数
									    };
									    introduce = new UE.ui.Editor(options);
									    member = new UE.ui.Editor(options);
									    introduce.render("introduce");
									    introduce.ready(function(){
									        introduce.setContent('<?php echo (htmlspecialchars_decode($leagueintro)); ?>');     //加载数据库Action.class.PHP传过来的值
									    });
									    member.render("member");
									    member.ready(function(){
									        member.setContent('<?php echo (htmlspecialchars_decode($member)); ?>');     //加载数据库Action.class.PHP传过来的值
									    });
									 });    
									 </script>
								</div>
							</div>
							<div class="control-group formSep infor" >
								<label class="control-label title">联系方式：</label>
								<div class="controls">
									电话：<input name="phone" type="text" id="groupTel" style="width:100px;" value="<?php echo ($phone); ?>">	
									<input name="leagueid" type="hidden" value="<?php echo ($leagueid); ?>">
								</div>
								<div class="controls" style="margin-top:10px;">					
									邮箱：<input name="email" type="text" id="groupMail" style="width:150px;" value="<?php echo ($email); ?>">											
								</div>
								
								<div class="controls" style="margin-top:10px;">
									地点：<input name="place" type="text" id="groupPlace" style="width:310px;" value="<?php echo ($place); ?>">
								</div>
							</div>
							
							<div class="control-group">
								<div class="controls">
									<button class="btn btn-success" type="submit" onclick="mycheck()">提交信息</button>
									<button class="btn btn btn-danger" type="button" onclick="cleanAll()" style="flaot:left;" >重置</button>
								</div>
							</div>
						</fieldset>
					</form>
					
				</div>
				<div class="span1"></div>
			</div>
		
	</div>

	<div class="span3"></div>
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