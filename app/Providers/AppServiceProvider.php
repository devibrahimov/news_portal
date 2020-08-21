<?php

namespace App\Providers;

use App\Setting;
use App\Category;
//use App\Posts;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $setting =  Setting::find('1');
        $category = Category::where('parentId','=',0)->get();


        View::share([
            'setting'    => $setting ,
            'categories' => $category,
         
        ]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
