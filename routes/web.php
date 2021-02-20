<?php

use App\Http\Controllers\AboutPageController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\ProductPageController;
use App\Http\Controllers\TeamController;

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

Route::get('/',[MainController::class,'index'])->name('home');
Route::get('/about us',[MainController::class,'about'])->name('about');
Route::get('/products',[MainController::class,'product'])->name('products');
Route::get('/contact',[MainController::class,'contact'])->name('contact');
// send messages
Route::post('/message',[MessageController::class,'send'])->name('message');


// admin routes
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function(){
    Route::get('list',[AdminController::class,'index'])->name('admin.list');
    Route::get('/add-super',[AdminController::class,'create'])->name('admin.create');
    Route::post('/create-super',[AdminController::class,'store'])->name('admin.store');
    Route::get('/user',[UserController::class,'index'])->name('user.index');
   Route::get('/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');
    Route::resources([
        'homepage'=> HomePageController::class,
        'aboutpage'=> AboutPageController::class,
        'productpage'=> ProductPageController::class,
        'team'=>TeamController::class

    ]);
});

require __DIR__.'/auth.php';
