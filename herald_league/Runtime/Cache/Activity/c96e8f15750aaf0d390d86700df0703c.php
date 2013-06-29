<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>Test</title>
	
	<meta charset='utf-8'>
	<link href="__Public__/Css/bootstrap/bootstrap.css" rel="stylesheet" media="screen"> 
	<link href="__Public__/Css/bootstrap/bootstrap-responsive.css" rel="stylesheet" media="screen"> 
	<script src="__Public__/Js/bootstrap/bootstrap.js"></script>	
	<script src="__Public__/Js/bootstrap/bootstrap-transition.js"></script>


	
	
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
			z-index: 1030;
			top: 100px;
		}
		
	</style>
	<!--<style type="text/css">
	@media (min-width:980px){
		body{
		padding-top:48px;}
	}
	</style>-->

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
					<a href="#" class="navbar-text pull-right" style="text-decoration:none;padding-left:20px">登录</a>
					<form class="navbar-form pull-right">
						<input type="text" class="search-query span3" placeholder="Search">
						<button type="submit" class="btn">Go</button>
					</form>
					<ul class="nav">
						<li class="active"><a href="#">首页</a></li>
						<li><a href="#">社团列表</a></li>
						<li><a href="#">社团空间</a></li>
						<li><a href="#">二手市场</a></li>
						<li><a href="#">失物招领</a></li>
					</ul>
				</div><!-- /.nav-collapse -->
			</div>
		</div>
	</div>
	<div class="container-fluid" style="padding-top:100px">
		<div class="span3 fixed-left" style="background-image:url(__Public__/Images/main-bg.png)">
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
	    <div class="span12 offset3">
			<div id="filter-container" class="cf isotope" >
					<figure class="movie isotope-item" >
						<a href="#" class="thumb"><img src="__Public__/Images/t01.jpg" alt="alt"></a>
						<figcaption>
							<a href="#"><h3 class="heading">1Pellentesque </h3></a>
							met, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. </figcaption>
					</figure>
					
					<figure class="movie isotope-item" >
						<a href="#" class="thumb"><img src="__Public__/Images/02.jpg" alt="alt"></a>
						<figcaption>
							<a href="#"><h3 class="heading">2Pelletant morbi</h3></a>
							tae, ultricies egetsit amet quam egestas semper. Aenean ultricies mi vitae est. </figcaption>
					</figure>
					
					
					<figure class="movie design isotope-item" >
						<a href="#" class="thumb"><img src="__Public__/Images/t03.jpg" alt="alt"></a>
						<figcaption>
							<a href="#"><h3 class="heading">3Habitant morbi</h3></a>
							Tenean ultricies mi vitae est. </figcaption>
					</figure>
					
					
					<figure class="photo isotope-item" >
						<a href="#" class="thumb"><img src="__Public__/Images/04.jpg" alt="alt"></a>
						<figcaption>
							<a href="#"><h3 class="heading">4Pellentesque habitant morbi</h3></a>
							Trultric. Aenean ultricies mi vitae est. </figcaption>
					</figure>
					
					
					<figure class="web photo isotope-item" >
						<a href="#" class="thumb"><img src="__Public__/Images/t05.jpg" alt="alt"></a>
						<figcaption>
							<a href="#"><h3 class="heading">5Pell morbi</h3></a>
							Tfeugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. </figcaption>
					</figure>
					
					
					<figure class="web print isotope-item" >
						<a href="#" class="thumb"><img src="__Public__/Images/06.jpg" alt="alt"></a>
						<figcaption>
							<a href="#"><h3 class="heading">6Pellentmorbi</h3></a>
							Tristique senricies mi vitae est. </figcaption>
					</figure>
					
					
					<figure class="photo isotope-item" >
						<a href="#" class="thumb"><img src="__Public__/Images/t04.jpg" alt="alt"></a>
						<figcaption>
							<a href="#"><h3 class="heading">7Pelleabitant morbi</h3></a>
							Tristique senectus et netus esit amet quam egestas semper. Aenean ultricies mi vitae est. </figcaption>
					</figure>
					
					
					<figure class="web movie isotope-item" >
						<a href="#" class="thumb"><img src="__Public__/Images/05.jpg" alt="alt"></a>
						<figcaption>
							<a href="#"><h3 class="heading">8Pellentesquerbi</h3></a>
							Tristique senas semper. Aenean ultricies mi vitae est. </figcaption>
					</figure>
					
					
					<figure class="web movie isotope-item" >
						<a href="#" class="thumb"><img src="__Public__/Images/t01.jpg" alt="alt"></a>
						<figcaption>
							<a href="#"><h3 class="heading">Pel是多少多少多少多少到山顶uemorbi</h3></a>
							Tristique senectus et nit amet, anteltricies mi vitae est. </figcaption>
					</figure>
					
			</div><!-- ENDS Filter container -->
	        <button class="btn btn-warning large span10">MORE</button>
	  
	  </div>
	
	</div>
	
