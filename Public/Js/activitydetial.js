$(document).ready(function(){
	$(".activityname").click(function(){	
		var activityname = $(this).html();
		$(".modal-header>h3").html(activityname+$(".modal-header>h3").html());
	});
});
