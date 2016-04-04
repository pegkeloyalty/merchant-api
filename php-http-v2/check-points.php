<?php

include('./config.php');

$client = new http\Client;
$request = new http\Client\Request;

$body = new http\Message\Body;
$body->addForm(array(
  'phone' => '', // Customers 10 digits mobile number
  'points' => '' // Points to the customer
), NULL);

$request->setRequestUrl(APIBASE);
$request->setRequestMethod('GET');
$request->setBody($body);

$request->setQuery(new http\QueryString(array(
  'q' => 'check_points',
  'phone_number' => '' // Cutomers 10 digit mobile number
)));

$request->setHeaders(array(
  'cache-control' => 'no-cache',
  'authorization' => 'Bearer CONSUMERCODE.CONSUMERSECRET'
));

$client->enqueue($request)->send();
$response = $client->getResponse();

echo $response->getBody();
