<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('main');


Route::middleware('auth')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('shops', 'ShopController'); 
Route::apiResource('branches', 'BranchController'); 
Route::apiResource('categories', 'CategoryController'); 
Route::apiResource('products', 'ProductsController'); 
Route::apiResource('solds', 'SoldController'); 
Route::apiResource('receipts', 'ReceiptController'); 
Route::apiResource('customers', 'CustomersController'); 
Route::apiResource('paymenttypes', 'PaymentTypeController'); 

 
