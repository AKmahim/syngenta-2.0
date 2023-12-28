<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;


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
    return redirect('/home');
});

Route::get('/home', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



// ================================ admin controller ========================= 
Route::middleware('auth')->group(function () {
    Route::get('/dashboard',[AdminController::class,'Dashboard'])->name('dashboard');
    Route::get('/control-panel',[AdminController::class,'ControlPanel'])->name('control-panel');
    Route::get('/add-program',[AdminController::class,'AddProgram'])->name('add-program');


    
    
});



require __DIR__.'/auth.php';
