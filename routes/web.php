<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SlideController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ProjectCategoryController;
use App\Http\Controllers\Admin\TeamMemberController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\GeneralInformationController;
use App\Http\Controllers\Admin\SocialLinkController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\PageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/team', [PageController::class, 'team'])->name('team');
Route::get('/blog', [PageController::class, 'blog'])->name('blog');
Route::get('/portfolio', [PageController::class, 'portfolio'])->name('portfolio');
Route::get('/testimonials', [PageController::class, 'testimonials'])->name('testimonials');
Route::get('/posts/{post}', [PageController::class, 'post']);
Route::get('/projects/{project}', [PageController::class, 'project']);


Auth::routes();
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');


Route::group(['middleware' => 'auth', 'prefix' => 'dashboard'], function () {
    Route::resource('slides', SlideController::class);
    Route::resource('services', ServiceController::class);
    Route::resource('projects', ProjectController::class);
    Route::resource('categories', ProjectCategoryController::class);
    Route::resource('members', TeamMemberController::class);
    Route::resource('testimonials', TestimonialController::class);
    Route::get('general_information', [GeneralInformationController::class, 'index']);
    Route::put('general_information', [GeneralInformationController::class, 'update']);
    Route::resource('links', SocialLinkController::class);
    Route::resource('faqs', FaqController::class);
    Route::resource('posts', PostController::class);
});
