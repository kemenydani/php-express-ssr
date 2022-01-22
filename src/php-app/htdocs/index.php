<?php

use src\core\App;

define('__ROOT__', __DIR__);

require_once '../vendor/autoload.php';

$page = @$_GET['page'];

if ($page) {
    (new App($page))->run();
}