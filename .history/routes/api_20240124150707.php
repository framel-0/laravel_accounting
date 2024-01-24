<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\AuditTrailController;
use App\Http\Controllers\AccountTypeController;
use App\Http\Controllers\TransactionController;

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


Route::prefix('/Accounts')->group(function () {
    Route::post('/', [AccountController::class, 'index'])
        ->name('Accounts.index');
});

Route::prefix('/AccountTypes')->group(function () {
    Route::post('/', [AccountTypeController::class, 'index'])
        ->name('AccountTypes.index');
});

Route::prefix('/AuditTrails')->group(function () {
    Route::post('/', [AuditTrailController::class, 'index'])
        ->name('AuditTrails.index');
});

Route::prefix('/Transactions')->group(function () {
    Route::post('/', [TransactionController::class, 'index'])
        ->name('Transactions.index');
});
