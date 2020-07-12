<?php

/*

---------------------------------------
License Setup
---------------------------------------

Please add your license key, which you've received
via email after purchasing Kirby on http://getkirby.com/buy

It is not permitted to run a public website without a
valid license key. Please read the End User License Agreement
for more information: http://getkirby.com/license

*/

c::set('license', 'K2-PRO-3192981bf4fa57c446f961fc7869fed6');

c::set('timezone','US/Pacific');

/* redirect 'about' route to 'contact' */
c::set('routes', array(
  array(
    'pattern' => 'about',
    'action'  => function() {
      return go('contact');
    }
  )
));

/*

---------------------------------------
Kirby Configuration
---------------------------------------

By default you don't have to configure anything to
make Kirby work. For more fine-grained configuration
of the system, please check out http://getkirby.com/docs/advanced/options

*/