<?php

// See https://maslosoft.com/embedi/docs/ for more information

require "vendor/autoload.php";

use Maslosoft\Addendum\Addendum;
use Maslosoft\EmbeDi\EmbeDi;
use Maslosoft\EmbeDi\Adapters\ArrayAdapter;

$config = [
	'addendum' => [
		// Addendum main class - required
		'class' => Addendum::class,
		// Check for modifications - other properties
		'checkMTime' => true,
	]
];
EmbeDi::fly()->addAdapter(new ArrayAdapter($config));

$ad = new Addendum;

var_dump($ad->checkMTime);