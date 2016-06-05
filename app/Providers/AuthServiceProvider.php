<?php

namespace App\Providers;

use Illuminate\Contracts\Auth\Access\Gate as GateContract;
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
    ];

    /**
     * Register any application authentication / authorization services.
     *
     * @param  \Illuminate\Contracts\Auth\Access\Gate  $gate
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);

        $gate->define('access-dashboard', function ($user, $element) {
            return $user->id == $element->site_id;
        });

        $gate->define('access-aboutus', function ($user, $element) {
            return $user->id == $element->id;
        });

        $gate->define('access-pages', function ($user, $site) {
            return $user->id == $site->user_id;
        });
    }
}
