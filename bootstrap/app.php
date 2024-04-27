<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {

    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
    $app->register(\Barryvdh\DomPDF\ServiceProvider::class);
    $middlewareGroup=[
        'auth'=>[
            'middleware'=>[
                'App\Http\Middleware\Authenticate',
                'throttle:60,1',
                \Illuminate\Session\Middleware\StartSession::class,
                \Illuminate\Cookie\MiddleWare\EncryptCookie::class,
                \Illuminate\View\Middleware\ShareErrors::class,
                \Illuminate\Routing\Middleware\ValidateRequests::class,
                \App\Http\Middleware\CheckForMaintenanceMode::class
            ],
            'redirect'=>"Connexion-utilisateur",
        ],
    ];
