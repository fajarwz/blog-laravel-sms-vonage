<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VonageController;

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

Route::get('/vonage/by-user-model', [VonageController::class, 'byUserModel']);
Route::get('/vonage/on-demand', [VonageController::class, 'onDemand']);