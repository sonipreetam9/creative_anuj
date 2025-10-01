<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\ServiceModel;

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

        $comp_title = "Creative Tech Studio";
        $comp_url = "www.creativetechstudio.in";
        $comp_phone = "93064-39947";
        $comp_email = "info@creativetechstudio.in";
        $comp_address = "Sirsa, HR";
        $small_logo = 'admin1/assets/images/logo.png';
        $dashboard_logo = 'admin1/assets/images/logo.png';
        $login_logo = 'admin1/assets/images/admin-logo.png';

        view()->share('comp_title', $comp_title);
        view()->share('comp_url', $comp_url);
        view()->share('comp_phone', $comp_phone);
        view()->share('comp_email', $comp_email);
        view()->share('comp_address', $comp_address);
        view()->share('small_logo', $small_logo);
        view()->share('dashboard_logo', $dashboard_logo);
        view()->share('login_logo', $login_logo);

        $services = ServiceModel::orderBy('id', 'ASC')->get();
        view()->share('services', $services);


    }


}
