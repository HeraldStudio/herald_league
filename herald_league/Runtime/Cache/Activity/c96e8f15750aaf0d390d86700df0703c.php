<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <title>先声网-活动信息平台</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">	
	<meta charset='utf-8'>
	<script type="text/javascript" src="__Public__/Js/bootstrap/jquery.js"></script>
	<link href="__Public__/Css/back-to-top/backtotop.css" rel="stylesheet" media="screen"> 
	<link href="__Public__/Css/activity.css" rel="stylesheet" media="screen">
	<link href="__Public__/Css/bootstrap/bootstrap.css" rel="stylesheet" media="screen"> 
	<link href="__Public__/Css/bootstrap/bootstrap-responsive.css" rel="stylesheet" media="screen"> 
	<link rel="stylesheet" media="all" href="__Public__/Css/kuxuan/style.css">
	<!--link rel="stylesheet" media="all" href="__Public__/Css/kuxuan/lessframework.css">
	<!--link rel="stylesheet" type="text/css" href="__Public__/Css/kuxuan/iealert/style.css"-->
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
	<script src="__Public__/Js/kuxuan/jquery-1.7.1.min.js"></script>
	<script src="__Public__/Js/bootstrap/bootstrap.js"></script>	
	
	<script src="__Public__/Js/activitydetial.js"></script>
	
	<script src="__Public__/Js/back-to-top/backtotop.js"></script>
	
	<script src="__Public__/Js/kuxuan/iealert.js" type="text/javascript"></script>
	<!-- Isotope -->
	<script src="__Public__/Js/kuxuan/jquery.isotope.min.js"></script>
	<script type="text/javascript" src="__Public__/Js/logout.js"></script>
	

	
	<style>
		.text-center {text-align: center;}
		#filter-buttons{width: 140px;}
		#ceright{padding-top:120px;}
		#celeft{padding-top:120px;}
		@media (min-width: 1200px) {
			#filter-buttons{
				width: 170px;
			}
			#ceright{
				padding-top:120px;
			}
		}
		@media (min-width: 768px) and (max-width: 979px) {
			#celeft{
			    width:104px;
				padding-top:0;
			 }
			#ceright{
				padding-top:0;
			}
		}
	    @media (max-width: 767px){
		     #celeft{
			    display:none;
			 }
			 #ceright{
			    width:100%;
				padding-top:0;
			 }
		 }
		  #topLoader {
				width: 256px;
				height: 256px;
				margin-top: 45px;
				margin-bottom: 32px;
				margin-left: 35%;
		  }
	</style>

 
 <script>
 var t=0;
 function isotope(){
	  $('#filter-container').isotope({
		itemSelector : 'figure',
		masonry: {
			columnWidth: 0
		}
	});
 }
 
 function jsonajax(classid){
   var lastid = $(".activityname:last").attr('id');
    if(!lastid){
     	lastid = $("#acn").val();
     }  
     $.ajax({
	     async : false,
         url:'<?php echo U('getMoreActivity');?>',
         type:'post',
         data:'lastactivityid='+lastid+'&claid='+classid,
         dataType:'json',
         success:function(json){
            if(json){
			    t=1;
			    var n;
                var l=json.length;
                for(var i=0; i<l; i++){
                     n = json[i]; 
					if(n.post_add)
						$item = $('<figure class="'+n.class +' isotope-item"><a href=\"javascript:void(0);\" class=\"thumb\"><img src="__Uploads__/ActivityPost/m_'+n.post_add+'" alt=\"alt\" /></a><figcaption><div class="heading"><a data-toggle="modal" href="#myModal" class="activityname" id="'+n.id+'">'+n.name+'</a><a href="#" title="关注此活动"><img src="__Public__/Images/attention.png"/></a></div><p>主办方：<a href="#">'+n.league_name+'</a><a href=\"#\" title=\"关注此社团\"><img src=\"__Public__/Images/attention-small.png\"/></a></p><br><p>时间：'+n.start_time+'</p><br><p>地点：'+n.place+'</p></figcaption></figure>');
					else
						$item = $('<figure class="'+n.class +' isotope-item"><figcaption><div class="heading"><a data-toggle="modal" href="#myModal" class="activityname" id="'+n.id+'">'+n.name+'</a><a href="#" title="关注此活动"><img src="__Public__/Images/attention.png"/></a></div><p>主办方：<a href="#">'+n.league_name+'</a><a href=\"#\" title=\"关注此社团\"><img src=\"__Public__/Images/attention-small.png\"/></a></p><br><p>时间：'+n.start_time+'</p><br><p>地点：'+n.place+'</p></figcaption></figure>');
					$('#filter-container').append($item).isotope('appended',$item);
					isotope();
			     }
			} 
			else{  
					if(t != 0) alert("没有更多了..."); 
					$(".getmore").html("没有更多了...");
					t = 0;
				}
         }
     });
 } 


