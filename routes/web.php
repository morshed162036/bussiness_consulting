<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Server\AdminController;
use App\Http\Controllers\Server\BannerController;
use App\Http\Controllers\Server\Service\ServiceController;
use App\Http\Controllers\Server\Service\ServiceDetailController;
use App\Http\Controllers\Server\Business\SetupController;
use App\Http\Controllers\Server\Business\SetupDetailController;
use App\Http\Controllers\Server\ReviewController;
use App\Http\Controllers\Server\CounterController;
use App\Http\Controllers\Server\CompanyDetailController;
use App\Http\Controllers\Server\AboutCompanyController;
use App\Http\Controllers\Server\TeamMemberController;
use App\Http\Controllers\Server\CEOMessageController;
use App\Http\Controllers\Server\AboutTabController;
use App\Http\Controllers\Server\PricingPlaneController;
use App\Http\Controllers\Server\QuestionController;
use App\Http\Controllers\Server\Blog\BlogCategoryController;
use App\Http\Controllers\Server\Blog\BlogPostController;
use App\Http\Controllers\Server\ContactController;
use App\Http\Controllers\Server\AppointmentController;

use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\AboutPageController;
use App\Http\Controllers\Client\ContactPageController;
use App\Http\Controllers\Client\BusinessSetupController;
use App\Http\Controllers\Client\OrderPageController;
use App\Http\Controllers\Client\BlogPageController;
use App\Http\Controllers\Client\ServiceController as Service;
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

Route::get('/',[HomeController::class,'index'])->name('client.home');

Route::prefix('/')->group(function(){
    Route::resource('service-page',Service::class);
    Route::resource('setup-page',BusinessSetupController::class);
    Route::get('about-page',[AboutPageController::class,'index'])->name('client.about-page');
    Route::get('contact-page',[ContactPageController::class,'index'])->name('client.contact-page');
    Route::post('contact-page',[ContactPageController::class,'store'])->name('client.contact-page-store');
    Route::resource('order-page', OrderPageController::class);
    Route::resource('blog-page', BlogPageController::class);
    Route::match(['get','post'],'login',[AdminController::class,'login'])->name('login');
    Route::group(['middleware'=>['user']],function(){
        Route::get('logout',[AdminController::class,'logout'])->name('logout');
        Route::get('dashboard',[AdminController::class,'dashboard'])->name('dashboard');
        Route::resource('banner', BannerController::class);
        Route::post('update-banner-status',[BannerController::class,'updateBannerStatus'])->name('updateBannerStatus');
        Route::resource('question', QuestionController::class);
        Route::resource('service', ServiceController::class);
        Route::resource('service-detail', ServiceDetailController::class);
        Route::resource('setup', SetupController::class);
        Route::resource('setup-detail', SetupDetailController::class);
        Route::resource('review', ReviewController::class);
        Route::resource('counter', CounterController::class);
        Route::resource('company-details', CompanyDetailController::class);
        Route::resource('about-company', AboutCompanyController::class);
        Route::resource('ceo-message', CEOMessageController::class);
        Route::resource('package',PricingPlaneController::class);
        Route::post('package-status', [PricingPlaneController::class, 'packagestatus'])->name('packagestatus');
        Route::resource('blog-category', BlogCategoryController::class);
        Route::post('blog-status',[BlogCategoryController::class,'updateBlogCategoryStatus'])->name('updateBlogCategoryStatus');
        Route::resource('blog-post', BlogPostController::class);
        Route::resource('contact', ContactController::class);
        Route::resource('order', AppointmentController::class);
    });
});
