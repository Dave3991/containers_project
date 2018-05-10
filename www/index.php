<?php
//skript pro prepocet
$container = require __DIR__ . '/../containers/appLoader/bootstrap.php';

$allContainers = $container->getService('appLoader')->load();

$allContainers['example']->getService('example')->helloWorld();