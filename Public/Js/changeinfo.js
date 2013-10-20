function mycheck(){
	var groupname=document.getElementById("groupName");
	var grouimg=document.getElementById("groupImg");
	var groupintro=document.getElementById("groupIntro");
	var groupmum=document.getElementById("groupMum");
	var grouptel=document.getElementById("groupTel");
	var groupmail=document.getElementById("groupMail");
	var groupplace=document.getElementById("groupPlace");
	
	
	if(groupname.value==""){
		alert("怎么能不写社团名称呢？");
		return;
	}
	else if(grouimg.value==""){
		alert("您一定要上传一个社团头像哦");
		return;
	}
	else if(groupintro.value==""){
		alert("亲，要写社团介绍啦");
		return;
	}
	else if(groupmum.value==""){
		alert("您要介绍一下社团成员啊");
		return;
	}
	else if(grouptel.value==""){
		alert("留下联系电话吧");
		return;
	}
	else if(groupmail.value==""){
		alert("要写邮箱哦");
		return;
	}
	else{
		apos=groupmail.value.indexOf("@")
		dotpos=groupmail.value.lastIndexOf(".")
		if (apos<1||dotpos-apos<2) {
		alert("亲，邮箱格式不正确啊");
		return;
		}
	}

}

function cleanAll()
{
	document.getElementById("groupName").value="";
	document.getElementById("unclass").value="";
	document.getElementById("groupTel").value="";
	document.getElementById("groupMail").value="";
	document.getElementById("groupPlace").value="";
	//document.getElementById("groupImg").value="";
	document.getElementById("groupIntro").innerText="a";
	//document.getElementById("groupIntro").value="";
	//document.getElementById("groupIntro").text=none;
	//document.getElementById("groupMum").innerHTML="";
}
