<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\RazorpayPaymentController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\NewsController;
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
Route::get('page/{slug}',[FrontController::class , 'page'])->name('page');


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


Route::get('admin/dashboard',[AdminController::class , 'adminDashboard'])->name('admin_dashboard'); 

    //Link and Page Routes 
    Route::resource('admin/link', LinkController::class);
    Route::resource('admin/page', PageController::class);
    Route::resource('admin/news', NewsController::class);

require __DIR__.'/auth.php';

Route::get('register', [FrontController::class , 'register'])->name('register');
Route::get('login', [FrontController::class , 'login'])->name('login');