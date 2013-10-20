function mycheck(){
	var actname=document.getElementById("actName");
	var actplace=document.getElementById("actPlace");
	var acttel=document.getElementById("actTel");
	var actinfo=document.getElementById("activityinfo");

	if(actname.value==""){
		alert("要写活动名称哦~~");\
		return;
	}
	else if(actplace.value==""){
		alert("不要忘了活动地点啊~~");
		return;
	}
	else if(acttel.value==""){
		alert("记得填写联系方式哟~~");
		return;
	}
	else if(actinfo.value==""){
		alert("活动详细信息很重要呀~~");
		return;
	}
}