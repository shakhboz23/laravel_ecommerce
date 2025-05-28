<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

// ✅ Laravel'ni yaratishdan oldin Application instance yarating
$app = new Application(
    basePath: dirname(__DIR__)
);

// ✅ Storage path'ni o‘zgartiring (muammo shundan kelib chiqmoqda)
$app->useStoragePath(env('LARAVEL_STORAGE_PATH', '/tmp/storage'));

// ✅ So'ngra Laravel ilovasini konfiguratsiya qiling
return $app->configure()
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
