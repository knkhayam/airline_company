<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaffController;

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

Route::group([
    'prefix' => 'staff',
], function () {
    Route::get('/', [StaffController::class, 'index'])
         ->name('staff.staff.index');
    Route::get('/create', [StaffController::class, 'create'])
         ->name('staff.staff.create');
    Route::get('/show/{staff}',[StaffController::class, 'show'])
         ->name('staff.staff.show')->where('id', '[0-9]+');
    Route::get('/{staff}/edit',[StaffController::class, 'edit'])
         ->name('staff.staff.edit')->where('id', '[0-9]+');
    Route::post('/', [StaffController::class, 'store'])
         ->name('staff.staff.store');
    Route::put('staff/{staff}', [StaffController::class, 'update'])
         ->name('staff.staff.update')->where('id', '[0-9]+');
    Route::delete('/staff/{staff}',[StaffController::class, 'destroy'])
         ->name('staff.staff.destroy')->where('id', '[0-9]+');
});
