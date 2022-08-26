<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeliveriesController;
use App\Http\Controllers\RoutesController;
use App\Http\Controllers\Purchase_ordersController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\ProvidersController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\Income_productsController;
use App\Http\Controllers\Output_productsController;
use App\Http\Controllers\Sales_invoicesController;
use App\Http\Controllers\InventoriesController;
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

Route::resource('deliveries',DeliveriesController::class);
Route::resource('purchase_orders',Purchase_ordersController::class);
Route::resource('routes',RoutesController::class);
Route::resource('products', ProductsController::class);
Route::resource('sales_invoices', Sales_invoicesController::class);
Route::resource('employees', EmployeesController::class);
Route::resource('providers', ProvidersController::class);
Route::resource('income_products', Income_productsController::class);
Route::resource('output_products', Output_productsController::class);
Route::resource('customers', CustomersController::class);
Route::resource('inventories',InventoriesController::class);



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
