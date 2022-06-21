<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

Route::get('/', [PageController::class, 'dashboard'])->name("dashboard");

Route::get('/crud', [PageController::class, 'crud'])->name("crud");

$tables = config("tables");

    Route::get("/table/{tableName}", [PageController::class, "table_crud"])->name("table-crud");