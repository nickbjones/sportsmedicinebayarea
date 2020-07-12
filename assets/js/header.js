/* bind event listeners to header elements to trigger actions */
$(document).ready(function(){
	$('#ham_btn').on('click', function(){  // click/tap
		$('#ham_menu').slideToggle();
	});
	$('nav #navbar li a.sub').on('click', function(){
		$(this).siblings('ul').toggle();
	});
});