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
							<li><a href="#">二手市场</a></li>
							<li><a href="#">失物招领</a></li>
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
								<input type="text" id="inputEmail" placeholder="用户名" name="leaguename">
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
<link rel="stylesheet" type="text/css" href="__Public__/Css/uploadspic.css?0517">
<script src="http://lib.sinaapp.com/js/jquery/1.8/jquery.min.js"></script>
<script>var P="<?php echo K_LINK;?>";</script>
<script type="text/javascript" src="__Public__/Js/makecover.js"></script>
<script type="text/javascript" src="__Public__/Js/swfupload/swfupload.js"></script>
<script type="text/javascript" src="__Public__/Js/swfupload/plugins/swfupload.queue.js"></script>
<script type="text/javascript" src="__Public__/Js/swfupload/fileprogress.js"></script>
<script type="text/javascript" src="__Public__/Js/swfupload/handlers.js"></script>
<link rel="stylesheet" type="text/css" href="__Public__/Css/addalbum.css">
<!--  jQuery lightBox plugin -->
<script type="text/javascript" src="__Public__/Js/jquery.lightbox-0.5.js"></script>
<link rel="stylesheet" type="text/css" href="__Public__/Css/jquery.lightbox-0.5.css" media="screen" />
<script type="text/javascript">
$(function() {
	$('.row-fluid a').lightBox();
});
</script>
<!--container-->
	<div class="container" id="container">
		<a href="/herald_league/index.php/League/Admin/managealbum/leagueid/<?php echo ($leagueid); ?>" class="btn"><<返回相册列表</a>
		<h2 style="text-align:center;"><?php echo ($albumname); ?></h2>
		<div class="row-fluid">
			<div class="span1" style="width:0;"></div>
			<?php if(is_array($picture)): $i = 0; $__LIST__ = $picture;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vp): $mod = ($i % 2 );++$i;?><div class="span2 figure">				
					<a href="__Uploads__/LeagueAlbum/s_<?php echo ($vp["address"]); ?>"><div class="photo"><img src="__Uploads__/LeagueAlbum/s_<?php echo ($vp["address"]); ?>"></div></a>
					<div class="figcaption">
						<button class="btn setcover" id="<?php echo ($vp["address"]); ?>" data-albumid="<?php echo ($albumid); ?>">设为封面</button><br/>
						<button class="btn disabled" id="<?php echo ($vp["address"]); ?>" data-albumid="<?php echo ($albumid); ?>">当前封面</button><br/>
					</div>
				</div><?php endforeach; endif; else: echo "" ;endif; ?>		
		</div>

		<!--delete by zr div class="col-left"-->
		<div class="bd-create-case" style="font-size:16px;">
		  <h2 style="text-align:center;">上传图片</h2>
		  <div class="bd-work-wrap">
			<form id="form1" action="<?php echo U('League/Admin/uploadsAlbum');?>" method="post" enctype="multipart/form-data">
				<div class="case-que-hd" style="font-size:18px;"> <span class="filename">图片文件名</span> <span class="filesize">大小</span> <span class="filedel">删除</span> </div>
				<!-- 上传队列-->
				<input type="hidden" id="albumid" value="<?php echo ($albumid); ?>"/>
				<div class="fieldset flash" id="fsUploadProgress"></div>
				<div class="case-que-foot" id="que-foot"> <span class="filename">共<i id="totalnum"></i>张图片 <a href="javascript:;" id="continue-add">继续添加案例图片</a></span> <span class="filedel">文件大小：<i id="totalsize"></i></span> </div>
				<div id="upload-btn"><span id="spanButtonPlaceHolder"></span></div>
			  </form>
			  <p id="upload-tips">提示：每次最多可以批量上传二十张照片，按着 “ctrl” 键可以一次选择多张照片</p>
			  <div id="upload-start" style="display:none">
				<button id="upload" class="btn">开始上传</button>
				&nbsp; <a href="#">取消上传</a> </div>
			</div>
		</div>
	  <!--delete by zr /div-->
	  <!-- container right
	  <div class="col-right"></div>delete by zr-->
	</div>

<script type="text/javascript">
	var swfu, WID = "13";
	window.onload = function() {
		var conf = {
			flash_url : P + "./__Public__/Js/swfupload/swfupload.swf",
			upload_url : P + "herald_league/index.php/League/Admin/addAlbumPicture.html?albumid=<?php echo ($albumid); ?>",
			file_size_limit : "2 MB",
			file_upload_limit:'20',
			file_types : "*.jpg;*.gif;*.png;*.jpeg",
			file_types_description : "Web Image Files",
			file_upload_limit : 100,
			file_queue_limit : 0,
			custom_settings : {
				progressTarget : "fsUploadProgress",
				cancelButtonId : "btnCancel"
			},
			debug : false,

			// Button settings
			button_image_url : P + ".__Public__/Js/swfupload/images/upload-btns.png",
			button_width : "97",
			button_height : "29",
			button_placeholder_id : "spanButtonPlaceHolder",
			button_action : SWFUpload.BUTTON_ACTION.SELECT_FILES,

			// The event handler functions are defined in handlers.js
			file_queued_handler : fileQueued,
			file_queue_error_handler : fileQueueError,
			file_dialog_complete_handler : fileDialogComplete,
			upload_start_handler : uploadStart,
			upload_progress_handler : uploadProgress,
			upload_error_handler : uploadError,
			upload_success_handler : uploadSuccess,
			upload_complete_handler : uploadComplete,
			queue_complete_handler : queueComplete	// Queue plugin event
		};

		swfu = new SWFUpload(conf);
	};
	
	//上传
	$('#upload').click(function(){
		swfu.startUpload();
	})
	
	//继续添加
	$('#continue-add').click(function(){
		$('#que-foot').hide();
		$('#upload-btn').css({'opacity':1,'height':30});
		$('#upload-btn object').css({'height':29});
		
	})
</script><!--foot-->

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
	<hr style="border-top: 1px solid black;margin:0px 40px 0px 40px;">
	<h5 class="center" style="text-align:center;padding-top:36px;margin:0;"> CopyRight &copy; 2001-2013 Herald.seu.edu.cn</h5>
</div>
<script>
$("body").iealert();
</script>
</body>
</html>