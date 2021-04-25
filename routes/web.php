<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Education\Education;
use App\Http\Livewire\Profile\Main;
use App\Http\Livewire\Employer\ExpertDetail;
use App\Http\Livewire\Employer\Dashboard;
use App\Http\Livewire\Employer\Subcategoryshow;
use App\Http\Livewire\Employer\Publishproyect;
use App\Http\Livewire\Employer\Showprojects;

Route::get('/', function () {
    return view('welcome');
});

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

Route::middleware(['auth'])
->get('/profile', Main::class)
->name('profile');

Route::middleware(['auth'])
->get('/expert-profile/{id}', ExpertDetail::class)
->name('expert-profile');

Route::get('/show-profile', function () {
    return view('components.show-profile.showprofile');
})->middleware(['auth','verified'])->name('showprofile');

Route::post('/submitfoto', \App\Http\Livewire\UploadFoto::class);

Route::post('/submitfoto/{id}', \App\Http\Livewire\UpdateFoto::class);


/* Rutas de employer  */

Route::middleware(['auth', 'verified'])
->get('/employer/dashboard', Dashboard::class)
->name('employer-dashboard');

Route::middleware(['auth', 'verified'])
->get('/employer/category/{id}', Subcategoryshow::class)
->name('employer-subcategory');

Route::middleware(['auth', 'verified'])
->get('/employer/publishproject', Publishproyect::class)
->name('employer-publishproject');

Route::middleware(['auth', 'verified'])
->get('/employer/showprojects', Showprojects::class)
->name('employer-showprojects');

/* Muestra las subcategorias por enlaces */
Route::get('/subcategorias', function () {
    return view('components.employer.categorias.subCategoryEnlaces');
});


/* Ruta parcial para buscar expert */
Route::get('/search-expert', function () {
    return view('components.employer.searchEmployer');
});


require __DIR__.'/auth.php';
