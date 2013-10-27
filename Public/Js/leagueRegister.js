jQuery(document).ready(function($) {
	$('#league_regester').click(function() {
		var leaguename = $("#leaguename").val() ;
		var email = $("#email").val();
		var password = $("#password").val();
		$.ajax({
			url: '/herald_league/index.php/League/Index/addleague',
			type: 'post',
			dataType: 'json',
			data: {leaguename: leaguename, email: email, password: password},
		})
		.done(function(data) {
			if(data.code == 200){
				window.location = data.url;
			}else{
				alert("用户名/邮箱已经注册!");
			}
		})
		.fail(function() {
			console.log("error");
		})
		.always(function() {
			console.log("complete");
		});
	});
});