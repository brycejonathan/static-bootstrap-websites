$(function() {
	$(document).on('click', '.navButton', function(e) {
		$('html, body').animate({
			scrollTop: $($(this).attr('href')).offset().top
		}, 2000);

		e.preventDefault();
	})

	$(document).on('click', '.navLi', function(e) {
		$('.navLi').removeClass('active');
		$(this).addClass('active');
	});
});