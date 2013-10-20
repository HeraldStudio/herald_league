<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
	<head>
		<title>先声网-活动信息平台</title>
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<meta charset='utf-8'>
		<link rel="stylesheet" type="text/css" href="__Public__/Css/back-to-top/backtotop.css" />
		<link rel="stylesheet" type="text/css" href="__Public__/Css/bootstrap/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="__Public__/Css/bootstrap/bootstrap-responsive.css" />
		<link rel="stylesheet" type="text/css" href="__Public__/Css/isotope/style.css" />
		<link rel="stylesheet" type="text/css" href="__Public__/Css/navbar.css" />
		<link rel="stylesheet" type="text/css" href="__Public__/Css/isotope/lessframework.css" />
		<link rel="stylesheet" type="text/css" href="__Public__/Css/iealert/style.css" />
		<script type="text/javascript" src="__Public__/Js/bootstrap/jquery.js"></script>
		<script type="text/javascript" src="__Public__/Js/isotope/jquery-1.7.1.min.js"></script>
		<script type="text/javascript" src="__Public__/Js/bootstrap/bootstrap.js"></script>
		<script type="text/javascript" src="__Public__/Js/activitydetial.js"></script>
		<script type="text/javascript" src="__Public__/Js/back-to-top/backtotop.js"></script>
		<script type="text/javascript" src="__Public__/Js/iealert.js"></script>
		<script type="text/javascript" src="__Public__/Js/isotope/jquery.isotope.min.js"></script>
		<script type="text/javascript" src="__Public__/Js/logout.js"></script>
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
								<a class="dropdown-toggle" data-toggle="dropdown" href="#" id="login"> 登录
								<b class="caret"></b></a>
								<ul class="dropdown-menu" style="min-width:0px;">
									<li><a href="http://herald.seu.edu.cn/useraccount/">个人登录</a></li>
									<li><a data-toggle="modal" href="#loginModal">社团登录</a></li>
								</ul>
							</li>
							<li>
								<a id="leagueregester" href="<?php echo U('League/Index/leagueRegester');?>">社团注册</a>
							</li>
						</ul><?php endif; ?>
						<form class="navbar-form pull-right">
							<input type="text" class="search-query span3" placeholder="Search">
							<button type="submit" class="btn">Go</button>
						</form>
						<ul class="nav">
							<li class="active"><a href="#">平台首页</a></li>
							<li><a href="<?php echo U('/League/Index/leaguelist');?>">社团列表</a></li>
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
<link href="__Public__/Css/room.css" rel="stylesheet" media="screen">
<link href="__Public__/Css/activity.css" rel="stylesheet" media="screen">
<link href="__Public__/Css/leaguezone.css" rel="stylesheet" media="screen">

<script src="__Public__/Js/back-to-top/jquery1.3.2.js"></script>
<script src="__Public__/Js/back-to-top/jquery.scrollTo.js"></script>
<script src="__Public__/Js/back-to-top/script.js"></script>
<script src="__Public__/Js/room.js"></script>
<script src="__Public__/Js/page.js"></script>

