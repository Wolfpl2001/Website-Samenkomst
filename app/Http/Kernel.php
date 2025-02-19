<?php
// app/Http/Kernel.php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
/**
* The application's global HTTP middleware stack.
*
* These middleware are run during every request to your application.
*
* @var array
*/
protected $middleware = [
// andere middleware
];

/**
* The application's route middleware groups.
*
* @var array
*/
protected $middlewareGroups = [
'web' => [
// andere middleware
],

'api' => [
'throttle:api',
\Illuminate\Routing\Middleware\SubstituteBindings::class,
],
];

/**
* The application's route middleware.
*
* These middleware may be assigned to groups or used individually.
*
* @var array
*/
protected $routeMiddleware = [
// andere middleware
'admin' => \App\Http\Middleware\Admin::class, // Hier voeg je je middleware toe
];
}