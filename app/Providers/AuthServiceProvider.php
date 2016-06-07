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

        $gate->define('access-news_promotions', function ($user, $element) {
            return $user->site->id == $element->site_id;
        });

        $gate->define('access-crusal', function ($user, $crual) {
            return $user->site->id == $crual->site_id;
        });

        $gate->define('access-aboutus', function ($user, $element) {
            return $user->site->id == $element->site_id;
        });

        $gate->define('access-pages', function ($user, $site) {
            return $user->id == $site->user_id;
        });

        $gate->define('access-menus', function ($user, $menu) {
            return $user->site->id == $menu->site_id;
        });
    }
}
