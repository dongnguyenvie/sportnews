<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
        //App\Post::class => \App\Policies\PostPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // Gate::before(function ($user, $ability) {
        //     if ($user->level === 1) {
        //         return true;
        //     }
        // });


        Gate::define('admin',function($user){
            if($user->level === 1) return true;
        });


        Gate::define('user',function($user){
            if($user->level === 0) return true;
        });

        Gate::define('advertisor',function($user){
            if($user->level === 2) return true;
        });
    }
}
