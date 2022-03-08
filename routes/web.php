<?php

use App\Http\Livewire\Store\PostingEdit;
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

Route::view('/', 'orders.index')->name('order.index');

Route::view('/directory', 'directory.index')->name('directory.index');
Route::view('/directory/statuses', 'directory.statuses')->name('directory.statuses');
Route::view('/directory/orderTypes', 'directory.order_types')->name('directory.orderTypes');
Route::view('/directory/products', 'directory.products')->name('directory.products');
Route::view('/directory/units', 'directory.units')->name('directory.units');
Route::view('/directory/works', 'directory.works')->name('directory.works');
Route::view('/directory/counterparties', 'directory.counterparties')->name('directory.counterparties');

Route::view('/store', 'store.index')->name('store.index');
Route::view('/store/posting/add', 'store.posting-create')->name('store.posting.create');
Route::get('store/posting/edit/{id}', PostingEdit::class)->name('store.posting.edit');
Route::view('store/moves/new', 'store.move-create')->name('store.move.create');
