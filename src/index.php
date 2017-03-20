<?php

require '../vendor/autoload.php';

$cluster = [
    'tcp://192.168.99.100:7001',
    'tcp://192.168.99.100:7002',
    'tcp://192.168.99.100:7003',
    'tcp://192.168.99.100:6000',
    'tcp://192.168.99.100:6001',
    'tcp://192.168.99.100:6002',
];

$options    = ['cluster' => 'redis'];

$client = new Predis\Client($cluster, $options);

$client->set('foo', 'bar');
$value = $client->get('foo');

echo $value;

$client = new Predis\Client($cluster, $options);

$client->set('foo1', 'bar');
$value = $client->get('foo1');

echo $value;
$client = new Predis\Client($cluster, $options);

$client->set('foo2', 'bar');
$value = $client->get('foo2');

echo $value;
$client = new Predis\Client($cluster, $options);

$client->set('foo3', 'bar');
$value = $client->get('foo3');

echo $value;
$client = new Predis\Client($cluster, $options);

$client->set('foo4', 'bar');
$value = $client->get('foo4');

echo $value;
$client = new Predis\Client($cluster, $options);

$client->set('foo5', 'bar');
$value = $client->get('foo5');

echo $value;