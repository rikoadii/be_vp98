<?php

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Maintenance mode
if (file_exists(__DIR__.'/storage/framework/maintenance.php')) {
    require __DIR__.'/storage/framework/maintenance.php';
}

// Autoloader
require __DIR__.'/vendor/autoload.php';

// Bootstrap Laravel
(require __DIR__.'/bootstrap/app.php')
    ->handleRequest(Request::capture());
