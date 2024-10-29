<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\PortfolioGalleryController;

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


Route::view('/', 'index');
Route::view('contact', 'contact');
Route::view('services', 'services');


// contact
Route::post('contact-store', [ContactController::class, 'contact_store'])->name('contact.store');

// portfolio
Route::get('portfolio',[UserController::class,'portfolio']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::prefix('admin')->name('admin.')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::controller(AdminController::class)->group(function () {
        Route::get('/', 'index')->name('dashboard');

        // portfolio category
        Route::get('portfolio-category', 'category')->name('category');
        Route::post('store-category', 'store_category')->name('store.category');
        Route::get('edit-category/{id}', 'edit_category')->name('edit.category');
        Route::put('update-category/{id}', 'update_category')->name('update.category');
        Route::get('delete-category/{id}', 'delete_category')->name('delete.category');
    });

    // contact 
    Route::get('users-contact', [ContactController::class, 'users_contact'])->name('users.contact');

    // portfolio gallery
    Route::controller(PortfolioGalleryController::class)->group(function () {
        Route::get('portfolio-gallery', 'gallery')->name('gallery');
        Route::post('store-gallery', 'store_gallery')->name('store.gallery');
        Route::get('delete-gallery/{id}', 'delete_gallery')->name('delete.gallery');

        // list 
        Route::get('gallery-list', 'gallery_list')->name('gallery.list');
    });
});

Route::get('/clear', function() {
   
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    // Artisan::call('optimize');
 
    return "Cleared!";
 
 });
 

 
 Route::fallback(function () {
    return view('errors.404');
 });
