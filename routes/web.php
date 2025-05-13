<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SesiController;
use Illuminate\Support\Facades\Route;

Route::middleware(['guest'])->group(function(){ //! yg bisa masuk kesini hanya untuk yg belum login atau tamu (guest)
    Route::get('/',[SesiController::class,'index'])->name('login');
    Route::post('/',[SesiController::class,'login']);
});



Route::middleware(['auth'])->group(function(){ //!! yg bisa masuk kesini hanya yg sudah ter authentikasi
    Route::get('/admin',[AdminController::class,'index'])->name('home');
    Route::get('/admin/operator',[AdminController::class,'operator'])->middleware('userAkses:operator');
    Route::get('/admin/keuangan',[AdminController::class,'keuangan'])->middleware('userAkses:keuangan');
    Route::get('/admin/marketing',[AdminController::class,'marketing'])->middleware('userAkses:marketing');
    Route::get('/logout',[SesiController::class,'logout'])->name('logout');
});

Route::get('/forbidden', function(){
    return view('forbidden');
});


