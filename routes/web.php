<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\StartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SurgeryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserSurgeryController;
use App\Http\Controllers\UserVisitsController;
use App\Http\Controllers\VisitController;
use App\Models\Doctor;
use App\Models\Surgery;
use Illuminate\Support\Facades\Auth;

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
    $doctors = Doctor::all();
        $surgerys = Surgery::all();
        return view('index', ['surgerys' => $surgerys,'doctors' => $doctors]);
})->name('start');
Route::resource('visitsUser',UserVisitsController::class)->middleware(['auth']);
Route::resource('doctors',DoctorController::class)->middleware(['auth','admin']);
Route::resource('surgerys',SurgeryController::class)->middleware(['auth','admin']);
Route::resource('visits',VisitController::class)->middleware(['auth','admin']);
Route::resource('users',UserController::class)->middleware(['auth','admin']);
Route::resource('surgerysUser',UserSurgeryController::class)->middleware(['auth']);
Route::resource('cart',CartController::class)->middleware(['auth']);
require __DIR__.'/auth.php';
