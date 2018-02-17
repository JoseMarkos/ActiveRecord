<?php

use Kumbia\ActiveRecord\Autoloader;

require_once __DIR__.'/Autoloader.php';

define('PRODUCTION', false);
define('APP_PATH', __DIR__.'/');

Autoloader::register();

class KumbiaException extends Exception
{
}
