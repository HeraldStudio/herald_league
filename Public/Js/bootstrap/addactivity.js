var ifvote=false;
function myclick(){
	if(ifvote==false){
		$("#vote").slideToggle("slow");
		document.getElementById("votebut").innerHTML="收起投票";
		ifvote=true;
	}else{
		$("#vote").slideToggle("slow");
		document.getElementById("votebut").innerHTML="发起投票";
		ifvote=false;
	}
}

function mycheck(){
	var actname=document.getElementById("actName");
	var actplace=document.getElementById("actPlace");
	var acttel=document.getElementById("actTel");
	var actinfo=document.getElementById("activityinfo");

	if(actname.value==""){
		alert("要写活动名称哦~~");
	}
	else if(actplace.value==""){
		alert("不要忘了活动地点啊~~");
	}
	else if(acttel.value==""){
		alert("记得填写联系方式哟~~");
	}
	else if(actinfo.value==""){
		alert("活动详细信息很重要呀~~");
	}
	
}

var count=1;
function addvote()
{ 
	count=count+1;
	var newNode = document.createElement("div");
	newNode.innerHTML = "<div class='controls' id='vote"+count+"'>" + count + ".<input type='text' class='input-xlarge' style='margin-bottom:10px;'/> "+
		"&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  "+
		"&nbsp &nbsp &nbsp &nbsp<input type='file' style='width:180px;'/></div>"; 
	var parentNode = document.getElementById("votes"); 
	parentNode.appendChild(newNode); 
}
function delvote()
{
	var pNode = document.getElementById("votes"); 
	var delNode=pNode.lastChild; 
	if(count==1)
	{
		alert("请放过最后一个选项吧");
		return;
	}
	count=count-1;
	pNode.removeChild(delNode);
}