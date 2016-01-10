<?php

return [
	'driver'     => 'smtp',
	'host'       => 'smtp.gmail.com',
	'port'       => 465,
	'from'       => ['address' => 'lupacescueduard@gmail', 'name' => 'Ofertare'],
	'encryption' => 'ssl',
	'username'   => "lupacescueduard@gmail.com",
	'password'   => "Traiesc.Kasper",
	'sendmail'   => '/usr/sbin/sendmail -bs',
	'pretend'    => false,
];