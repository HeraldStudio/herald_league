$(document).ready(function(){
	//首先将#back-to-top隐藏
	$("#back-to-top").hide();
	//当滚动条的位置处于距顶部100像素以下时，跳转链接出现，否则消失
	$(function () {
		$(window).scroll(function(){
		if ($(window).scrollTop()>100){
		$("#back-to-top").fadeIn(1500);
		}
		else
		{
		$("#back-to-top").fadeOut(1500);
		}
		});
		//当点击跳转链接后，回到页面顶部位置
		$("#back-to-top").click(function(){
		$('body,html').animate({scrollTop:0},1000);
		return false;
		});
		});
		});

		var rem=false; var rem2=false; var rem3=false;//全局变量
		//当点击跳转链接后，回到页面顶部位置
		$(function () {
		$("#scrollUp").click(function(){
		$('body,html').animate({scrollTop:0},1500);
		return false;});	});
		//当滚动条的位置处于距顶部300像素以下时，跳转链接出现，否则消失
		window.onscroll = function(){
		var t = document.documentElement.scrollTop || document.body.scrollTop; 
		var scrollUp = document.getElementById( "scrollUp" );
		if( t >= 300 ) {
			//scrollUp.style.display = "inline";
			$("#scrollUp").fadeIn(1000);
		}else {
			$("#scrollUp").fadeOut(1000);
			$("#MsgGoUp").fadeOut(1000);
		}}

		function mover(obj){
			if(obj==1){
				$("#MsgGoUp").fadeIn(500);
			}
			else if(obj==2){
				
				if(rem==false){$("#menu2").slideToggle("slow"); $("#Msg2").fadeIn(500); rem=true;}
				if(rem2==true){$("#menu3").slideToggle("slow"); $("#Msg3").fadeOut(500); rem2=false;}
				if(rem3==true){$("#menu4").slideToggle("slow"); $("#Msg4").fadeOut(500); rem3=false;}
			}
			else if(obj==3){
				
				if(rem==true){$("#menu2").slideToggle("slow"); $("#Msg2").fadeOut(500); rem=false}
				if(rem2==false){$("#menu3").slideToggle("slow"); $("#Msg3").fadeIn(500); rem2=true;}
				if(rem3==true){$("#menu4").slideToggle("slow"); $("#Msg4").fadeOut(500); rem3=false}
			}
			else if(obj=4){
				
				if(rem==true){$("#menu2").slideToggle("slow"); $("#Msg2").fadeOut(500); rem=false}
				if(rem2==true){$("#menu3").slideToggle("slow"); $("#Msg3").fadeOut(500); rem2=false;}
				if(rem3==false){$("#menu4").slideToggle("slow"); $("#Msg4").fadeIn(500); rem3=true;}
			}
		}
		function mout(obj){
			if(obj==1){
				$("#MsgGoUp").fadeOut(500);
			}
		}
		function mboder(){
			if(rem==true){$("#menu2").slideToggle("slow"); $("#Msg2").fadeOut(500);rem=false;}
			if(rem2==true){$("#menu3").slideToggle("slow"); $("#Msg3").fadeOut(500);rem2=false;}
			if(rem3==true){$("#menu4").slideToggle("slow"); $("#Msg4").fadeOut(500);rem3=false;}
		}