<a data-toggle="modal" href="#myModal" class="btn btn-primary btn-large">点击演示</a>
<div id="myModal" class="modal fade " >
            <div class="modal-header">
              <a class="close" data-dismiss="modal">×</a>
              <h3>对话框标题</h3>
            </div>
            <div class="modal-body">
              <h4>对话框文字</h4>
              <p>
		高考临近，湖北孝感惊现史上最刻苦“吊瓶班”。这是昨日孝感市第一高级中学某晚自习教室的一幕，"吊瓶高考班"轰动全校！不知台上的老师面对如此震撼的场面和沁人心脾的药水味，如何站稳脚跟hold住全场呢？该校学生表示，备战高考，补充能量挨几针也是值得的，你hold住了吗？
	      </p>

              <h4>对话框中的弹出提示</h4>
              <p> <a href="#" class="btn popover-test" data-content="青岛工学院最近下发通知，将考研自习室772个座位“有偿提供”，5元起售，目前已售出500多个座位。根据采光通风等条件不同，座位每月收费划分为5元、10元、15元、20元、25元五个档次，学生购买时要一次交纳10个月的费用。教务处长称， 为了给学生解决考研复习问题，只好“出此下策”。" data-original-title="花钱买座位">学生真不易</a> 把鼠标放上来试试？</p>

              <h4>对话框中的工具提示</h4>
              <p>
		5月1日，济南一名<a href="#" class="tooltip-test" data-original-title="城管里面也有好人，把他们变成坏人的是恶的制度">城管</a>要对一位抱着三四岁孩子的<a href="#" class="tooltip-test" data-original-title="小商贩真的很辛苦，不要再欺负辛劳人了">女商贩</a>扣留时候发生争执。争执中女商贩抱着孩子给城管下跪,城管见状也向女商贩跪下。事后城管称，下跪是为了与对方“平等对话”,也怕对孩子心理产生不良影响。
	      </p>

              <hr>

              <h4>对溢出文本使用可选的滚动条</h4>
              <p>
		我们对 <code>.modal-body</code> 样式修正了 <code>max-height</code> 。对于超过高度的内容就会显示滚动条。
	      </p>
              <p>南京街头某家麦当劳门口，一个外国人买了两包薯条，分给乞讨的老奶奶一包，两人席地而坐，开心地吃着聊着。</p>
	      <p>@说书者一枚 ：《帝都日爆》射论：《从麦当劳事件看美国小伙的拙劣表演》：这位美国小伙拙劣的”亲民民主表演“，再次印证了中国的古语“黄鼠狼给鸡拜年没安好心”。这道貌岸然的潜伏”美国政客“，想用糖衣炮弹瓦解坚强的中国无产阶级老奶奶，必定遭到中国人民的唾弃！不要做自取其辱的丑事！（完，完蛋的完） </p>
              <p>4日晚，东莞东城海雅百货前，一女子被偷包，巴西籍男子MOZEN阻止，遭小偷团伙报复群殴。其间数十名路人在场，无人施救。MOZEN说，小偷打他，他觉得正常，可没有任何人帮他，让他觉得不正常，“这个社会是需要互相帮助的，我整天出没在君豪商业中心，中心几乎大部分人都认识我，却没有一个人帮我，这让我觉得很失望，很心寒”。</p>
	      <p>MOZEN说，海雅百货这一带治安很乱，这已经不是他第一次阻止小偷行窃了，早在今年春节前，他就曾扑倒过一个小偷。可有了这一次的经历，如果下回再碰上类似情况，他不会也不敢再帮忙了。</p>
              <p>美国总统富兰克林·罗斯福1942年6月14日美国国旗纪念日广播演讲：“我们所有人都是地球的子孙，有些道理不言而喻，如果我们的兄弟在遭受压迫，我们也将遭受压迫，如果他们在忍饥挨饿，我们也将忍饥挨饿，如果他们的自由权利被剥夺，我们的自由也将不复存在......<a href="http://t.cn/aDoq5K"></a>http://t.cn/aDoq5K</p>
            </div>
            <div class="modal-footer">
              <a href="#" class="btn" data-dismiss="modal">关闭</a>
              <a href="#" class="btn btn-primary">保存更改</a>
            </div>
          </div>
