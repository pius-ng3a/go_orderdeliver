<?php

namespace App\Providers;
use App\Rule;
use App\User;
use Auth;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {   /**this method selects rules from database and bind to this view whenever it is used */
        view()->composer('partials/dashboardleftcolumn',function($view){
            $view->with('rules',\App\Rule::all(['rule_name','controller']));
        });

        view()->composer('partials/foodpartial',function($view){
            $view->with('items',\App\Item::all());//->where(['state',1]);

        });
        view()->composer('menu',function($view){
            $view->with('messages',\App\Item::all());//->where(['state',1]);

        });
        view()->composer('partials/productform',function($view){
            $id = Auth::user()->user_id;
            $view->with('shops',\App\Shop::all()->where('user_id',$id));

        });


    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
          'Iluminate\Contracts\Auth\Registrar',
            'App\Services\Registrar'
        );
    }
}
