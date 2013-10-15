function jsonajax(classid){
   var lastid = $(".activityname:last").attr('id');
    if(!lastid){
     	lastid = $("#acn").val();
     }  
     $.ajax({
         url:'{:U('getMoreActivity')}',
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
						$item = $('<figure class="'+n.class +' isotope-item"><a href=\"#\" class=\"thumb\"><img src="__Uploads__/ActivityPost/'+n.post_add+'" alt=\"alt\" /></a><figcaption><div class="heading"><a data-toggle="modal" href="#myModal" class="activityname" id="'+n.id+'">'+n.name+'</a><a href="#" title="关注此活动"><img src="__Public__/Images/attention.png"/></a></div><p>主办方：<a href="#">'+n.league_name+'</a><a href=\"#\" title=\"关注此社团\"><img src=\"__Public__/Images/attention-small.png\"/></a></p><br><p>时间：'+n.start_time+'</p><br><p>地点：'+n.place+'</p><br /><img src=\"__Public__/Images/need-sign.png\" class=\"pull-right\"/></figcaption></figure>');
					else
						$item = $('<figure class="'+n.class +' isotope-item"><figcaption><div class="heading"><a data-toggle="modal" href="#myModal" class="activityname" id="'+n.id+'">'+n.name+'</a><a href="#" title="关注此活动"><img src="__Public__/Images/attention.png"/></a></div><p>主办方：<a href="#">'+n.league_name+'</a><a href=\"#\" title=\"关注此社团\"><img src=\"__Public__/Images/attention-small.png\"/></a></p><br><p>时间：'+n.start_time+'</p><br><p>地点：'+n.place+'</p><br /><img src=\"__Public__/Images/need-sign.png\" class=\"pull-right\"/></figcaption></figure>');
					$('#filter-container').append($item).isotope('appended',$item);
					isotope();
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
  jsonajax(0);
  //$('#filter-container').css("display","none");
  //setTimeout(function(){$('#topLoader').hide()},2000);
  //setTimeout(function(){$('#filter-container').css("display","block");$('#0').click();},2000); 
  
  $("#0").click(function(){
     $(".getmore").attr("id",0);
     $("#filter-container").html("");
	 $("#filter-container").isotope('destroy');
	 $('#filter-container').isotope({
		itemSelector : 'figure',
		masonry: {
			columnWidth: 310
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
			columnWidth: 310
		}
	});
  });
  
  $('.activityclass a').click(function(){
    
	//$("#filter-container").height("0");
    var classid=$(this).attr("id");
	$(".getmore").attr("id",classid);
	$(".getmore").html("加载更多");
    $.ajax({
      url:'{:U('getClassActivity')}',
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
						$items = $('<figure class="'+n.class +' isotope-item"><a href=\"#\" class=\"thumb\"><img src="__Uploads__/ActivityPost/'+n.post_add+'" alt=\"alt\" /></a><figcaption><div class="heading"><a data-toggle="modal" href="#myModal" class="activityname" id="'+n.id+'">'+n.name+'</a><a href="#" title="关注此活动"><img src="__Public__/Images/attention.png"/></a></div><p>主办方：<a href="#">'+n.league_name+'</a><a href=\"#\" title=\"关注此社团\"><img src=\"__Public__/Images/attention-small.png\"/></a></p><br><p>时间：'+n.start_time+'</p><br><p>地点：'+n.place+'</p><br /><img src=\"__Public__/Images/need-sign.png\" class=\"pull-right\"/></figcaption></figure>');
					else
				        $items = $('<figure class="'+n.class +' isotope-item"><figcaption><div class="heading"><a data-toggle="modal" href="#myModal" class="activityname" id="'+n.id+'">'+n.name+'</a><a href="#" title="关注此活动"><img src="__Public__/Images/attention.png"/></a></div><p>主办方：<a href="#">'+n.league_name+'</a><a href=\"#\" title=\"关注此社团\"><img src=\"__Public__/Images/attention-small.png\"/></a></p><br><p>时间：'+n.start_time+'</p><br><p>地点：'+n.place+'</p><br /><img src=\"__Public__/Images/need-sign.png\" class=\"pull-right\"/></figcaption></figure>');
				$("#filter-container").append($items).isotope('appended',$items);
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
				url:'{:U('leagueLogin')}',
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
			url:'{:U('Public/Login/logout')}',
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
	isotope();
 });