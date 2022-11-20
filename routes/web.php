<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Userclient\ClientendController;
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
Route::get('/',[ClientendController::class,'landing']);
Route::get('productlist',[ClientendController::class,'productlist']);
Route::get('productpage',[ClientendController::class,'productpage']);


