$(document).ready(function () {
	$('#btn_menu').on('click', function (event) {
		event.preventDefault();
		$('#menu').toggleClass('open');
	});
	$('#menu a#btn_contact').on('click', function (event) {
		$('#menu').removeClass('open');
	});
	$(this).bind("contextmenu", function (e) {
		e.preventDefault();
	});
	
	$('#contact form').submit(function (event) {
		event.preventDefault();
		if (grecaptcha.getResponse() != "") {
			var data = {
				'name': $("#contact #name").val(),
				'mail': $("#contact #email").val(),
				'message': $("#contact #message").val()
			};
			$('.messgmodal').fadeIn('fast');
			setTimeout(function () {
				$.ajax({
					type: "POST",
					url: "mail.php",
					data: data,
					success: function () {
						$('.messgmodal').fadeOut('fast');
						$("#contact input,#contact textarea").val('');
						grecaptcha.reset();
					}
				});
			}, 1500);
		}
	});
});