<script>
!function( $ ){

  "use strict"

 /* MODAL CLASS DEFINITION
  * ====================== */

  var Modal = function ( content, options ) {
    this.options = options
    this.$element = $(content)
      .delegate('[data-dismiss="modal"]', 'click.dismiss.modal', $.proxy(this.hide, this))
  }

  Modal.prototype = {

      constructor: Modal

    , toggle: function () {
        return this[!this.isShown ? 'show' : 'hide']()
      }

    , show: function () {
        var that = this

        if (this.isShown) return

        $('body').addClass('modal-open')

        this.isShown = true
        this.$element.trigger('show')

        escape.call(this)
        backdrop.call(this, function () {
          var transition = $.support.transition && that.$element.hasClass('fade')

          !that.$element.parent().length && that.$element.appendTo(document.body) //don't move modals dom position

          that.$element
            .show()

          if (transition) {
            that.$element[0].offsetWidth // force reflow
          }

          that.$element.addClass('in')

          transition ?
            that.$element.one($.support.transition.end, function () { that.$element.trigger('shown') }) :
            that.$element.trigger('shown')

        })
      }

    , hide: function ( e ) {
        e && e.preventDefault()

        if (!this.isShown) return

        var that = this
        this.isShown = false

        $('body').removeClass('modal-open')

        escape.call(this)

        this.$element
          .trigger('hide')
          .removeClass('in')

        $.support.transition && this.$element.hasClass('fade') ?
          hideWithTransition.call(this) :
          hideModal.call(this)
      }

  }


 /* MODAL PRIVATE METHODS
  * ===================== */

  function hideWithTransition() {
    var that = this
      , timeout = setTimeout(function () {
          that.$element.off($.support.transition.end)
          hideModal.call(that)
        }, 500)

    this.$element.one($.support.transition.end, function () {
      clearTimeout(timeout)
      hideModal.call(that)
    })
  }

  function hideModal( that ) {
    this.$element
      .hide()
      .trigger('hidden')

    backdrop.call(this)
  }

  function backdrop( callback ) {
    var that = this
      , animate = this.$element.hasClass('fade') ? 'fade' : ''

    if (this.isShown && this.options.backdrop) {
      var doAnimate = $.support.transition && animate

      this.$backdrop = $('<div class="modal-backdrop ' + animate + '" />')
        .appendTo(document.body)

      if (this.options.backdrop != 'static') {
        this.$backdrop.click($.proxy(this.hide, this))
      }

      if (doAnimate) this.$backdrop[0].offsetWidth // force reflow

      this.$backdrop.addClass('in')

      doAnimate ?
        this.$backdrop.one($.support.transition.end, callback) :
        callback()

    } else if (!this.isShown && this.$backdrop) {
      this.$backdrop.removeClass('in')

      $.support.transition && this.$element.hasClass('fade')?
        this.$backdrop.one($.support.transition.end, $.proxy(removeBackdrop, this)) :
        removeBackdrop.call(this)

    } else if (callback) {
      callback()
    }
  }

  function removeBackdrop() {
    this.$backdrop.remove()
    this.$backdrop = null
  }

  function escape() {
    var that = this
    if (this.isShown && this.options.keyboard) {
      $(document).on('keyup.dismiss.modal', function ( e ) {
        e.which == 27 && that.hide()
      })
    } else if (!this.isShown) {
      $(document).off('keyup.dismiss.modal')
    }
  }


 /* MODAL PLUGIN DEFINITION
  * ======================= */

  $.fn.modal = function ( option ) {
    return this.each(function () {
      var $this = $(this)
        , data = $this.data('modal')
        , options = $.extend({}, $.fn.modal.defaults, $this.data(), typeof option == 'object' && option)
      if (!data) $this.data('modal', (data = new Modal(this, options)))
      if (typeof option == 'string') data[option]()
      else if (options.show) data.show()
    })
  }

  $.fn.modal.defaults = {
      backdrop: true
    , keyboard: true
    , show: true
  }

  $.fn.modal.Constructor = Modal


 /* MODAL DATA-API
  * ============== */

  $(function () {
    $('body').on('click.modal.data-api', '[data-toggle="modal"]', function ( e ) {
      var $this = $(this), href
        , $target = $($this.attr('data-target') || (href = $this.attr('href')) && href.replace(/.*(?=#[^\s]+$)/, '')) //strip for ie7
        , option = $target.data('modal') ? 'toggle' : $.extend({}, $target.data(), $this.data())

      e.preventDefault()
      $target.modal(option)
    })
  })

}( window.jQuery );
</script>
</body>
</html>