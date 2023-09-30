<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FanCertificatesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VtuberController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard_2', function () {
    return view('dashboard_2');
})->middleware(['auth', 'verified'])->name('dashboard_2');

Route::get('/dashboard_2_2', function () {
    return view('dashboard_2_2');
})->middleware(['auth', 'verified'])->name('dashboard_2_2');

Route::get('/dashboard_2_3', function () {
    return view('dashboard_2_3');
})->middleware(['auth', 'verified'])->name('dashboard_2_3');

Route::get('/dashboard_3', function () {
    return view('dashboard_3');
})->middleware(['auth', 'verified'])->name('dashboard_3');

Route::get('/dashboard_4', function () {
    return view('dashboard_4');
})->middleware(['auth', 'verified'])->name('dashboard_4');

Route::get('/show_next_page', function () {
    return view('dashboard_3/show_next_page');
})->middleware(['auth', 'verified'])->name('show_next_page');

Route::post('/issue_membership_card/{vtuberId}', 'FanCertificatesController@issueMembershipCard')->name('issue_membership_card');

Route::middleware('auth')->group(function () {
    // fan certificates
    Route::get('/fan-certificates', [FanCertificatesController::class, 'index'])->name('fan-certificates.index');
    Route::get('/fan-certificates/create/{vtuberId}', [FanCertificatesController::class, 'create'])->name('fan-certificates.create');
    Route::post('/fan-certificates/create/{vtuberId}', [FanCertificatesController::class, 'store'])->name('fan-certificates.store');
    Route::get('/fan-certificates/edit/{id}', [FanCertificatesController::class, 'edit'])->name('fan-certificates.edit');
    Route::put('/fan-certificates/edit/{id}', [FanCertificatesController::class, 'update'])->name('fan-certificates.update');
    Route::get('/fan-certificates/{id}', [FanCertificatesController::class, 'show'])->name('fan-certificates.show');

    // profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/vtubers', [VtuberController::class, 'index'])->name('vtuber.index');
Route::get('/dashboard', [VtuberController::class, 'index'])->name('dashboard');
Route::get('/vtubers/{vtuberId}', [VtuberController::class, 'show'])->name('vtuber.show');

require __DIR__.'/auth.php';
