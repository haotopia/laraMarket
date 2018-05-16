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
		 \App\Models\Good::class => \App\Policies\GoodPolicy::class,
		 \App\Models\Category::class => \App\Policies\CategoryPolicy::class,
		 \App\Models\Address::class => \App\Policies\AddressPolicy::class,
		 \App\Models\Store::class => \App\Policies\StorePolicy::class,
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
