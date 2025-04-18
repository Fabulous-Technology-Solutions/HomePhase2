<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::post('pay',[PaymentController::class,'pay'])->name('pay');
Route::get('my',[PaymentController::class,'my'])->name('my');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('form', [App\Http\Controllers\AuthController::class, 'form'])->name('form');
Route::post('MediaUpload', [App\Http\Controllers\ServiceProviderController::class, 'OrdeAfterImages'])->name('TestMediaUpload');

Route::get('/payment', [PaymentController::class, 'index']);
Route::post('/charge', [PaymentController::class, 'charge'])->name('stripe.charge');
Route::get('/checkout', [PaymentController::class, 'checkout'])->name('stripe.checkout');
Route::get('/payment-success', function () {
    return "Payment successful!";
});
Route::get('/cancel', function () {
    return "Payment canceled!";
});