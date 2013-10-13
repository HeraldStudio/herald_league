<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords"  content="先声网" />
	<meta name="description" content="活动信息平台" />
    <title>先声网-活动信息平台</title>
    
    <!-- Bootstrap core CSS -->
    <link href="__Public__/Css/bootstrap3/bootstrap.css" rel="stylesheet">
	<link href="__Public__/Css/bootstrap3/bootstrap2.css" rel="stylesheet">
	<link href="__Public__/Css/bootstrap3/style.css" rel="stylesheet">
	<link href="__Public__/Css/back-to-top/backtotop.css" rel="stylesheet" media="screen"> <!--backtotop-->
	<script src="__Public__/Js/bootstrap3/jquery.js"></script>
	<script src="__Public__/Js/bootstrap3/tt2.js"></script>
	<script src="__Public__/Js/bootstrap3/jquery.pin.js"></script>
	<script src="__Public__/Js/kuxuan/jquery-1.7.1.min.js"></script>
	<script src="__Public__/Js/back-to-top/backtotop.js"></script>
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
	<script type="text/javascript">
var editor_width = '100%';
var editor_height = '200px';
var btn_url = "/Public/Images";
var image_url = "/answer/upload_image";
var u_id = 1;
var icon = "/Uploads/Images/User/Icon/default.jpg";
var u_name = "官方帐号"
var IMAGE = "/Public/Images";
var APP = "";
var URL = "/event";
var PUBLIC = "/Public";
var ROOT = "";
$(function(){
	if($("#active").text() == "event"){
		$("#event_active").attr("class","active");
	}
	else if($("#active").text() == "question"){
		$("#question_active").attr("class","active");
	}
	else if($("#active").text() == "freshman"){
		$("#freshman_active").attr("class","active");
	}
	else if($("#active").text() == "market"){
		$("#market_active").attr("class","active");
	}
});
</script>
<script>

 function jsonajax(classid){
   var lastid = $(".activityname:last").attr('id');
    if(!lastid){
     	lastid = $("#acn").val();
     }  
     $.ajax({
         url:'<?php echo U('getMoreActivity');?>',
         type:'post',
         data:'lastactivityid='+lastid+'&claid='+classid,
         dataType:'json',
         success:function(json){
            if(json){
			    var n;
                var l=json.length;
                for(var i=0; i<l; i++){
                     n = json[i]; 
					if(n.post_add)
						$item = $('<figure class="'+n.class +' span9"><div class="span3"><a href=\"#\" class=\"thumb\"><img src="__Uploads__/ActivityPost/'+n.post_add+'" alt=\"alt\" /></a></div><figcaption class="span5"><div class="heading"><a data-toggle="modal" href="#myModal" class="activityname" id="'+n.id+'">'+n.name+'</a><a href="#" title="关注此活动"><img src="__Public__/Images/attention.png"/></a></div><p>主办方：<a href="#">'+n.league_name+'</a><a href=\"#\" title=\"关注此社团\"><img src=\"__Public__/Images/attention-small.png\"/></a></p><br><p>时间：'+n.start_time+'</p><br><p>地点：'+n.place+'</p><br /><img src=\"__Public__/Images/need-sign.png\" class="baoming"/></figcaption></figure>');
					else
						$item = $('<figure class="'+n.class +' span9"><figcaption><div class="heading"><a data-toggle="modal" href="#myModal" class="activityname" id="'+n.id+'">'+n.name+'</a><a href="#" title="关注此活动"><img src="__Public__/Images/attention.png"/></a></div><p>主办方：<a href="#">'+n.league_name+'</a><a href=\"#\" title=\"关注此社团\"><img src=\"__Public__/Images/attention-small.png\"/></a></p><br><p>时间：'+n.start_time+'</p><br><p>地点：'+n.place+'</p><br /><img src=\"__Public__/Images/need-sign.png\" class="baoming"/></figcaption></figure>');
					$('#filter-container').append($item);
			     }
			} 
			else{  
					alert("没有更多了..."); 
					$(".getmore").html("没有更多了...");
				}
         }
     });
 } 

