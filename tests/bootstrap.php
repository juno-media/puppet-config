<?php

require_once __DIR__.'/../vendor/autoload.php';
$loader = new \Composer\Autoload\ClassLoader();
$loader->addPsr4('Juno\\Tests\\', __DIR__);
