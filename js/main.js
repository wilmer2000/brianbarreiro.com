$(document).ready(function() {
	$('#btn_menu').on('click', function(event) {
		event.preventDefault();
		$('#menu').toggleClass('open');
	});
});