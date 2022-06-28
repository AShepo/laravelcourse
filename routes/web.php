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
Route::get('/categories/{id}/edit', [ Categories::class, 'edit' ]);
Route::get('/categories/{id}/remove', [ Categories::class, 'remove' ]);
Route::get('/categories/{slug}', [ Categories::class, 'show' ]);
Route::get('/trash', [ Categories::class, 'trash' ]);
Route::get('/trash/{slug}', [ Categories::class, 'showTrash' ]);

Route::post('/categories', [ Categories::class, 'store' ]);
Route::put('/categories/{id}/update', [ Categories::class, 'update' ]);
Route::delete('/categories/{id}/delete', [ Categories::class, 'delete' ]);
Route::get('/trash/{id}/restore', [ Categories::class, 'restoreTrash' ]);
