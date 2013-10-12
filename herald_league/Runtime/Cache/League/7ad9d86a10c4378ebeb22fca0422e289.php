<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en" class="login_page">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>先声网－<?php echo ($leaguename); ?></title>
  <link href="__Public__/Css/room.css" rel="stylesheet" media="screen">
    <link href="__Public__/Css/bootstrap/bootstrap.css" rel="stylesheet" media="screen"> 
  <link href="__Public__/Css/activity.css" rel="stylesheet" media="screen">
  <link href="__Public__/Css/back-to-top/backtotop.css" rel="stylesheet" media="screen"> 
  <link href="__Public__/Css/bootstrap/bootstrap-responsive.css" rel="stylesheet" media="screen"> 
  <script type="text/javascript" src="__Public__/Js/bootstrap/jquery.js"></script>
    <script src="__Public__/Js/测试bootstrap/bootstrap.js"></script>  
  <script src="__Public__/Js/back-to-top/backtotop.js"></script>  
    <script type="text/javascript" src="__Public__/Js/logout.js"></script>
    
<!--[if lte IE 6]>
  <!-- bsie css 补丁文件 -->
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-ie6.css">

  <!-- bsie 额外的 css 补丁文件 -->
  <link rel="stylesheet" type="text/css" href="bootstrap/css/ie.css">
  <![endif]-->
  
  <script src="__Public__/Js/back-to-top/jquery1.3.2.js"></script>  
  <script src="__Public__/Js/back-to-top/jquery.scrollTo.js"></script>
    <script src="__Public__/Js/back-to-top/script.js"></script> 
    <script src="__Public__/Js/room.js"></script>
<script src="__Public__/Js/page.js"></script>

  <!--[if lte IE 6]>
  <!-- bsie js 补丁只在IE6中才执行 -->
  <script type="text/javascript" src="js/bootstrap-ie.js"></script>
  <!--[endif]-->
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
      margin: 20px 0 15px;
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
      h1,h2,h3,h4,h5,h6{
      font-weight:normal;
   }
    p{
       text-indent:2em;
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
       #main2{
           padding-top:10px;
       }
     }
    @media (min-width: 979px){
        #main2{
           padding-top:100px;
      }
  }
  .pagination {
        margin: 10px 0 0px;
      }
    .tips { color:#999; padding:0 5px; }  
    .tips strong { color:#1E9300; }
    .tips .js_txtFull strong { color:#F00; }
    textarea.text { width:474px; }
  .reply_title{
      background-color:#eeeeee;
  }
  .pinglun{
     font-size:14px;
     text-indent:2em;
     padding-top:28px;
  }
  .pinglun_2{
     font-size:11px;
     padding-top:2px;
  
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
  .word_wrap{
        overflow:hidden;
      word-wrap:break-word;
  }
  #follower{
    height:35px;
  }
  .text{
      font-size:14px;
    line-height:30px;
  }
  .pagination{
      margin-bottom:5px;
  }
  </style>
    </head>
    <body style="font-family:微软雅黑;background-image:url(__Public__/Images/noise-all.png)" id="top">
  <p id="back-to-top" onmouseover="mover(1)" onmouseout="mout(1)"><a href="#top"><span></span></a></p>
  <!--header-->
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
            <li><a href="/">平台首页</a></li>
            <li><a href="<?php echo U('/League/Index/leaguelist');?>">社团列表</a></li>
            <li><a href="#">社团空间</a></li>
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
    <!--header-->
  
  <div class="container-fluid" id="main2">
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
                                  <?php if(!empty($vai["post_add"])): ?><a href="#" class="thumb">
                                    <img src="__Uploads__/ActivityPost/<?php echo ($vai["post_add"]); ?>" alt="alt" />
                                  </a><?php endif; ?>
                                  <div class="heading center" style="font-size:20px;margin-top:20px;">
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
                    <div class="pagination pull-right">
                      <ul>
                          <input type="hidden" value="0" id="currentphotopage">
                          <input type="hidden" value="<?php echo ($leaguephotonum); ?>" id="maxphotopage">
                      <li><a href="javascript:void(0);" id="prephotopage">&lt;&lt;</a></li>

                      <li><a href="javascript:void(0);" id="nextphotopage">&gt;&gt;</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="row-fluid">
                    <?php if(is_array($albuminfo)): $i = 0; $__LIST__ = $albuminfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><div class="span4 photodiv">
                      <a data-toggle="modal" href="#myModal">
                         <img alt="140x140" src="__Public__/Images/06.jpg" class="img-rounded" />
                         <p><?php echo ($val["name"]); ?></p>
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
        
        <div class="span1">
            <div id="fixdiv">
    <a href="#top"  id="scrollUp" style="display:none;">
      <div id="gototop" onmouseover="mover(1)" onmouseout="mout(1)"></div>
    </a>
    <div id="MsgGoUp"><p class="text-center">返回顶部</p></div>
    <div class="move" id="fix2">
      <div id="fix2pic"  onmouseover="mover(2)" onmouseout="mout(2)"></div>
      <div id="menu2">
        <div style="height:97px; width:175px;">
          <ul class="dropdown-menu" id="menub2" role="menu" aria-labelledby="dropdownMenu" style="display:block; position:static; margin-bottom: 5px; *width: 180px;">
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

                
        </div>
      </div>
    </div>
  </div>
</div>
<div style="height:100px">
  <hr style="border-top: 1px solid black;margin-bottom:36px;margin-left:40px;margin-right:40px">
  <h5 class="center" style="display:table;margin-left: auto;margin-right: auto;"> CopyRight &copy 2001-2013 Herald.seu.edu.cn</h5>
</div> 

<div id="myModal" class="modal hide fade ">
  <div class="modal-header">
    <a class="close" data-dismiss="modal">×</a>
    <h3>
    <span></span>
    <a href="#" title="关注此活动">活动名称<img id="modal-header-attention" src="__Public__/Images/attention.png"/></a>  
    </h3>
  </div>
  <div class="modal-body">
    <div class="row-fluid">
    <div class="span3">
      <div id="follower">
        <h5 class="pull-left">关注者</h5>
        <h5 class="pull-right"><?php echo ($attentioncount); ?>人</h5>
      </div>
      <div id="follower-list">
        <?php if(is_array($leagueattentioninfo)): $i = 0; $__LIST__ = $leagueattentioninfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vle): $mod = ($i % 3 );++$i; if(($key) != "0"): if(($mod) == "2"): ?><div class="row-fluid"><?php endif; endif; ?>
            <div class="span4"><img src="__Uploads__/UserAvatar/<?php echo ($vle["avatar_address"]); ?>"/><br /><?php echo ($vle["user_true_name"]); ?></div>
          <?php if(($key) != "0"): if(($mod) == "2"): ?></div><?php endif; endif; endforeach; endif; else: echo "" ;endif; ?>            
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

<div id="myModal_member" class="modal hide fade ">
  <div class="modal-header">
    <a class="close" data-dismiss="modal">×</a>
    <h3>成员信息</h3>
  </div>
  <div class="modal-body">
    <div class="row-fluid">   
    <div class="span12">
      <div class="text">
        <?php echo (htmlspecialchars_decode($memberinfo)); ?> 
      </div>
    </div>
    </div>
  </div>
  <div class="modal-footer">
    <a href="#" class="btn btn-primary" data-dismiss="modal">OK</a>
  </div>
</div>
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

    </body>
</html>