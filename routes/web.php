<?php

use App\Http\Livewire\Mot;
use App\Http\Livewire\News;
use App\Http\Livewire\About;
use App\Http\Livewire\Index;
use App\Http\Livewire\Medias;
use App\Http\Livewire\Mediat;
use App\Http\Livewire\Posts; 
use App\Http\Livewire\Alumni; 
use App\Http\Livewire\Service;
use App\Http\Livewire\Contacts;
use App\Http\Livewire\Newsroom;
use App\Http\Livewire\ShowPosts;
use App\Http\Livewire\ContactForms;
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

//Route::get('/', function () {
     // auth()->user()->assignRole('admin');
     //return view('welcome');
//});

Route::get('/', Index::class)->name('index');
Route::get('/qui-sommes-nous', About::class)->name('about');
Route::get('/Mot-du-president', Mot::class)->name('mot');
Route::get('/Membre-du-bureau', Alumni::class)->name('alumni');
Route::get('/Incub', Service::class)->name('service');
Route::get('/Actualite-ajeci', Newsroom::class)->name('newsroom');
Route::get('/Actualite-ajeci/{slug}', News::class)->name('news');
Route::get('/mediathèque', Mediat::class)->name('about');
//Route::get('/contact', ContactForm::class, 'SendContact')->name('contact');
Route::get('/contact', ContactForms::class)->name('showposts');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::group(['middleware' => ['auth:sanctum', 'role:admin']],function () {
    Route::get('/admin/posts', Posts::class)->name('posts.index');
    Route::get('/admin/contacts', Contacts::class)->name('contacts.index');
    Route::get('/admin/mediatheque', Medias::class)->name('mediatheque.index');
});