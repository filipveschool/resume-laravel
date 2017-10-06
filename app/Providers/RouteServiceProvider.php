<?php

namespace App\Providers;

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerMacros();

        parent::boot();
    }

    protected function registerMacros()
    {
        Router::macro('module', function ($module, $sortable = false) {
            $controller = ucfirst($module) . 'Controller';
            if ($sortable) {
                Route::patch("{$module}/changeOrder", $controller . '@changeOrder');
            }
            Route::resource($module, $controller);
        });
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();
        $this->mapFrontWebRoutes();
        $this->mapBackWebRoutes();
        //
    }


    protected function mapFrontWebRoutes()
    {
        //Route::middleware( [ 'web', 'demoMode', 'rememberLocale' ] )
        //Route::middleware( [ 'web', 'rememberLocale' ] )
        //Route::middleware( [ 'web' ] )
        Route::middleware(['web', 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])
            ->namespace($this->namespace)
            ->group(function () {
                //$multiLingual = count( config( 'app.locales' ) ) > 1;

                //Route::group($multiLingual ? ['prefix' => locale()] : [], function () {
                //Route::group( $multiLingual ? [ 'prefix' => localeUrl() ] : [], function () {
                Route::group(['prefix' => LaravelLocalization::setLocale()], function () {

                    //Route::group([], function () {
                    try {
                        require base_path('routes/front.php');
                    } catch (Exception $exception) {
                        logger()->warning("Front routes weren't included because {$exception->getMessage()}.");
                    }
                });

                /*if ( $multiLingual ) {
                Route::get( '/', function () {
                    //return redirect( locale() );
                    return redirect( Session::get( 'locale') );
                } );
                }*/
            });
    }

    protected function mapBackWebRoutes()
    {

        /*
         * Back site
         */
        Route::prefix('blender')
            ->middleware('web')
            ->namespace($this->namespace)
            ->group(function () {
                require base_path('routes/backauth.php');
                Route::middleware('auth')
                    ->group(base_path('routes/back.php'));
            });
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/web.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
            ->middleware('api')
            ->namespace($this->namespace)
            ->group(base_path('routes/api.php'));
    }

    protected function mapSpecialRoutes()
    {
        /*
            * Special routes
            */
        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(function () {
                Route::demoAccess('/demo');

                Route::get('coming-soon', function () {
                    return view('temp/index');
                });
            });
    }
}
