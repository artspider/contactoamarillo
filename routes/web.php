<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Education\Education;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/show-profile/showprofile', function () {
    return view('components.show-profile.showprofile');
})->middleware(['auth','verified'])->name('showprofile');

Route::get('/dashboard', function () {
    return view('components.contacto-amarillo.contacto-dashboard');
})->middleware(['auth','verified'])->name('dashboard');

Route::get('/education', function () {
    return view('experts.education');
})->middleware(['auth'])->name('education');

Route::get('/services', function () {
    return view('experts.services');
})->middleware(['auth'])->name('services');

Route::get('/ability', function () {
    return view('experts.ability');
})->middleware(['auth'])->name('ability');

Route::get('/createservice', function () {
    return view('experts.createservice');
})->middleware(['auth'])->name('createservice');

Route::get('/editservice/{id}', function ($id) {
    return view('experts.editservice',['id' => $id]);
})->middleware(['auth'])->name('editservice');

/* Route::post('/submitfoto', function () {
    return view('experts.submitfoto');
})->middleware(['auth'])->name('submitfoto'); */

Route::post('/submitfoto', \App\Http\Livewire\UploadFoto::class);



require __DIR__.'/auth.php';
