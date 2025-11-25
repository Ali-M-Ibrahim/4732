<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->alias([
            'middleware1' => \App\Http\Middleware\CheckActive::class
        ]);

        $middleware->validateCsrfTokens(except: [
        'post-data',
            'create4',
            'create5',
            'update4/*',
            'update5/*'
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
