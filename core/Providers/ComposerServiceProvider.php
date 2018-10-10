<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

//use Auth;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function boot()
    {
        // Using class based composers...
       		 View::composer(
            'layouts.sidebar',  'App\Http\ViewComposers\MenuComposer'
        );
        View::composer(
            'layouts.modals.modals',  'App\Http\ViewComposers\MenuComposer'
        );
        View::composer(
            'layouts.category',  'App\Http\ViewComposers\MenuComposer'
        );
        View::composer(
            'layouts.recent-task',  'App\Http\ViewComposers\MenuComposer'
        );
        View::composer(
            'layouts.header',  'App\Http\ViewComposers\MenuComposer'
        );
        View::composer(
            'Dashboard.index',  'App\Http\ViewComposers\MenuComposer'
        );
        View::composer(
            'layouts.dashboard.breadcrumbs',  'App\Http\ViewComposers\MenuComposer'
        );
        View::composer(
            'layouts.dashboard.main',  'App\Http\ViewComposers\MenuComposer'
        );
        View::composer(
            'layouts.visiblefooter',  'App\Http\ViewComposers\MenuComposer'
        );
        // die(1);
       /* // Using Closure based composers...
        View::composer('dashboard', function ($view) {
            //layouts.dashboard.main
        });*/
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}