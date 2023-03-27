<?php

use App\Http\Livewire\ApiCall;
use App\Http\Livewire\Calculator;
use App\Http\Livewire\UserSearch;
use App\Http\Livewire\ProductSearch;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/calculator', \App\Http\Livewire\Calculator::class)->name('calculator');
Route::get('/todo-list', \App\Http\Livewire\TodoList::class)->name('todo-list');
Route::get('/cascading-dropdown', \App\Http\Livewire\CascadingDropdown::class)->name('cascading-dropdown');

/*
|--------------------------------------------------------------------------
| Livewire search routes
|--------------------------------------------------------------------------
*/
Route::get('/products', ProductSearch::class)->name('products');
Route::get('/user-search', UserSearch::class)->name('products');

/*
|--------------------------------------------------------------------------
| Livewire Image upload with preview
|--------------------------------------------------------------------------
*/

Route::get('/image-upload', \App\Http\Livewire\ImageUpload::class)->name('image-upload');

/*
|--------------------------------------------------------------------------
| Livewire Api Call
|--------------------------------------------------------------------------
*/

Route::get('/api-call', ApiCall::class)->name('api-call');