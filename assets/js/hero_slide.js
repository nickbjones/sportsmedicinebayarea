/* Script to rotate hero image */
$(document).ready(function() {
	var n = 3,  // number of images in directory
		t = 5,  // image display time (seconds)
		v = 500,  // fade speed (milliseconds)
		i = 0;  // increment--DO NOT MODIFY

	setInterval(function() {
		(i%n == 0) ? i = 1 : i++;  // increment or reset i (to keep i from getting to large)
		$('.slide'+((i-1)%n)).fadeTo(v, 0);  // fade out last image
		$('.slide'+(i%n)).fadeTo(v, 1);  // fade in next image
	}, t*1000);
});