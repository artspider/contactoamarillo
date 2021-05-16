<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Education\Education;
use App\Http\Livewire\Profile\Main;
use App\Http\Livewire\Employer\ExpertDetail;
use App\Http\Livewire\Employer\Dashboard;
use App\Http\Livewire\Employer\Subcategoryshow;
use App\Http\Livewire\Employer\Publishproyect;
use App\Http\Livewire\Employer\Showprojects;
use App\Http\Livewire\Employer\EditProject;
use App\Http\Livewire\Jobsbag;
use App\Http\Livewire\Employer\Notificaciones;
use App\Http\Livewire\Employer\SearchResult;
use App\Http\Livewire\ShowService;
use App\Http\Livewire\NewOrder;
use App\Http\Livewire\ShowOrders;
use App\Http\Livewire\ShowOrder;

Route::get('/', function () {
    return view('welcome');
});

/* Route::get('/dashboard', function () {
    return view('components.contacto-amarillo.contacto-dashboard');
})->middleware(['auth','verified'])->name('dashboard'); */

Route::middleware(['auth'])
->get('/dashboard', App\Http\Livewire\Dashboard::class)
->name('dashboard');

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

Route::middleware(['auth', 'verified'])
->get('/expert/showservice/{id}', ShowService::class)
->name('expert-showservice');

Route::get('/show-profile', function () {
    return view('components.show-profile.showprofile');
})->middleware(['auth','verified'])->name('showprofile');

Route::post('/submitfoto', \App\Http\Livewire\UploadFoto::class);

Route::post('/submitfoto/{id}', \App\Http\Livewire\UpdateFoto::class);

Route::middleware(['auth', 'verified'])
->get('/jobsbag', Jobsbag::class)
->name('jobsbag');

Route::middleware(['auth', 'verified'])
->get('expert/notifications/{expertId}', App\Http\Livewire\Notificaciones::class)
->name('expert-notifications');

Route::middleware(['auth', 'verified'])
->get('expert/showorders', ShowOrders::class)
->name('expert-showorders');

Route::middleware(['auth', 'verified'])
->get('expert/showorder/{id}', ShowOrder::class)
->name('expert-showorder');


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

Route::middleware(['auth', 'verified'])
->get('/employer/editproject/{id}', EditProject::class)
->name('employer-editproject');

/* Muestra las subcategorias por enlaces */
Route::get('/subcategorias', function () {
    return view('components.employer.categorias.subCategoryEnlaces');
});

Route::middleware(['auth', 'verified'])
->get('employer/notifications/{employerId}', Notificaciones::class)
->name('employer-notifications');

Route::middleware(['auth', 'verified'])
->get('employer/searchresult/{search}', SearchResult::class)
->name('employer-searchresult');

Route::middleware(['auth', 'verified'])
->get('employer/neworder/{service_id}', NewOrder::class)
->name('employer-neworder');

Route::middleware(['auth', 'verified'])
->get('employer/showorder/{id}', App\Http\Livewire\Employer\ShowOrder::class)
->name('employer-showorder');

Route::get('employer/show-profile', function () {
    return view('profile/employer-show');
})->middleware(['auth','verified'])->name('employer-showprofile');

/* Ruta parcial para buscar expert */
Route::get('/search-expert', function () {
    return view('components.employer.searchEmployer');
});

Route::middleware(['auth', 'verified'])
->get('employer/search-expert', App\Http\Livewire\AlgoliaSearch::class)
->name('employer-searchexpert');

Route::middleware(['auth', 'verified'])
->get('employer/profile-expert/{id}', App\Http\Livewire\ProfileExpert::class)
->name('employer-profileexpert');

require __DIR__.'/auth.php';
