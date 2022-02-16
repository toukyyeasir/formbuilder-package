<?php
namespace Toukyyeasir\Form;

use Illuminate\Support\ServiceProvider;

class FormServiceprovider extends ServiceProvider
{
    public function boot()
    {

    }
    public function register()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__. '/views','form');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
    }

}