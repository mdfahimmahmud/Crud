<?php

use App\Http\Controllers\CrudController;
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



Route::get('/', [CrudController::class, 'show_data']);
Route::get('/add_data', [CrudController::class, 'add_data']);
Route::post('/store_data', [CrudController::class, 'store_data']);
Route::get('/edit_data/{id}', [CrudController::class, 'editdata']);
Route::post('/update_data/{id}', [CrudController::class, 'updatedata']);
Route::get('/delete_data/{id}', [CrudController::class, 'deletedata']);
