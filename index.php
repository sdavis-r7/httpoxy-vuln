<?php

/*
 * Guzzle Proxy Configuration by Remote User
 */

require 'vendor/autoload.php';

$client = new GuzzleHttp\Client([
        'proxy'   => 'tcp://'.getenv('HTTP_PROXY')
    ]);
$var = sha1(microtime(true).mt_rand(10000,90000));
$res = $client->request('POST', 'https://appspidered.rapid7.com/rfi/'.$var);

// echo "Request sent\n";
echo "Request sent ".$var." => ".$res->getBody()."\n";

