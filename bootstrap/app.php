<?php

use App\Http\Middleware\Admin;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Support\Facades\Route;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
        then: function () {  // Corrected syntax
            Route::prefix('backend')
                ->name('backend.')
                ->group(base_path('routes/backend.php'));

            Route::name('index.')
            ->group(base_path('routes/frontend.php'));
        }
    )  // Ensure this closing bracket is correctly placed
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->append(Admin::class);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })
    ->create();  // Ensure this is placed correctly
