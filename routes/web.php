<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('site');
});

//administration
Route::prefix('admin')->group(function (){
//auth
    Route::get('/login', 'Administration\Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Administration\Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::post('/logout', 'Administration\Auth\AdminLoginController@adminLogout')->name('admin.logout');
    
//compte
    Route::post('/compte', 'Administration\Auth\AdminLoginController@adminLogout')->name('compte.index');

//cycle scolaire
    Route::resource('cycle_scolaire', 'Administration\CycleScolaireController');
//niveau scolaire
    Route::resource('niveau_scolaire', 'Administration\NiveauScolaireController');
    //matière
    Route::get('/matiere/import/form', 'Administration\MatiereController@showImport')->name('matiere.import.show');
    Route::post('/matiere/import', 'Administration\MatiereController@import')->name('matiere.import');
    Route::delete('/matiere/supprimer_tout', 'Administration\MatiereController@destroyAll')->name('matiere.destroyAll');
    Route::get('/matiere/telecharger', 'Administration\MatiereController@telecharger')->name('matiere.telecharger');
    Route::resource('matiere', 'Administration\MatiereController');
    
//prof
    Route::get('/prof/import/form', 'Administration\ProfController@showImport')->name('prof.import.show');
    Route::post('/prof/import', 'Administration\ProfController@import')->name('prof.import');
    Route::delete('/prof/supprimer_tout', 'Administration\ProfController@destroyAll')->name('prof.destroyAll');
    Route::get('/prof/telecharger', 'Administration\ProfController@telecharger')->name('prof.telecharger');
    Route::resource('prof', 'Administration\ProfController');

//home
    Route::get('/', 'Administration\AdminDashboardController@index')->name('admin.dashboard');
});

//prof
Route::prefix('prof')->group(function (){
    Route::get('/login', 'Prof\Auth\ProfLoginController@showLoginForm')->name('prof.login');
    Route::post('/login', 'Prof\Auth\ProfLoginController@login')->name('prof.login.submit');
    Route::post('/logout', 'Prof\Auth\ProfLoginController@profLogout')->name('prof.logout');
    Route::get('/', 'Prof\ProfDashboardController@index')->name('prof.dashboard');
});

//parent
Route::prefix('parent')->group(function (){
    Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('/login', 'Auth\LoginController@login')->name('login');
    Route::post('/logout', 'Auth\LoginController@parentLogout')->name('logout');    
    Route::get('/', 'Parent\ParentDashboardController@index')->name('parent.dashboard');
});