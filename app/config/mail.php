<?php

return [
	'driver'     => 'smtp',
	'host'       => 'smtp.gmail.com',
	'port'       => 25,
	'from'       => ['address' => '	office@leed.ro', 'name' => 'Ofertare'],
	'encryption' => '',
	'username'   => "office@leed.ro",
	'password'   => "Traiesc1993",
	'sendmail'   => '/usr/sbin/sendmail -bs',
	'pretend'    => false,
];