<?php

require 'API/TwitterAPIExchange.php';

$settings = array(
					'oauth_access_token' => 'Your Access App Token',
					'oauth_access_token_secret' => 'Your Access Secret App Token',
					'consumer_key' => 'Your consumer_key',
					'consumer_secret' => 'Tu Consumer_Secret',
);

$url = "https://api.twitter.com/1.1/statuses/update.json";

$requestMethod = 'POST';

//
$postfields = array('status' => 'Hola este es mi segundo Tweet, Gracias a todos #AprendanPHP');

// Crear la instancia de conexion con twitter
$twitter = new TwitterAPIExchange ($settings);

$response = $twitter->buildOauth($url, $requestMethod)
					->setPostfields($postfields)
					->performRequest();

?>
