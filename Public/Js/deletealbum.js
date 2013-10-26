$(document).ready(function(){
	$(".delete").click(function(){
		var id=$(this).attr("id");
		$("#deleteAlbum button").attr("id",id);
	});

	$("#deleteAlbum button").click(function(){
		var albumid = $("#deleteAlbum button").attr("id");
		$.ajax({
			url:'/herald_league/index.php/League/Admin/deleteAlbum',
			type:'post',
			dataType:'text',
			data:albumid,
			success:function(data){
				if(data){
					alert("删除成功");
					window.location.reload();
				}
			}
		});
	});
})