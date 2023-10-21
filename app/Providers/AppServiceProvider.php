<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use App\Models\Server\Service\Service;
use App\Models\Server\Business\Setup;
use App\Models\Server\Company_detail;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrap();
        
        view()->composer(['client.layout.menu','client.layout.footer','client.layout.header','server.layout.*'], function ($view) {
            $services = Service::with('service_details')->get()->all();
            $setups = Setup::with('setup_details')->get()->all();
            $company = Company_detail::get()->first();
            $view->with(compact('services','company','setups'));
        });
    }
}
