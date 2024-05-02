<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Middleware\ProductAccessMiddleware;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('validToken')->group(function() {
    Route::apiResource('products', ProductController::class);
});

// Route::middleware('validToken')->group(function() {
//     Route::get('/users', function(){
//         return 'users';
//     });
// });



Route::post('products/upload/local', 'ProductController@uploadLocal')->name('upload.local');

Route::post('products/upload/public', 'ProductController@uploadPublic')->name('upload.public');