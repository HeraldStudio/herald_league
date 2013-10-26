$(document).ready(function(){
	$(".delete").click(function(){
		var id=$(this).attr("id");
		$("#deleteAlbum button").attr("id",id);
	});

	$("#deleteAlbum button").click(function(){
		var albumid = $(this).attr("id");
		$.ajax({
			url:'',
			type:'post',
			dataType:'text',
			data:albumid,
			success:function(data){
				if(data=="success"){
					alert("删除成功");
					window.location.reload();
				}
			}
		});
	});
})