$(document).ready(function($) {
	$('.add-new-account').click(function(event){
		event.preventDefault();
		$('.create-account').slideToggle(300);
	});
	$('.other-address').click(function(event){
		event.preventDefault();
		$('.form-address').slideToggle(300);
	});

	$('.click-login').click(function(event){
		event.preventDefault();
		$('.login-hidden').slideToggle(300);
	});
});

