<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

          // Auth Gate define
          Gate::define('isAdmin', function($user){
            if($user->priv === '1'){
              return 1;
            }
            return 0;
        });

        Gate::define('isParent', function($user){
            if($user->priv === '3'){
              return 1;
            }
            return 0;
        });

        Gate::define('isTeacher', function($user){
            if($user->priv === '2'){
              return 1;
            } return 0;
        });
    }
}
