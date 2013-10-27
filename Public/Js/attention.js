$(document).ready(function(){
	$(".attentionactivity").click(function () {
		$.ajax({
			url:'/herald_league/index.php/Activity/Index/attentionactivity',
			type:'post',
			dataType:'text',
			data:'activityid='+$(this).prev('a').attr('id'),
			success:function(data){
				alert(data);
			}
		});
	});
	$(".attentionleague").click(function () {
		$.ajax({
			url:'/herald_league/index.php/Activity/Index/attentionleague',
			type:'post',
			dataType:'text',
			data:'leagueid='+$(this).prev('a').attr('id'),
			success:function(data){
				alert(data);
				//document.write(data);
			}
		});
	});
});