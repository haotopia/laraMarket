<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider {
	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot() {
		\App\Models\User::observe(\App\Observers\UserObserver::class);
		\App\Models\Goods::observe(\App\Observers\GoodsObserver::class);
		\App\Models\Category::observe(\App\Observers\CategoryObserver::class);
		\App\Models\Address::observe(\App\Observers\AddressObserver::class);
		\App\Models\Store::observe(\App\Observers\StoreObserver::class);

		//
	}

	/**
	 * Register any application services.
	 *
	 * @return void
	 */
	public function register() {
		//
	}
}
