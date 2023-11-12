<?php

use Codexpress\viauy\libs\App;

session_start();
require_once 'vendor/autoload.php';
require_once 'config/config.php';
require_once 'config/secrets.php';
//echo "llama al main si dd";
App::iniciar();
