<?php

namespace App\Providers;

use App\Models\PortfolioHeadingModel;
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
        $comp_address = "Satnam Chowk, Begu Road, Sirsa";
        $small_logo = 'admin1/assets/images/logo.png';
        $dashboard_logo = 'admin1/assets/images/logo.png';
        $login_logo = 'admin1/assets/images/admin-logo.png';
        $facebook = 'https://www.facebook.com/creativetechstudio47';
        $youtube = 'https://www.youtube.com/@CreativeTechStudio47';
        $instagram = 'https://www.instagram.com/creativetechstudio47';

        view()->share('comp_title', $comp_title);
        view()->share('comp_url', $comp_url);
        view()->share('comp_phone', $comp_phone);
        view()->share('comp_email', $comp_email);
        view()->share('comp_address', $comp_address);
        view()->share('small_logo', $small_logo);
        view()->share('dashboard_logo', $dashboard_logo);
        view()->share('login_logo', $login_logo);
        view()->share('facebook', $facebook);
        view()->share('youtube', $youtube);
        view()->share('instagram', $instagram);

        $services = ServiceModel::orderBy('id', 'ASC')->get();
        view()->share('services', $services);

        $portfolioheading = PortfolioHeadingModel::orderBy('id', 'ASC')->get();
        view()->share('portfolioheading', $portfolioheading);


    }


}
