var h;
h=75;
$(document).ready(function(){

	// $('nav a,footer a.up').click(function(e){
										  

	// 	$.scrollTo( this.hash || 0, 1500);
	// 	e.preventDefault();
	// });
	var nav_switch=1;
	$('#nav_huodong').click(function(){
		if(nav_switch){
		nav_switch=0;
		$("html,body").animate({scrollTop: ($("#huodong").offset().top) - h }, 1000,function(){
			nav_switch=1;
		});
		}
		return false;
	});
	$('#nav_xiangce').click(function(){
		if(nav_switch){
		nav_switch=0;
		$("html,body").animate({scrollTop: ($("#xiangce").offset().top) -h }, 1000,function(){
			nav_switch=1;
		});
		}
		return false;
	});
	$('#nav_liuyanban').click(function(){
		if(nav_switch){
		nav_switch=0;
		$("html,body").animate({scrollTop: ($("#liuyanban").offset().top) -h }, 1000,function(){
			nav_switch=1;
		});
		}
		return false;
	});


});