$(window).load(function(){
	isotope();
});

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
         url:'/herald_league/index.php/Index/getMoreActivity.html',
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
						$item = $('<figure class="'+n.league_class +' isotope-item"><a href="/herald_league/index.php/Activity/Index/activity/activityid/'+n.id+'" class=\"thumb\"><img  src="/herald_league/Uploads/ActivityPost/m_'+n.post_add+'"/></a><figcaption><div class="heading"><a href="/herald_league/index.php/Activity/Index/activity/activityid/'+n.id+'" class="activityname" id="'+n.id+'">'+n.name+'</a></div><p>主办方：<a href="#">'+n.league_name+'</a></p><p>时间：'+n.start_time+'</p><p>地点：'+n.place+'</p></figcaption></figure>');
					else
						$item = $('<figure class="'+n.league_class +' isotope-item"><figcaption><div class="heading"><a href="/herald_league/index.php/Activity/Index/activity/activityid/'+n.id+'"" class="activityname" id="'+n.id+'">'+n.name+'</a></div><p>主办方：<a href="#">'+n.league_name+'</a></p><p>时间：'+n.start_time+'</p><p>地点：'+n.place+'</p></figcaption></figure>');
					$('#filter-container').append($item).isotope('appended',$item);		
			     }
			     isotope();
			} 
			else{  
					alert("没有更多了..."); 
					$(".getmore").html("没有更多了...");
				}
         }
     });
 } 

$(function(){
	isotope();
  jsonajax(0);
  $("#0").click(function(){
     $(".getmore").attr("id",0);
     $("#filter-container").html("");
	 $("#filter-container").isotope('destroy');
	 isotope();
	 $("#no-activity").css("display","none");
     jsonajax(0);
	 $(".getmore").html("加载更多");
  });
  
    $(".getmore").click(function(){ 	      
		jsonajax($(this).attr("id"));	
		isotope();
	});

  $('#filter-buttons a').click(function(){
		var $optionSet = $(this).parents('#filter-buttons');
	    $optionSet.find('.selected').removeClass('selected');
	    $(this).addClass('selected');
	});

  $('.activityclass a').click(function(){
   $("#filter-container").html("");
	 $("#filter-container").isotope('destroy');
	 isotope();
  });

$('.activityclass a').click(function(){
  $("#no-activity").css("display","none");
	var lastid = $(".activityname:last").attr('id');
    if(!lastid){
     	lastid = $("#acn").val();
     }  
  var classid=$(this).attr("id");
	$(".getmore").attr("id",classid);
	$(".getmore").html("加载更多");
  $.ajax({
	       async : false,
         url:'/herald_league/index.php/Index/getMoreActivity.html',
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
											$item = $('<figure class="'+n.league_class +' isotope-item"><a href="/herald_league/index.php/Activity/Index/activity/activityid/'+n.id+'" class=\"thumb\"><img  src="/herald_league/Uploads/ActivityPost/m_'+n.post_add+'"   /></a><figcaption><div class="heading"><a href="/herald_league/index.php/Activity/Index/activity/activityid/'+n.id+'" class="activityname" id="'+n.id+'">'+n.name+'</a></div><p>主办方：<a href="#">'+n.league_name+'</a></p><p>时间：'+n.start_time+'</p><p>地点：'+n.place+'</p></figcaption></figure>');
										else
											$item = $('<figure class="'+n.league_class +' isotope-item"><figcaption><div class="heading"><a href="/herald_league/index.php/Activity/Index/activity/activityid/'+n.id+'" class="activityname" id="'+n.id+'">'+n.name+'</a></div><p>主办方：<a href="#">'+n.league_name+'</a></p><p>时间：'+n.start_time+'</p><p>地点：'+n.place+'</p></figcaption></figure>');
										$('#filter-container').append($item).isotope('appended',$item);
								     }
								     isotope();				
							} 
						else{
							$("#no-activity").css("display","block");
							$(".getmore").html("没有更多了...");
							}		
	   			}
     });
	});

});

