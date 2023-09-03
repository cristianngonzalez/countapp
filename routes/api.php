<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//Controllers
use App\Http\Controllers\ExpenseController;


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


Route::group(['middleware' => ['auth:sanctum']], function () {
    //Expense routes
   

});


Route::get('/expense/list', [ExpenseController::class, 'list']);
Route::get('/expense/info/{id}', [ExpenseController::class, 'info']);
Route::post('/expense/add', [ExpenseController::class, 'add']);
Route::post('/expense/edit/{id}', [ExpenseController::class, 'edit']);
Route::delete('/expense/delete/{id}', [ExpenseController::class, 'delete']);
