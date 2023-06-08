<?php

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
    Route::get('/thank-you-page/{id}', [FrontendController::class,'thanks'])->name('thanks');
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
