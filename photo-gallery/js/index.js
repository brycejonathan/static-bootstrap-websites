$(function() {
	$(".thumbail-img").click(function() {
		var imageURL= $(this).attr('src');
		$('#image-showcase').attr('src', imageURL);
		$('#light-box-modal').modal('show');
	});
});