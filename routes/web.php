<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\MethodpaymentController;
use  App\Http\Controllers\DocumenttypeController;
use  App\Http\Controllers\TaxController;
use  App\Http\Controllers\TaxitemController;
use  App\Http\Controllers\ConsecutiveController;



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

Route::get('/welcome', function () {
    return view('welcome');
});

//Route::get('findmethodpayment', [MethodpaymentController::class, 'index']);
//Route::post('storemethodpayment', [MethodpaymentController::class, 'store']);
//Route::delete('deletemethodpayment/{id}', 'MethodpaymentController@destroy')->name('methodpayment.destroy');


//Route::get('finddocumenttype', [DocumenttypeController::class, 'index']);
//Route::post('storedocumenttype', [DocumenttypeController::class, 'store']);
//Route::delete('methodpayment/{id}', 'MethodpaymentController@destroy')->name('methodpayment.destroy');

Route::resource('documenttype', DocumenttypeController::class);
Route::resource('tax', TaxController::class);
Route::resource('methodpayment', MethodpaymentController::class);
Route::resource('taxitem', TaxitemController::class);
Route::resource('document', DocumentController::class);
Route::resource('company', CompanyController::class);
Route::resource('customer', CustomerController::class);
Route::resource('paymentdetail', PaymentController::class);
Route::resource('paymentterm', PaymenttermController::class);
Route::resource('user', UserController::class);
Route::resource('payment', PaymentController::class);
Route::resource('paymenttermdetail', PaymenttermdetailController::class);
Route::resource('consecutive', ConsecutiveController::class);




