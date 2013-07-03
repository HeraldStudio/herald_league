<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en" class="login_page">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Room Page</title>
	<link href="__Public__/Css/room.css" rel="stylesheet" media="screen">
    <link href="__Public__/Css/bootstrap/bootstrap.css" rel="stylesheet" media="screen"> 
	<link href="__Public__/Css/back-to-top/backtotop.css" rel="stylesheet" media="screen"> 
	<link href="__Public__/Css/bootstrap/bootstrap-responsive.css" rel="stylesheet" media="screen"> 
	<script type="text/javascript" src="__Public__/Js/bootstrap/jquery.js"></script>
    <script src="__Public__/Js/bootstrap/bootstrap.js"></script>	
	<script src="__Public__/Js/back-to-top/backtotop.js"></script>	
	
	<script src="__Public__/Js/back-to-top/jquery1.3.2.js"></script>	
	<script src="__Public__/Js/back-to-top/jquery.scrollTo.js"></script>
    <script src="__Public__/Js/back-to-top/script.js"></script>	

	<style>
	.fixed-left{
			position:fixed;	
			left:77px;
			top: 100px;
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
	.page-header{
			padding-bottom: 0px;
			margin: 0px 0 15px;
			border-bottom: 1px solid black;
			}
	.clear:after{
			content: ".";
			display: block;
			height: 0;
			clear: both;
			visibility: hidden;
				}
	.reply{
	      margin-bottom:10px;
	}
	p{
	     text-indent:2em;
	 }
	 h1,h2,h3,h4,h5,h6{
	    font-weight:normal;
	 }
	 .hero-unit {
			  padding:20px;
			  margin-bottom: 10px;
			  font-size: 16px;
			  font-weight: 200;
			  line-height: 25px;
			  color: inherit;
			  background-color: #eeeeee;
			  -webkit-border-radius: 6px;
				 -moz-border-radius: 6px;
					  border-radius: 6px;
			}
	
	#cezhong{
	    margin-left:250px;
	}
	@media (max-width: 979px){
		     #celeft{
			    display:none;
			 }
			 #cezhong{
			    margin-left:40px;	
			 }
		 }
	</style>
    </head>
    <body style="font-family:微软雅黑;background-image:url(__Public__/Images/noise-all.png)" id="top">
	<p id="back-to-top"><a href="#top"><span></span>.</a></p>
	<!--header-->
	<div class="navbar navbar-fixed-top well">
		<div class="navbar-inner">
			<div class="container-fluid">
				<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="brand" href="#"><strong>社团空间</strong></a>
				<div class="nav-collapse collapse">
					<a href="#" class="navbar-text pull-right" style="text-decoration:none;padding-left:20px">登录</a>
					<form class="navbar-form pull-right">
						<input type="text" class="search-query span3" placeholder="Search">
						<button type="submit" class="btn">Go</button>
					</form>
					<ul class="nav">
						<li class="active"><a href="#">活动平台首页</a></li>
						<li><a href="#">社团列表</a></li>
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
    <!--header-->
	
	<div class="container-fluid" style="padding-top:100px;">
	<div class="row-fluid">
		<div class="span12">
			<div class="row-fluid">
			    <div class="span1"></div>
				<div class="span2 fixed-left" id="celeft">
					<div class="page-header" style=" margin: 10px 0 20px;">
						<h4>
							浏览导航
						</h4>
					</div>
					<nav>
					<ul class="nav nav-tabs nav-stacked " >
						<li class="active"><a href="#">XXX社团</a></li>
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
					<table class="table table-hover" contenteditable="true">
						<tbody>
							<tr>
								<td>邮箱</td>
								<td>TB - Monthly</td>
							</tr>
							<tr>
								<td>电话</td>
								<td>TB - Monthly</td>
							</tr>
							<tr>
								<td>地点</td>
								<td>TB - Monthly</td>
							</tr>
							<tr>
								<td>XX</td>
								<td>XXXXXX</td>
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
											XXX社团
										</h2>
									</div>
								</div>
							</div>
							<div class="row-fluid">
								<div class="span12">
									<div class="hero-unit">						
										<p>
											东南大学支教协会成立于2010年4月11日，是东南大学校团委领导下的学生团体。虽然年轻，可是却填补了东大本科生部支教的空白。它拥有一大批热情而有爱心的大学生，甘于奉献，乐于付出，视支教为生命， 愿毕其一生去追求。
										</p>
                                        <button class="btn btn-primary  btn-small pull-right" data-toggle="modal" href="#myModal">成员信息</button>										
									</div>
								</div>
								
							</div>
							<div class="row-fluid" > 
								<div class="span12">								
								   <div class="w-box" id="w_sort07" style="">
										<div class="page-header">
										    <h4 id="huodong">
										     	活动信息
										   </h4>										 
									    </div>
										<div class="w-box-content">
											<div class="tabbable clearfix">
												
												
														    <ul class="thumbnails">
																<li class="span4">
																	<div class="thumbnail">	
																		<div class="caption">
																			<h5>
																				这是个好活动！
																			</h5>								
																			<a class="btn btn-primary" data-toggle="modal" href="#myModal">浏览</a>
																		</div>
																	</div>
																</li>
																<li class="span4">
																	<div class="thumbnail">
																		<img alt="300x200" src="__Public__/Images/02.jpg" />
																		<div class="caption">
																			<h5>
																				哈佛结构
																			</h5>
																			<p>
																				哈佛结构是一种将程序指令存储和数据存储分开的存储器结构，它的主要特点是将程序和数据存储在不同的存储空间中，进行独立编址。
																			</p>
																				<a class="btn btn-primary" data-toggle="modal" href="#myModal">浏览</a> 
																		</div>
																	</div>
																</li>
																<li class="span4">
																	<div class="thumbnail">
																		<img alt="300x200" src="__Public__/Images/01.jpg" />
																		<div class="caption">
																			<h3>
																				改进型哈佛结构
																			</h3>
																			<p>
																				改进型的哈佛结构具有一条独立的地址总线和一条独立的数据总线，两条总线由程序存储器和数据存储器分时复用，使结构更紧凑。
																			</p>
																				<a class="btn btn-primary" href="#">浏览</a> 
																		</div>
																	</div>
																</li>					
															</ul>		
											       
													
											</div>
										</div>
									</div>
														
								
								
								</div>	
							</div>
							
							
							
							
							
							<div class="row-fluid"> 						
								<div class="span12">
									<div class="page-header">
										<h4 id="xiangce">
											社团相册
										</h4>
									</div>
									<div class="row-fluid">
										<div class="span4">
											<a data-toggle="modal" href="#myModal">
											   <img alt="140x140" src="__Public__/Images/06.jpg" class="img-rounded" />
											</a>
										</div>
										<div class="span4">
											<img alt="140x140" src="__Public__/Images/06.jpg" class="img-polaroid" />
										</div>
										<div class="span4">
											<img alt="140x140" src="__Public__/Images/06.jpg" class="img-circle" />
										</div>
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
									<div class="thumbnail reply">		
											<p><h5>我看这个社团不错！</h5></p>	
									</div>
									
									<div class="thumbnail reply">		
											<p><h5>我看也行！</h5></p>	
									</div>
									
									<div class="thumbnail reply">		
											<p><h5>我信，我信！</h5></p>	
									</div>
								
									<form>
									   <textarea name="" id="" cols="10" rows="3" class="span12" placeholder="说点什么吧..."></textarea>   
									   <button class="btn btn-success btn-small pull-right" type="submit">回复</button>
									   <button class="btn btn-danger btn-small pull-right" style="margin-right:10px"type="reset">清空</button>
									</form>
									
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="span2 ">
					<div class="page-header" style="margin-top:10px;">
						<h4>
        						其他社团
						</h4>
					</div>
					<div id="clist">
						<ul>
							<li>
								<a target="_blank" href="#"><img src="__Public__/Images/head-club.jpg">网络安全联盟啊啊啊</a>
								<a href="#" title="关注此社团"><img src="__Public__/Images/attention-small.png"/></a>
							</li>
							<li>
								<a target="_blank" href="#"><img src="__Public__/Images/head-club.jpg">网络安全联盟</a>
								<a href="#" title="关注此社团"><img src="__Public__/Images/attention-small.png"/></a>
							</li>
							<li>
								<a target="_blank" href="#"><img src="__Public__/Images/head-club.jpg">网络安全联盟啊啊啊</a>
								<a href="#" title="关注此社团"><img src="__Public__/Images/attention-small.png"/></a>
							</li>
							<li>
								<a target="_blank" href="#"><img src="__Public__/Images/head-club.jpg">网络安全联盟</a>
								<a href="#" title="关注此社团"><img src="__Public__/Images/attention-small.png"/></a>
							</li>
							<li>
								<a target="_blank" href="#"><img src="__Public__/Images/head-club.jpg">网络安全联盟啊啊啊</a>
								<a href="#" title="关注此社团"><img src="__Public__/Images/attention-small.png"/></a>
							</li>
						</ul>	
					</div>
					<div class="page-header" >
						<h4>
        						关注者
						</h4>
					</div>
					<div id="flist">
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
							</div>                
					</div>
					
				</div>
				
				<div class="span1">
				   	<div id="fixdiv">
									<div class="move" id="fix2">
							<div id="fix2pic"  onmouseover="mover(2)" onmouseout="mout(2)"></div>
							<div id="menu2">
								<ul class="dropdown-menu" id="menub2" role="menu" aria-labelledby="dropdownMenu" style="display: block; position:static; margin-bottom: 5px; *width: 180px;">
									<li><a tabindex="-1" href="#">加入我们</a></li>
									<li><a tabindex="-1" href="#">先声大纪事</a></li>
									<li><a tabindex="-1" href="#">先声元老</a></li>
								</ul>
								<div style="height:97px; width:175px;"></div>
							</div>
						</div>
						
						<div class="move" id="fix3">
							<div id="fix3pic"  onmouseover="mover(3)" onmouseout="mout(3)"></div>
							<div id="menu3">
								<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu" style="display: block; position:static; margin-bottom: 5px; *width: 180px;">
									<li><a tabindex="-1" href="#">那个什么</a></li>
									<li><a tabindex="-1" href="#">那个什么</a></li>
									<li><a tabindex="-1" href="#">那个什么</a></li>
								</ul>
								<div style="height:97px; width:175px;"></div>
							</div>
							<div id="Msg3"><p class="text-center">那个什么</p></div>
						</div>
						
						<div class="move" id="fix4">
							<div id="fix4pic"  onmouseover="mover(4)" onmouseout="mout(4)"></div>
							<div id="menu4">
								<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu" style="display: block; position:static; margin-bottom: 5px; *width: 180px;">
									<li><a tabindex="-1" href="#">跑操查询</a></li>
									<li><a tabindex="-1" href="#">校车时刻表</a></li>
									<li><a tabindex="-1" href="#">图书馆</a></li>
								</ul>
								<div style="height:97px; width:175px;"></div>
							</div>
							<div id="Msg4"><p class="text-center">校园助手</p></div>
						</div>
					</div>
					<div id="MsgGoUp"><p class="text-center">返回顶部</p></div>
					<div id="Msg2"><p class="text-center">关于我们</p></div>
					
					
					
					
					<div class="myboder" onmouseover="mboder()" id="bodert" style="width:175px; height:25px; position:fixed; right:7px; bottom:307px; display:none"></div>
					<div class="myboder" onmouseover="mboder()" id="boderb" style="width:175px; height:50px; position:fixed; right:7px; bottom:50px; display:none"></div>
					<div class="myboder" onmouseover="mboder()" id="boderl" style="width:80px; height:282px; position:fixed; right:181px; bottom:50px; display:none"></div>
					<div class="myboder" onmouseover="mboder()" id="boderr" style="width:7px; height:282px; position:fixed; right:0px; bottom:50px; display:none"></div>
								
				</div>
			</div>
		</div>
	</div>
</div>
<div class="span12"> 
   <hr style="border-top: 1px solid black;border-bottom: 1px solid #ffffff;">
   <h5 class="center"> CopyRight &copy 2013 Herald.seu.edu.cn</h5>	
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
		<div class="span12">
			<div class="act-info-header">
				<h4>照片很不错!</h4>
			</div>
			<div class="act-info-body">
				<div class="act-info-pic">
					<img src="__Public__/Images/06.jpg"/>
				</div>
			</div>
		</div>
	  </div>
	</div>
	<div class="modal-footer">
		<a href="#" class="btn btn-primary" data-dismiss="modal">OK</a>
	</div>
</div>	
	
    </body>
</html>