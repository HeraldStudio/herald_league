$(document).ready(function(){
	$(".delete").click(function(){
		var id=$(this).attr("id");
		$("#deleteActivity button").attr("id",id);
	});

	$("#deleteActivity button").click(function(){
		var activityid = $("#deleteActivity button").attr("id");
		$.ajax({
			url:'/herald_league/index.php/League/Admin/deleteactivity',
			type:'post',
			dataType:'text',
			data:'activityid='+activityid,
			success:function(data){
				alert(data);
				history.go(0);
			}
		});
	});
})