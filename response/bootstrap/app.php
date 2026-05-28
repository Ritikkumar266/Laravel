<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\AgeCheck;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        // $middleware->append(AgeCheck::class);
        //with append fxn we are able to register the middleware as global middleware

        $middleware->alias(["agecheck"=>AgeCheck::class]);
        //Route Middleware: the middleware that works on single route
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();


//In bootstrap app.php file we have to register the middleware 1)Global Middleware(append function)  2)Route Middleware