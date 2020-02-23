<?php
/**
 * 文件描述：
 * Created by PhpStorm.
 * User: 36168
 * Date: 2020/2/23
 * Time: 20:39
 */

namespace TinyShop\App\Provider;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class TinyShopProvider  extends ServiceProvider
{

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        //注册路由
        $this->registerRoutes();
        //注册视图组件
        $this->loadViewsFrom(
            __DIR__.'/../../resources/views', 'tinyshop'
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }


    private function routeConfiguration()
    {
        return [
            'namespace' => 'TinyShop\App\Controllers',
            'prefix' => 'tinyshop',
            'middleware'=> 'web'
        ];
    }


    private function registerRoutes()
    {
        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__.'/../routes.php');
        });
    }

}