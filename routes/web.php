<?php

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
use App\Http\Controllers\GoogleSheetsController;
use App\Http\Livewire\Orders;
Route::get('/orders', [GoogleSheetsController::class, 'fetchOrders'])->name('orders.index');
Route::get('/products', [GoogleSheetsController::class, 'fetchProducts'])->name('products.index');

Route::get('/orders', Orders::class);
Route::get('/read-sheet', [GoogleSheetsController::class, 'readSheet']);
Route::post('/update-sheet', [GoogleSheetsController::class, 'updateSheet']);

Route::get('/', function () {
    return view('welcome');
});
