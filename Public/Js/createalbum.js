$(document).ready(function(){
	$("#createAlbum").click(function(){
		if($("#inputAlbumName").val() == ""){
			alert("相册名称不能为空");
		}else if($("#inputAlbumInfo").val() == ""){
			alert("相册介绍不能为空");
		}else{
			var leagueid = $("#leagueid").val();
			$.ajax({
				url:'/herald_league/index.php/League/Admin/createAlbum',
				type:'post',
				dataType:'text',
				data:'albumname='+$("#inputAlbumName").val()+'&albumintro='+$("#inputAlbumInfo").val()+'&leagueid='+leagueid,
				success:function(data){
					if(data=="success"){
						window.location.reload();
					}
				}
			});
		}
	});	
})