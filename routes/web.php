<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Education\Education;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('components.contacto-amarillo.contacto-dashboard');
})->middleware(['auth','verified'])->name('dashboard');

Route::get('/education', function () {
    return view('experts.education');
})->middleware(['auth'])->name('education');

Route::get('/ability', function () {
    return view('experts.ability');
})->middleware(['auth'])->name('ability');



require __DIR__.'/auth.php';
