function signup_submit(){
	var leaguename = $("input[name='leaguename']").val() ;
	var email = $("input[name='email']").val();
	var password = $("input[name='password']").val();
	var obj = {"leaguename":leaguename,"email":email,"password":password};
	$.ajax({
		url:"",
		type:'post',
		async:false,
		dataType: 'json',
		data: obj,
		success:function(data){
			if(data=="success"){
				alert("注册成功");
				window.location = '/herald_league/index.php/Activity/Index/index.html';
			}
		}
	});
}