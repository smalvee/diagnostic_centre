<?php

use App\Http\Controllers\PatientController;
use App\Http\Controllers\PaymentController;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

//Auth route for user
Route::group(['missleware' => ['auth']], function(){
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
});


Route::get('new_patient', [PatientController::class, 'new_patient'])->middleware(['auth']);
Route::get('old_patient', [PatientController::class, 'old_patient'])->middleware(['auth']);

Route::get('payment_collection', [PaymentController::class, 'index'])->middleware(['auth']);
Route::get('due_form', [PaymentController::class, 'due_form'])->middleware(['auth']);

require __DIR__.'/auth.php';
