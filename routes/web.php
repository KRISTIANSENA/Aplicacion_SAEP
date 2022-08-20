<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BillsController;
use App\Http\Controllers\DeliveriesController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\RoutesController;
use App\Http\Controllers\ShoppingesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\ProvidersController;
use App\Http\Controllers\CustomersController;
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


Route::resource('bills',BillsController::class);
Route::resource('verification', StaffController::class);
//Route::get('bills',[BillsController::class,'index'])->name('bills.index');
//Route::get('bills/create',[BillsController::class,'create'])->name('bills.create');
//Route::delete('bills/{id}',[BillsController::class,'destroy'])->name('bills.destroy');




Route::resource('deliveries',DeliveriesController::class);
Route::resource('orders',OrdersController::class);
Route::resource('routes',RoutesController::class);
Route::resource('shoppinges',ShoppingesController::class);
Route::resource('products', ProductsController::class);
Route::resource('sales', SalesController::class);
Route::resource('employees', EmployeesController::class);
Route::resource('providers', ProvidersController::class);
Route::resource('customers', CustomersController::class);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::redirect('dashboard','/');
