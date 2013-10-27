$(document).ready(function(){
	$(".delete").click(function(){
		var id=$(this).attr("id");
		$("#deleteAlbum button").attr("id",id);
	});

	$("#deleteAlbum button").click(function(){
		var albumid = $("#deleteAlbum button").attr("id");
		var leagueid = $("#albumleagueid").val();
		$.ajax({
			url:'/herald_league/index.php/League/Admin/deletealbum',
			type:'post',
			dataType:'text',
			data:'albumid='+albumid+'&leagueid='+leagueid,
			success:function(data){
				alert(data);
				history.go(0);
			}
		});
	});
})