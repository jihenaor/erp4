<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\AttibuteController;
use  App\Http\Controllers\BoxController;
use  App\Http\Controllers\CarrierController;
use  App\Http\Controllers\CategoryController;
use  App\Http\Controllers\CompanyController;
use  App\Http\Controllers\ConsecutiveController;
use  App\Http\Controllers\CustomerController;
use  App\Http\Controllers\DispatchController;
use  App\Http\Controllers\DispatcherdocumentController;
use  App\Http\Controllers\DocumentController;
use  App\Http\Controllers\DocumenttypeController;
use  App\Http\Controllers\ItemController;
use  App\Http\Controllers\ItemdispatchController;
use  App\Http\Controllers\ItemdocumentController;
use  App\Http\Controllers\ItemtermController;
use  App\Http\Controllers\ItemtypeController;
use  App\Http\Controllers\MethodpaymentController;
use  App\Http\Controllers\NoveltiesboxController;
use  App\Http\Controllers\NoveltydocumentController;
use  App\Http\Controllers\PaymentdetailController;
use  App\Http\Controllers\PaymentController;
use  App\Http\Controllers\PaymentplanController;
use  App\Http\Controllers\PaymenttermController;
use  App\Http\Controllers\PaymenttermdetailController;
use  App\Http\Controllers\TaxController;
use  App\Http\Controllers\TaxitemController;
use  App\Http\Controllers\TaxitemdocumentController;
use  App\Http\Controllers\TermController;
use  App\Http\Controllers\TypenoveltyController;

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
/*
Route::middleware(['api', 'dos'])->group(function () {
});
*/

Route::get('findmethodpayment', [MethodpaymentController::class, 'index']);

Route::resource('documenttype', DocumenttypeController::class);

Route::prefix('api')->group(function () {
    Route::resource('customer', CustomerController::class);
    Route::resource('item', ItemController::class);
    Route::get('/noveltiesboxbyuser/{user_id}', [NoveltiesboxController::class, 'noveltiesboxbyuser']);
    Route::resource('paymentterm', PaymenttermController::class);
    Route::resource('tax', TaxController::class);
});

Route::resource('methodpayment', MethodpaymentController::class);
Route::resource('taxitem', TaxitemController::class);
Route::resource('document', DocumentController::class);
Route::resource('company', CompanyController::class);
Route::resource('paymentdetail', PaymentController::class);
Route::resource('paymentterm', PaymenttermController::class);
Route::resource('user', UserController::class);
Route::resource('payment', PaymentController::class);
Route::resource('paymenttermdetail', PaymenttermdetailController::class);
Route::resource('consecutive', ConsecutiveController::class);
Route::resource('attribute', AttributeController::class);
Route::resource('term', TermController::class);
Route::resource('itemterm', ItemtermController::class);

Route::get('/consecutivebydocumenttype/{documenttype_id}', [ConsecutiveController::class, 'consecutivebydocumenttype']);