$(document).ready(function(){ 
  
  alert("123");
  jsonajax(0);
 
  $("#0").click(function(){
     $(".getmore").attr("id",0);
     $("#filter-container").html("");
	 $("#no-activity").css("display","none");
     jsonajax(0);
	 $(".getmore").html("加载更多");
  });
  
  $(".getmore").click(function(){ 	      
		jsonajax($(this).attr("id"));	
	});
  
  $('#filter-buttons a').click(function(){
		var $optionSet = $(this).parents('#filter-buttons');
	    $optionSet.find('.selected').removeClass('selected');
	    $(this).addClass('selected');
	});
  
  $('.activityclass a').click(function(){
     $("#filter-container").html("");
  });
  
  $('.activityclass a').click(function(){
    
	//$("#filter-container").height("0");
    var classid=$(this).attr("id");
	$(".getmore").attr("id",classid);
	$(".getmore").html("加载更多");
    $.ajax({
      url:'<?php echo U('getClassActivity');?>',
      type:'post',
      data:'classid='+classid,
      dataType:'json',
      success:function(json){    
         if(json){
				var n;
				var l=json.length;
				for(i=0; i < l; i++ ){
					n=json[i];
					if (n.post_add)
						$items = $('<figure class="'+n.class +' span9"><a href=\"#\" class=\"thumb\"><img src="__Uploads__/ActivityPost/'+n.post_add+'" alt=\"alt\" /></a><figcaption><div class="heading"><a data-toggle="modal" href="#myModal" class="activityname" id="'+n.id+'">'+n.name+'</a><a href="#" title="关注此活动"><img src="__Public__/Images/attention.png"/></a></div><p>主办方：<a href="#">'+n.league_name+'</a><a href=\"#\" title=\"关注此社团\"><img src=\"__Public__/Images/attention-small.png\"/></a></p><br><p>时间：'+n.start_time+'</p><br><p>地点：'+n.place+'</p><br /><img src=\"__Public__/Images/need-sign.png\" class="baoming"/></figcaption></figure>');
					else
				        $items = $('<figure class="'+n.class +' span9"><figcaption><div class="heading"><a data-toggle="modal" href="#myModal" class="activityname" id="'+n.id+'">'+n.name+'</a><a href="#" title="关注此活动"><img src="__Public__/Images/attention.png"/></a></div><p>主办方：<a href="#">'+n.league_name+'</a><a href=\"#\" title=\"关注此社团\"><img src=\"__Public__/Images/attention-small.png\"/></a></p><br><p>时间：'+n.start_time+'</p><br><p>地点：'+n.place+'</p><br /><img src=\"__Public__/Images/need-sign.png\" class="baoming"/></figcaption></figure>');
				$("#filter-container").append($items);
				}			
			}
		else
			$("#no-activity").css("display","block"); 
		} 
     });
	        $("#no-activity").css("display","none");
			$(".getmore").click();
	});

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
					//document.write(data);
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

$(window).load(function(){
	//setTimeout(isotope(),2000);
	// $("#filter-container").isotope('destroy');
 });

</script>
<style>
		.fixed-left{
			position: fixed;
			top: 100px;
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
  </head>

 <body style="font-family:微软雅黑;">
 <input type="hidden" value="<?php echo ($activitynum); ?>" id="acn">
 <div class="container">
	<div class="navbar navbar-fixed-top header well">
		<div class="row" >
		  <div class="navbar-inner">
			<div class="col-lg-12" >
			  <div id="active" style="display:none">event</div>
			  <div class="navbar-header">
				  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
                 <a class="brand" href="#"><strong>活动平台</strong></a>
              </div>
             <div class="navbar-collapse collapse">
					<?php if($loginuser): else: ?>
					<ul class="nav pull-right" style="text-decoration:none;">        
                         <li class="dropdown" >
							<a class="dropdown-toggle" data-toggle="dropdown" href="#" id="login"> 登录 
								<b class="caret"></b></a>
							<ul class="dropdown-menu" style="min-width:0px;">
								<li><a href="http://herald.seu.edu.cn/useraccount/">个人登录</a></li>
								<li><a href="#" data-toggle="modal" data-target="#LoginModel">社团登录</a></li>

							</ul>
						</li>
					</ul><?php endif; ?>
					<form class="navbar-form pull-right">
						<input type="text" class="search-query span3" placeholder="Search">
						<button type="submit" class="btn">Go</button>
					</form>
					<ul class="nav">
						<li class="active"><a href="#">平台首页</a></li>
						<li><a href="<?php echo U('/League/Index/leaguelist');?>">社团列表</a></li>
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
								<li><a href="./index.php/League/Admin/addactivity/leagueid/<?php echo ($loginuserid); ?>">发布活动</a></li>
								<li><a href="#">上传照片</a></li>
								<li><a href="./index.php/League/Admin/changeinfo/leagueid/<?php echo ($loginuserid); ?>">修改社团信息</a></li>
								<li class="divider"></li>
								<li><a href="javascript:void(0)" class="logout">登出</a></li>
							</ul>
						</li>
					</ul><?php endif; ?>
				</div><!-- /.nav-collapse -->
             </div>
	    </div>
        </div>
	</div>
<div class="modal fade" id="LoginModel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content" style="width:400px">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="myModalLabel">社团登录</h4>
					</div>
					<div class="modal-body">
						<form class="form-horizontal" role="form"  action="" method="post">
							<div class="row">
								<div class="col-sm-1"></div>
								<div class="col-sm-7">
								<input type="text" id="inputEmail" class="form-control input-sm" placeholder="用户名" name="leaguename">
								</div>
								<div class="col-sm-4 font-sm" id="account_tip" style="color:red;"></div>
							</div>
							<div class="row" style="margin-top:20px">
								<div class="col-sm-1"></div>
								<div class="col-sm-7">
								<input type="password" id="inputPassword" class="form-control input-sm" placeholder="密码" name="password">
								</div>
								<div class="col-sm-4 font-sm" id="password_tip" style="color:red;"></div>
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button id="leaguelogin" type="submit" class="btn btn-primary" data-dismiss="modal">登录</button>
						<a href="javascript:void(0);" class="btn" data-dismiss="modal" id="leaguelogincancle">取消</a>
					</div> 
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->

<!-- Main component for a primary marketing message or call to action
-->
<div class="row event">
    <div class="col-lg-12">
        <div class="row " style="margin-top:20px" id="content">
            <div class="col-lg-2" style="margin-top:20px">
                        <div style="background-image:url(__Public__/Images/main-bg.png);width:170px;top:0px;positon:fixed" >
						<ul class="nav nav-tabs nav-stacked " id="filter-buttons" style="margin-bottom:0px;">
							<li class="active"><a id="fl">分类</a></li>
							<li><a href="#" data-filter="*" class="selected" id="0" >显示全部</a></li>
							<?php if(is_array($activityclass)): $i = 0; $__LIST__ = $activityclass;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$va): $mod = ($i % 2 );++$i;?><li class="activityclass" id="activity_class"><a href="#" id="<?php echo ($va["id"]); ?>"><?php echo ($va["class"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
						</ul>	
						</div>
            </div>
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-9">  
                        <ul class="nav nav-tabs">
                        </ul>
						<div id="no-activity" style="text-align:center;display:none">
							<img src="__Public__/Images/no-activity.jpg"></img>
					    </div>
                        <div id="filter-container"  class="cf isotope">					         
			            </div><!-- ENDS Filter container -->  
						   <div class="row" style="margin-top:35px">
                                    <div class="col-md-3">
                                        <a href="/event/144">
                                            <img src="/Uploads/Images/Event/Poster/Thumb/t_52592e382a3e7.png" class="img-responsive" style="width:100%;height:100%"
                                            />
                                        </a>
                                    </div>
                                    <div class="col-md-9 ">
                                        <p>
                                            <a href="/event/144">
                                                东南大学第十一届视觉制导机器人竞赛                                            </a>
                                        </p>
                                        <p class="info">
                                            时间：10月08日~04月08日                                        </p>
                                        <p class="info">
                                            地点：东南大学学科竞赛管理系统                                        </p>
                                        <p class="info">
                                            费用：免费                                        </p>
                                        <p class="info">
                                            发起：
                                                                                                <a href="/group/1" target="_blank">                                            官方帐号                                            </a>
                                        </p>
                                        <p class="info">
                                            0人参加
                                            <span>
                                                |
                                            </span>
                                            0人感兴趣
                                        </p>
                                    </div>
                                </div>
						<div id="more" class="" style="font-family:微软雅黑">
							<div class="btn btn-large btn-block getmore" id="0">加载更多</div>
						</div>
					</div>    
                </div>
            </div>
        </div>
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
				<div class="row-fluid" id="attention">
					
				</div>
			</div>
		</div>
		<div class="span9">
			<div class="act-info-header">
				<h4>活动信息</h4>
			</div>
			<div class="act-info-body">
				<div class="act-info" id="league_name"><i class="icon-user"></i>主办方：<a href="javascript:void(0);"></a>
					<!--<a href="#" title="关注此社团">
						<img src="__Public__/Images/attention-small.png"/>
					</a>-->
				</div>
				<div class="act-info"><i class="icon-time"></i>时间：<span id="model_time"></span></div>
				<div class="act-info"><i class="icon-home"></i>地点：<span id="model_place"></span></div>
				<div class="act-info"><i class="icon-envelope"></i>联系方式：<span id="connectinfo"></span></div>
				<div class="act-info-para" id="introduction">
				</div>`
				<div class="act-info-pic">
					<img src="" id="actpost"/>
				</div>
			</div>
		</div>
	  </div>
	</div>
	<div class="modal-footer">
		<a href="#" class="btn btn-primary" data-dismiss="modal">知道了</a>
	</div>
</div>

<div class="modal fade" id="loginModel2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:560px;margin-left:-280px;">
	
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
 
<!-- 版权信息区域 -->

<div class="footer font-sm">
	<div style="height:100px">
		<hr style="border-top: 1px solid black;margin-bottom:36px;margin-left:40px;margin-right:40px">
		<h5 class="center" style="display:table;margin-left: auto;margin-right: auto;"> CopyRight &copy; 2001-2013 Herald.seu.edu.cn</h5>
    </div>  
</div>

	 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="__Public__/Js/bootstrap3/bootstrap.js"></script>
	<script src="__Public__/Js/bootstrap3/respond.min.js"></script>
	  <!--[if lte IE 6]>
  <!-- bsie js 补丁只在IE6中才执行 -->
	<script type="text/javascript" src="__Public__/Js/bootstrap3/bootstrap-ie.js"></script>
	
		
</body>
</html>