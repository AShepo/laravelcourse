<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Categories;

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

Route::get('/categories', [ Categories::class, 'index' ]);
Route::get('/categories/create', [ Categories::class, 'create' ]);
Route::get('/categories/edit/{id}', [ Categories::class, 'edit' ]);
Route::get('/categories/remove/{id}', [ Categories::class, 'remove' ]);
Route::get('/categories/{id}', [ Categories::class, 'show' ]);

Route::post('/categories', [ Categories::class, 'store' ]);
Route::post('/categories/update/{id}', [ Categories::class, 'update' ]);
Route::post('/categories/delete/{id}', [ Categories::class, 'delete' ]);
