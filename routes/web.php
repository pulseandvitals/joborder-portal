<?php

use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\JobOrderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuotationController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// useless routes
// Just to demo sidebar dropdown links active states.
Route::middleware('auth')->prefix('job-order')->name('job-order.')->group(function () {
    Route::get('/create',[JobOrderController::class,'create'])->name('create');
    Route::get('/', [JobOrderController::class,'index'])->name('index');
    Route::post('/store',[JobOrderController::class,'store'])->name('store');
    Route::get('/show/{job_order}',[JobOrderController::class,'show'])->name('show');
});
Route::middleware('auth')->prefix('quotation')->name('quotation.')->group(function () {
    Route::get('/create/{job_order}',[QuotationController::class,'create'])->name('create');
    Route::post('/store/{job_order}',[QuotationController::class,'store'])->name('store');
});

Route::middleware('auth')->prefix('invoice')->name('invoice.')->group(function () {
    Route::get('/create',[InvoiceController::class,'create'])->name('create');
    Route::get('/', [InvoiceController::class,'index'])->name('index');
    Route::post('/store',[InvoiceController::class,'store'])->name('store');
});
require __DIR__ . '/auth.php';
