<?php
//skript pro spousteni pouze gui
$container = require __DIR__ . '/../containers/appLoader/bootstrap.php';

$allContainers = $container->getService('appLoader')->load($container);

$allContainers['gui']->getService('guiLoader')->hello();