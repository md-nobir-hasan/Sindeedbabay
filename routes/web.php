<?php

use App\Http\Controllers\ArtisanController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

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
// Routes for Without login
    Route::get('/', [FrontendController::class,'home'])->name('home');
    Route::get('/order', [FrontendController::class,'order'])->name('order');
    Route::get('/thank-you-page/{id}/{model}', [FrontendController::class,'thanks'])->name('thanks');
    Route::get('/mdnhoc', [FrontendController::class,'optimizeClear'])->name('oc');
// End Routes for Without login

// Backend Routes
    Route::prefix('/admin')->name('admin.')->group(function(){
        Route::resource('/order',OrderController::class);
        Route::get('/duplicate/order', [OrderController::class,'create'])->name('order.duplicate');
        Route::get('order-status/update',[OrderController::class,'orderStatusUpdate'])->name('order-status.update');
    });
    // Route::get('/thank-you-page/{id}', [OrderController::class,'OrderShow'])->name('Order');
//End Backend Routes

//Micellanous route
Route::get('/mdnhcu',[ArtisanController::class,'composerUpdate'])->name('cu');
Route::get('/mdnhci',[ArtisanController::class,'composerInstall'])->name('ci');
Route::get('/mdnhni',[ArtisanController::class,'npmInstall'])->name('ni');
Route::get('/mdnhnb',[ArtisanController::class,'npmBuild'])->name('nb');
Route::get('/mdnhoc',[ArtisanController::class,'optimizeClear'])->name('oc');
Route::get('/mdnhrc',[ArtisanController::class,'routeClear'])->name('rc');
Route::get('/mdnhcc',[ArtisanController::class,'cacheClear'])->name('cc');
Route::get('/mdnhms',[ArtisanController::class,'migrateSeed'])->name('ms');
Route::get('/mdnhsl',[ArtisanController::class,'storageLink'])->name('sl');
//End Micellanous route