<div class="container-fluid" id="main2">
	<div class="row-fluid">
		<div class="span12">
			<div class="row-fluid">
				<div class="span1"></div>
				<div class="span2 fixed-left">
					<div class="page-header" style=" margin: 10px 0 20px;">
						<h4>
						浏览导航
						</h4>
					</div>
					<nav>
						<ul class="nav nav-tabs nav-stacked " id="filter-buttons">
							<li class="active"><a href="#"><?php echo ($leaguename); ?></a></li>
							<li><a href="#">社团信息</a></li>
							<li><a href="#huodong">活动信息</a></li>
							<li><a href="#xiangce">相册</a></li>
							<li><a href="#liuyanban">留言板</a></li>
						</ul>
					</nav>
					<div class="page-header">
						<h4>
						社团联系方式
						</h4>
					</div>
					<table class="table table-hover" contenteditable="false">
						<tbody>
							<tr>
								<td>邮箱</td>
								<td><?php echo ($email); ?></td>
							</tr>
							<tr>
								<td>电话</td>
								<td><?php echo ($phone); ?></td>
							</tr>
							<tr>
								<td>地点</td>
								<td><?php echo ($place); ?></td>
							</tr>
						</tbody>
					</table>
				</div>
				<!--zhong-->
				<div class="span6 "  id="cezhong" >
					<div class="row-fluid">
						<div class="span12">

							<div class="row-fluid">
								<div class="span12">
									<div class="page-header" style=" margin: -20px 0 20px;">
										<h2>
										<?php echo ($leaguename); ?>
										</h2>
									</div>
								</div>
							</div>

							<div class="row-fluid">
								<div class="span12">
									<div class="hero-unit">
										<p>
										<?php echo (htmlspecialchars_decode($introduce)); ?>
										</p>
										<button class="btn btn-primary  btn-small pull-right" data-toggle="modal" href="#myModal_member">成员信息</button>
									</div>
								</div>
							</div>

							<div class="row-fluid" >
								<div class="span12">
									<div class="w-box" id="w_sort07" style="">
										<div class="page-header span12">
											<h4 id="huodong" class="span3">
											活动信息
											</h4>
											<div class="pagination pull-right">
												<ul>
													<input type="hidden" value="0" id="currentpage">
													<input type="hidden" value="<?php echo ($leagueactivitynum); ?>" id="maxpage">
													<li><a href="javascript:void(0);" id = "preactivity">&lt;&lt;</a></li>
													<li><a href="javascript:void(0);" id = "nextactivity">&gt;&gt;</a></li>
												</ul>
											</div>
										</div>
										<div class="w-box-content">
											<div class="tabbable clearfix">
												<ul class="thumbnails  activity-page">
													<?php if(is_array($activityinfo)): $i = 0; $__LIST__ = $activityinfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vai): $mod = ($i % 2 );++$i;?><li class="span4" style="margin-left:8px;">
														<div class="thumbnail">
															<?php if(!empty($vai["post_add"])): ?><a href="javascript:void(0);" class="thumb">
															<img src="__Uploads__/ActivityPost/m_<?php echo ($vai["post_add"]); ?>" alt="alt" />
															</a><?php endif; ?>
															<div class="heading center_lz" style="font-size:20px;margin-top:20px;">
																<a data-toggle="modal" href="#myModal" class="activityname" id="<?php echo ($vai["id"]); ?>"><?php echo ($vai["name"]); ?></a>
																<a href="#" title="关注此活动"><img src="__Public__/Images/attention.png"/></a>
															</div>
															<div class="word_wrap">
																<br/><p>主办方：<a href="#"><?php echo ($vai["league_name"]); ?></a>
																<a href="#" title="关注此社团"><img src="__Public__/Images/attention-small.png"/></a>
																</p>
																<p>时间：<?php echo ($vai["start_time"]); ?></p>
																<p>地点：<?php echo ($vai["place"]); ?></p><br/>
																<a class="btn btn-primary pull-right" data-toggle="modal" href="#myModal">浏览</a>
															</div>
														</div>
													</li><?php endforeach; endif; else: echo "" ;endif; ?>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="row-fluid">
								<div class="span12">
									<div class="page-header span12">
										<h4 id="xiangce" class="span3">
										社团相册
										</h4>
									</div>
									<div class="row-fluid">
										<?php if(is_array($albuminfo)): $i = 0; $__LIST__ = $albuminfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><div class="span4 photodiv">
											<a href="/herald_league/index.php/League/Index/album/leagueid/<?php echo ($leagueid); ?>">
											<img alt="140x140" src="__Uploads__/LeagueAlbum/<?php echo ($val["cover_address"]); ?>" class="img-rounded" />
											</a>
										</div><?php endforeach; endif; else: echo "" ;endif; ?>
									</div>
								</div>
							</div>
							<div class="row-fluid">
								<div class="span12">
									<div class="page-header">
										<h4 id="liuyanban">
										留言板
										</h4>
									</div>
									<form class="autoTxtCount thumbnail row-fluid span11" action="<?php echo U('comment');?>" method="post">
										<div>
											<textarea class="text span12" placeholder="说点什么..." cols="50" id="text1" rows="2" name="content"></textarea>
										</div>
										<input type="hidden" name="leagueid" value="<?php echo ($leagueid); ?>" />
										<input type="hidden" name="comment_id" value="" id="comment_id"/>
										<div >
											<button class="btn btn-danger btn-small pull-right" type="reset">清空</button>
											<button class="btn btn-success btn-small pull-right"  style="margin-right:10px" id = "submitanswer" type="submit" name="">回复</button>
											<span class="tips"></span>
										</div>
									</form>
									<?php if(is_array($commentinfo)): $i = 0; $__LIST__ = $commentinfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vc): $mod = ($i % 2 );++$i;?><div class="thumbnail reply row-fluid span11">
										<div class="span12">
											<div class="span3 reply_title" id="username_1">
												<?php echo ($vc["sender_name"]); ?>
											</div>
											<div class="span9 reply_title">
												发布时间 <?php echo ($vc["comment_time"]); ?>
											</div>
											<div class="pinglun">
												<?php echo ($vc["content"]); ?>
												<button id="<?php echo ($vc["id"]); ?>" class="btn btn-success btn-small pull-right btn_replay"  type="submit" name="">回复</button>
											</div>
											<?php if(is_array($vc["responseinfo"])): $i = 0; $__LIST__ = $vc["responseinfo"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vr): $mod = ($i % 2 );++$i;?><div class="pinglun_2 thumbnail span10 reply_r" >
												<div class="span3 reply_title" id="reply_r_p_p"><?php echo ($vr["sender_name"]); ?></div>
												<div class="span3 reply_title"><?php echo ($vr["comment_time"]); ?></div>
												<div class="span11">
													回复<?php echo ($vr["receiver_name"]); ?>：<?php echo ($vr["content"]); ?>
													<button id="<?php echo ($vr["id"]); ?>" class="reply_btn_r btn btn-success btn-small pull-right hide">回复</button>
												</div>
											</div>
											<?php if(is_array($vr["responseinfo"])): $i = 0; $__LIST__ = $vr["responseinfo"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vrr): $mod = ($i % 2 );++$i;?><div class="pinglun_2 thumbnail span10 reply_r">
												<div class="span3 reply_title" id="reply_r_p_p"><?php echo ($vrr["sender_name"]); ?></div>
												<div class="span3 reply_title"><?php echo ($vrr["comment_time"]); ?></div>
												<div class="span11">
													回复<?php echo ($vrr["receiver_name"]); ?>：<?php echo ($vrr["content"]); ?>
													<button id="<?php echo ($vrr["id"]); ?>" class="reply_btn_r btn btn-success btn-small pull-right hide">回复</button>
												</div>
											</div><?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
										</div>
									</div><?php endforeach; endif; else: echo "" ;endif; ?>
									
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="span2 ">
					<div class="page-header" >
						<h4>
						关注者
						</h4>
					</div>
					<div id="flist">
						<?php if(is_array($leagueattentioninfo)): $i = 0; $__LIST__ = $leagueattentioninfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vle): $mod = ($i % 3 );++$i; if(($key) != "0"): if(($mod) == "2"): ?><div class="row-fluid"><?php endif; endif; ?>
							<div class="span4"><img src="__Uploads__/UserAvatar/<?php echo ($vle["avatar_address"]); ?>"/><br /><?php echo ($vle["user_true_name"]); ?></div>
							<?php if(($key) != "0"): if(($mod) == "2"): ?></div><?php endif; endif; endforeach; endif; else: echo "" ;endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	$(function(){
		$('#filter-buttons a').click(function(){
		var $optionSet = $(this).parents('#filter-buttons');
	    $optionSet.find('.selected').removeClass('selected');
	    $(this).addClass('selected');
		});
   });
  </script>
  <script>
    $(document).ready(function(){
  $(".reply_btn_r").click(function(){
                $("#text1")[0].focus();
                $("#text1").val("回复"+$.trim($("#reply_r_p_p").html())+" : "); 
                $("#comment_id").val($(this).attr('id'));
      });
});

  </script>
  <script>
    $(document).ready(function(){
  $(".btn_replay").click(function(){
                $("#text1")[0].focus();
                $("#text1").val("回复"+$.trim($("#username_1").html())+" : "); 
                $("#comment_id").val($(this).attr('id'));
      });
});

  </script>
  <script>
    $(document).ready(function(){
  $(".reply_r").mouseover(function(){
                $(this).find("button").show();
      });
   $(".reply_r").mouseout(function(){
                $(this).find("button").hide();
      });
});
  </script>
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