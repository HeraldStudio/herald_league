$(document).ready(function(){
	$(".logout").click(function(){
		$.ajax({
			url:'/herald_league/index.php/Public/Login/logout',
			type:'post',
			dataType:'text',
			success:function(data){
				alert(data);
				history.go(0);
			}
		});
	});
	$("#leaguelogin").click(function(){
		if($("#inputEmail").val() == ""){
			alert("用户名不能为空");
		}else if($("#inputPassword").val() == ""){
			alert("密码不能为空");
		}else{
			$.ajax({
				url:'/herald_league/index.php/Index/leagueLogin.html',
				type:'post',
				dataType:'text',
				data:'email='+$("#inputEmail").val()+'&password='+$("#inputPassword").val(),
				success:function(data){
					alert(data);
					history.go(0);
				}
			});
		}
	});	
})