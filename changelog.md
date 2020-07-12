## 2/15/16 - Initial release
	1. Domain: http://www.sportsmedicinebayarea.org
	2. Walnut Creek location removed

## 3/16/16
	1. 0491: created Google Analytics account at sportsmedicine.analytics@gmail.com and added script
		- snippets/header.php
	2. 0454: added favicon in assets/images and link tag
		- snippets/header.php
	3. 0505: added kirbytext() function call on content echos where missing
		- templates/contact.php
		- templates/person.php
		- snippets/header.php
		- snippets/footer.php
		- snippets/responsive_nav.php
		- snippets/post.php
		- snippets/person.php
	4. 0503: changed "Preoperative directions" to "Preoperative instructions"
		- templates/contact.php

## 3/27/16
	1. 0533: added kirbytext() function call on copyright echo in footer
		- snippets/footer.php
	2. 0526: fixed text overflowing on profile snippet in IE
		- sass/_page_profiles.scss
		- snippets/person.php
	3. 0531: fixed background issue in IE
		- sass/_common.scss
		- js/html5shim.js (ADDED)
	4. 0515: added font smoothing
		- sass/_common.scss