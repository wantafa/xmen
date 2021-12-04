<?php

use App\Skill;
use App\Superhero;
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

Route::get('/slicing', function() {
    return view('slicing');
});
Route::get('/xmen', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@cari_superhero')->name('cari.superhero');
Route::get('/cari', 'HomeController@cari_skill')->name('cari.skill');

// Super Hero
Route::get('/superhero/add', 'SuperheroController@create')->name('add.superhero');
Route::post('/superhero', 'SuperheroController@store')->name('store.superhero');
Route::get('/superhero/detail/{superhero}', 'SuperheroController@show')->name('detail.superhero');
Route::patch('/superhero/update/{superhero}', 'SuperheroController@update')->name('update.superhero');
Route::delete('/superhero/{superhero}', 'SuperheroController@destroy')->name('delete.superhero');

// Skill
Route::get('/skill/add', 'SkillController@create')->name('add.skill');
Route::post('/skill', 'SkillController@store')->name('store.skill');
Route::get('/skill/detail/{skill}', 'SkillController@show')->name('detail.skill');
Route::patch('/skill/update/{skill}', 'SkillController@update')->name('update.skill');
Route::delete('/skill/{skill}', 'SkillController@destroy')->name('delete.skill');

Route::post('/simulasi', 'SkillController@simulasi')->name('simulasi');

