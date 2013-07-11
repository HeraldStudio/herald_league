$(document).ready(function(){
	$(".activityname").click(function(){
		$(".modal-header>h3>span").html($(this).html());
		$("#league_name>a").html($(".leaguename").html());
		$("#model_time").html($("#time").html());
		$("#model_place").html($("#place").html());
		$("#actpost").attr('src',$("#activitypost").attr('src'));
		$.ajax({
			url:'/herald_league/index.php/Index/getActivityAttention.html',
			type:'post',
			dataType:'json',
			data:'activityid='+$(this).attr('id'),
			success:function(data){
				$("#connectinfo").html(data.activityinfo.connect_info);
				$("#introduction").html(data.activityinfo.introduction);
				$.each(data.attentioninfo, function(i, n){
					$("#attention").append("<div class=\"span4\"><img src=\"/herald_league/Uploads/UserAvatar/"+n.avatar_address+"\"/><br>"+n.user_true_name+"</div>");
				})
			}
		});
	});
});
