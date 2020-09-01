<?php

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
    return view('welcome');
});
Route::get('/home', 'HomeController@index')->name('home');

Route::get('new_login',function ( ) {
    return view('authentification/new_login');
});

Route::get('home1',function ( ) {
    return view('home1');
});


Route::get('createp',function ( ) {
    return view('projets/CreateP');
});

Route::get('listp',function ( ) {
    return view('projets/listP');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('lister_adherant',function ( ) {
    return view('Adherant/lister_adherant');
});

Route::get('create_adherant',function ( ) {
    return view('Adherant/create_adherant');
});

Route::get('editer_adherant',function ( ) {
    return view('Adherant/editer_adherant');
});

Route::get('create_reunion',function ( ) {
    return view('Reunion/create_reunion');
});

Route::get('editer_reunion',function ( ) {
    return view('Reunion/editer_reunion');
});

Route::get('create_bureau',function ( ) {
    return view('Bureau_reunion/create_bureau');
});

Route::get('editer_bureau',function ( ) {
    return view('Bureau_reunion/editer_bureau');
});

Route::get('lister_bureau',function ( ) {
    return view('Bureau_reunion/lister_bureau');
});

Route::get('create_seance_reunion',function ( ) {
    return view('Seance_reunion/create_seance_reunion');
});

Route::get('editer_seance_reunion',function ( ) {
    return view('Seance_reunion/editer_seance_reunion');
});

Route::get('lister_seance_reunion',function ( ) {
    return view('Seance_reunion/lister_seance_reunion');
});

Route::get('create_infor',function ( ) {
    return view('Infor_jour/create_infor');
});

Route::get('editer_infor',function ( ) {
    return view('Infor_jour/editer_infor');
});

Route::get('lister_beneficier',function ( ) {
    return view('Infor_jour/lister_beneficier');
});

Route::get('liste_potenciel',function ( ) {
    return view('Infor_jour/liste_potenciel');
});

Route::get('create_tontine',function ( ) {
    return view('Tontine/create_tontine');
});

Route::get('editer_tontine',function ( ) {
    return view('Tontine/editer_tontine');
});

Route::get('liste_tontine',function ( ) {
    return view('Tontine/liste_tontine');
});
