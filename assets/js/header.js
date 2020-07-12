/* bind event listeners to header elements to trigger actions */
$(document).ready(function(){
	$('#ham_btn').on('click', function(){  // click/tap
		$('#ham_menu').slideToggle();
	});
	$('#phone_btn').on('click', function(){
		$('#phone_menu').slideToggle();
	});
	$('*:not(#ham_btn,#phone_btn)').on('click', function(){
		// $('#ham_menu,#phone_menu').hide();
	});
	$('nav #navbar li a.sub').on('click', function(){
		$(this).siblings('ul').toggle();
	});
});