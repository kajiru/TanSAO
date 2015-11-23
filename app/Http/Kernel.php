<?php

namespace TanSAO\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * @var array
     */
    protected $middleware = [
        \Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode::class,
        \TanSAO\Http\Middleware\EncryptCookies::class,
        \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
        \Illuminate\Session\Middleware\StartSession::class,
        \Illuminate\View\Middleware\ShareErrorsFromSession::class,
        \TanSAO\Http\Middleware\VerifyCsrfToken::class,
    ];

    /**
     * The application's route middleware.
     *
     * @var array
     */
    protected $routeMiddleware = [
        'auth'       => \TanSAO\Http\Middleware\Authenticate::class,
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'guest'      => \TanSAO\Http\Middleware\RedirectIfAuthenticated::class,
        'admin'      =>\TanSAO\Http\Middleware\VerifyAdmin::class,
        'student'    =>\TanSAO\Http\Middleware\VerifyStudent::class,
        'infoViewer' =>\TanSAO\Http\Middleware\VerifyInformationViewer::class,
    ];
}
