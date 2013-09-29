<?php

require 'API/TwitterAPIExchange.php';

$settings = array(
					'oauth_access_token' => '1915307030-DNIh8JCzh5ICStnuSkj9QRBf2r1g4VIHSQkxwq9',
					'oauth_access_token_secret' => 'JINKAyil7qCfniCVL0dcMCkAN9f8iliyIsJ63VcfYQ',
					'consumer_key' => 'v503eOFBqrNWZBFxuzWw',
					'consumer_secret' => 'LB4YrN37Pk0xfuMCSvxbe2RsSdJI4jQ8IfBJQ04VJA',
);

$url = "https://api.twitter.com/1.1/statuses/update.json";

$requestMethod = 'POST';

//
$postfields = array('status' => 'Hola este es mi segundo Tweet, Gracias a todos #AprendanPHP');

// Crear la instancia de coneccion con twitter
$twitter = new TwitterAPIExchange ($settings);

$response = $twitter->buildOauth($url, $requestMethod)
					->setPostfields($postfields)
					->performRequest();

?>