$(document).ready(function(){ 

  jsonajax(0);
  
  $("#0").click(function(){
     $(".getmore").attr("id",0);
     $("#filter-container").html("");
	 $("#filter-container").isotope('destroy');
	 $('#filter-container').isotope({
		itemSelector : 'figure',
		masonry: {
			columnWidth: 0
		}
	  });
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
	 $("#filter-container").isotope('destroy');
	 $('#filter-container').isotope({
		itemSelector : 'figure',
		masonry: {
			columnWidth: 0
		}
	});
  });
  
  $('.activityclass a').click(function(){
    t = 0;
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
				t=1;
				var n;
				var l=json.length;
				for(i=0; i < l; i++ ){
					n=json[i];
					if (n.post_add)
						$items = $('<figure class="'+n.class +' isotope-item"><a href=\"javascript:void(0);\" class=\"thumb\"><img src="__Uploads__/ActivityPost/m_'+n.post_add+'" alt=\"alt\" /></a><figcaption><div class="heading"><a data-toggle="modal" href="#myModal" class="activityname" id="'+n.id+'">'+n.name+'</a><a href="#" title="关注此活动"><img src="__Public__/Images/attention.png"/></a></div><p>主办方：<a href="#">'+n.league_name+'</a><a href=\"#\" title=\"关注此社团\"><img src=\"__Public__/Images/attention-small.png\"/></a></p><br><p>时间：'+n.start_time+'</p><br><p>地点：'+n.place+'</p></figcaption></figure>');
					else
				        $items = $('<figure class="'+n.class +' isotope-item"><figcaption><div class="heading"><a data-toggle="modal" href="#myModal" class="activityname" id="'+n.id+'">'+n.name+'</a><a href="#" title="关注此活动"><img src="__Public__/Images/attention.png"/></a></div><p>主办方：<a href="#">'+n.league_name+'</a><a href=\"#\" title=\"关注此社团\"><img src=\"__Public__/Images/attention-small.png\"/></a></p><br><p>时间：'+n.start_time+'</p><br><p>地点：'+n.place+'</p></figcaption></figure>');
				$("#filter-container").append($items).isotope('appended',$items);
				}			
			}
		else{
			$("#no-activity").css("display","block");
		}		
	   } 
     });
	        $("#no-activity").css("display","none");
			jsonajax($(this).attr("id"));
	});
});

$(window).load(function(){
	isotope();
 });

</script>
</head>
<body style="font-family:微软雅黑;">
<input type="hidden" value="<?php echo ($activitynum); ?>" id="acn">
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
							<a class="dropdown-toggle" data-toggle="dropdown" href="#" id="login"> 登录 
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
								<li><a href="/herald_league/index.php/League/Admin/addalbum/leagueid/<?php echo ($loginuserid); ?>">上传照片</a></li>
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
	<div class="container">
	  <div class="row" >
		<div class="span2" id="celeft">
			<ul class="nav nav-tabs nav-stacked " id="filter-buttons" style="margin-bottom:0px;position:fixed;top:120px;">
				<li class="active"><a id="fl">分类</a></li>
				<li><a href="#" data-filter="*" class="selected" id="0" >显示全部</a></li>
				<?php if(is_array($activityclass)): $i = 0; $__LIST__ = $activityclass;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$va): $mod = ($i % 2 );++$i;?><li class="activityclass" id="activity_class"><a href="#" id="<?php echo ($va["id"]); ?>"><?php echo ($va["class"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>	
		</div>
	    <div class="span10" id="ceright">
			<div id="no-activity" style="text-align:center;display:none">
				<img src="__Public__/Images/no-activity.jpg" />
			</div>
			<div id="topLoader2">      
			</div>
			<div id="filter-container" class="cf isotope row-fluid"  >					       
			    <div class="span1" style="width:0"></div> 
			</div><!-- ENDS Filter container -->
			<div id="more" style="font-family:微软雅黑">
				<div class="btn btn-large btn-block getmore" id="0">加载更多</div>
			</div>
		</div>
		

	</div></div>
	

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
<div style="height:100px">
	<hr style="border-top: 1px solid black;margin-bottom:36px;margin-left:40px;margin-right:40px">
	<h5 class="center" style="text-align:center"> CopyRight &copy; 2001-2013 Herald.seu.edu.cn</h5>
</div>  
<script>
  $("body").iealert();
</script>
</body>

</html>