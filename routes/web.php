<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Education\Education;

Route::get('/', function () {
    return view('welcome');
});
/* 1 */
Route::get('/employer/dashboard', function () {
    return view('components.employer.employerDashboard');
});
/* 2 */


Route::get('/miruta', function () {
    return view('components.employer.categorias.prueba');
});

/* Muestra las subcategorias por enlaces */
Route::get('/categorias', function () {
    return view('components.employer.categorias.subCategoryEnlaces');
});

/* Muestra la categorias con imagens y sus subcategorias*/
Route::get('/categorias/{id}', function ($id) {
    return view('components.employer.categorias.categoryShow');
});

/* Employer dashboard */









/* Route::get('/employer/categorias/', function () {
    return view('components.employer.categorias.layout');
})->middleware(['auth','verified'])->name('showprofile'); */






/* Lo que tenia */
Route::get('/employer/categorias/layout', function () {
    return view('components.employer.categorias.layout');
})->middleware(['auth','verified'])->name('showprofile');

Route::get('/categorias/1/logo-design/projectsExpertsLayout', function () {
    return view('components.employer.categorias.projectsExpertsLayout');
})->middleware(['auth','verified'])->name('showprofile');

Route::get('/employer/categorias/employer-layout-categorias', function () {
    return view('components.employer.categorias.categoryShow');
})->middleware(['auth','verified'])->name('showprofile');

Route::get('/employer/employer-layout', function () {
    return view('components.employer.employer-layout');
})->middleware(['auth','verified'])->name('showprofile');


Route::get('/show-profile/showprofile', function () {
    return view('components.show-profile.showprofile');
})->middleware(['auth','verified'])->name('showprofile');


/* Expert Dashboard */
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
