<?php
require __DIR__ . '/vendor/autoload.php';

use Twilio\Rest\Client;

$sid = 'AC84592d718b3b96a058f3fbbc165619dd';
$token = '826403b0e387d20750b9a653905e080d';

$client = new Client($sid, $token);

$client->messages->create(
	'+923422641109',
	array(
		'from'=>'+18599031252',
		'body'=>'Hello World, from Twilio'
	)
);
?>
