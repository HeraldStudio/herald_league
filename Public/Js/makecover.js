$(document).ready(function(){
	$('.setcover').click(function() {
		var picadd = $(this).attr('id');
		var albumid = $(this).attr('data-albumid');
		//alert(albumid);
		$.ajax({
			url: '/herald_league/index.php/League/Admin/setCover',
			type: 'post',
			dataType: 'text',
			data: {picadd: picadd, albumid: albumid},
		})
		.done(function(data) {
			alert(data);
		})
		.fail(function() {
			console.log("error");
		})
		.always(function() {
			console.log("complete");
		});
		
	});
});