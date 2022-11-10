<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\RazorpayPaymentController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('test', [FrontController::class, 'test']);


Route::get('/',[FrontController::class , 'home'])->name('home'); 
Route::get('detail',[FrontController::class , 'detail'])->name('detail'); 
Route::get('about',[FrontController::class , 'about'])->name('about'); 
Route::get('eligibility',[FrontController::class , 'eligibility'])->name('eligibility'); 

Route::get('razorpay-payment', [RazorpayPaymentController::class, 'index']);
Route::post('razorpay-payment', [RazorpayPaymentController::class, 'store'])->name('razorpay.payment.store');

Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', [FrontController::class, 'dashboard'])->name('dashboard');
    Route::resource('application', ApplicationController::class);
    
    Route::get('application_instructions', [ApplicationController::class, 'appInstructions'])->name('application.instructions');
    Route::post('application/upload_docs', [ApplicationController::class, 'uploadDocuments'])->name('application.upload_docs');
    Route::get('application_fee', [ApplicationController::class, 'applicationFee'])->name('application.fee');
    Route::get('application_status', [ApplicationController::class, 'applicationStatus'])->name('application.status');
    Route::get('application_print', [ApplicationController::class, 'generatePDF'])->name('application_print');

});

require __DIR__.'/auth.php';
