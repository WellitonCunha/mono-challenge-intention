<?php

use App\Http\Controllers\api\v1\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::prefix('v1')->group(function (){
    Route::prefix('product')->group(function(){
        Route::get('/index', [ProductController::class, 'index'])->name('api.v1.product.index');
        Route::get('/product_edit/{id}', [ProductController::class, 'productEdit'])->name('api.v1.product.product_edit');
    });
});


