<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminIndexController;
use App\Http\Controllers\AdminAboutController;
use Illuminate\Support\Facades\Artisan;
use GuzzleHttp\Middleware;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/optimize', function () {
    // Clear all caches
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    Artisan::call('optimize:clear');

    // Re-optimize the application
    Artisan::call('config:cache');
    Artisan::call('route:cache');
    Artisan::call('view:cache');
    Artisan::call('optimize');

    return '✅ सभी कैश और कॉन्फ़िगरेशन सफलतापूर्वक क्लियर और ऑप्टिमाइज़ कर दिए गए हैं!';
});


Route::get('/', [IndexController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'about'])->name('about');
Route::get('/services', [ServiceController::class, 'service'])->name('services');
Route::get('/service-detail', [ServiceController::class, 'serviceDetail'])->name('service-detail');
Route::get('/portfolio', [PortfolioController::class, 'portfolio'])->name('portfolio');
Route::get('/blog', [BlogController::class, 'blog'])->name('blog');
Route::get('/blog-details', [BlogController::class, 'blogDetails'])->name('blog-details');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');

// Admin Route



Route::group(
    ['middleware' => 'guest'],
    function () {
        Route::get('/admin', [AdminIndexController::class, 'AdminIndexPage'])->name('admin.index');
        Route::post('/admin/login', [AdminIndexController::class, 'AdminLogin'])->name('admin.login');
        Route::get('/admin/register', [AdminIndexController::class, 'AdminRegister'])->name('admin.register');
        Route::post('/admin/register', [AdminIndexController::class, 'Admin_register_post'])->name('admin.post.register');
    }
);

Route::group(['prefix' => 'admin', 'middleware' => ['auth:admin']], function () {
    Route::get('/dashboard', [AdminIndexController::class, 'AdminDashboard'])->name('admin.dashboard');
    Route::get('/about', [AdminAboutController::class, 'AdminAbout'])->name('admin.about');
    Route::post('/about/post', [AdminAboutController::class, 'AdminAboutPost'])->name('admin.about.post');
    Route::get('/about/edit/{id}', [AdminAboutController::class, 'AdminAboutEdit'])->name('admin.about.edit');
    Route::post('/about/delete/{id}', [AdminAboutController::class, 'AdminAboutDelete'])->name('admin.about.delete');
    Route::get('/logout', [AdminIndexController::class, 'AdminLogout'])->name('admin.logout');

});




