$(document).ready(function () {
	$('.menu').on('click', 'li', function () {
		$('.nav-list li.active').removeClass('active');
		$(this).addClass('active');
		console.log("vao");
	});
});