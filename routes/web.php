<?php

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
Auth::routes();
Route::get('/','TableauController@Lastpost');

Route::get('/Map','MapController@index');


Route::get('Apropos', function () {
    return view('front/apropos');
});


Route::get('/Article','ArticleController@create');
Route::post('/ArticleEnvoit','ArticleController@store');
Route::get('Articles','ArticleController@index');
Route::get('Article/{id}/edit','ArticleController@edit');
Route::put('Article/{id}','ArticleController@update');
Route::delete('Articles/{id}','ArticleController@destroy');
Route::get('Blog','ArticleController@showArticle');
Route::get('DetailArticle/{id}','ArticleController@showdetailArticle');






Route::get('/Formation','FormationController@create');
Route::post('/FormationEnvoit','FormationController@store');
Route::get('Formations','FormationController@index');
Route::get('Formation/{id}/edit','FormationController@edit');
Route::put('Formation/{id}','FormationController@update');
Route::delete('Formation/{id}','FormationController@destroy');
Route::get('FormationShow','FormationController@showFormation');


Route::get('/Evenement','EvenementController@create');
Route::post('/EvenementEnvoit','EvenementController@store');
Route::get('Evenements','EvenementController@index');
Route::get('Evenement/{id}/edit','EvenementController@edit');
Route::put('Evenement/{id}','EvenementController@update');
Route::delete('Evenements/{id}','EvenementController@destroy');
Route::get('Events','EvenementController@showEvenement');
Route::get('/Gallerie','EvenementController@showphoto');







Route::get('Donate/{id}','DonateController@create');
Route::post('/DonateEnvoit','DonateController@store');
Route::get('Donates','DonateController@index');
Route::delete('Donates/{id}','DonateController@destroy');





Route::get('Tableau','TableauController@index');
Route::get('Tableau/create','TableauController@create');
Route::post('Tableau','TableauController@store');
Route::get('Tableau/{id}/detail','TableauController@detail');
Route::get('Tableau/{id}/edit','TableauController@edit');
Route::put('Tableau/{id}','TableauController@update');
Route::delete('Tableau/{id}','TableauController@destroy');
Route::get('Peinture','TableauController@show');
Route::get('Sculpture','TableauController@showSculpture');
Route::get('Plastique','TableauController@showPlastique');
Route::get('Artistes','TableauController@showArtist');
Route::get('Detail/{id}','TableauController@detail');
Route::get('DetailArtist/{id}','TableauController@showdetailArtist');
Auth::routes();


Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/logout', 'Auth\LoginController@logout');



Route::get('/loginFront', 'Auth\LoginController@loginFront');
Route::post('/loginFront', '\App\Http\Controllers\Auth\LoginController@loginFrontCheck');

Route::get('/RegisterFront', 'Auth\RegisterController@registerFront');
Route::post('/RegisterFront', '\App\Http\Controllers\Auth\RegisterController@registerFrontCheck');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/RegisterArtist', 'Auth\RegisterController@registerartist');
Route::post('/RegisterArtist', '\App\Http\Controllers\Auth\RegisterController@registerFrontCheckartist');
Route::get('/home', 'HomeController@index')->name('home');


Route::get('profil','UserController@profile');
Route::get('User/{id}/edit','UserController@edit');
Route::put('User/{id}','UserController@update');
Route::get('Visiteurs','UserController@index');
Route::get('Artiste','UserController@indexARtist');
Route::delete('Visiteurs/{id}','UserController@destroyvisiteur');
Route::delete('Artiste/{id}','UserController@destroyartist');




Route::get('/Contact','ContactController@create');
Route::post('/ContactEnvoit','ContactController@store');
Route::get('Contacts','ContactController@index');
Route::delete('Contacts/{id}','ContactController@destroy');


Route::get('Commande/{id}','CommandeController@create');
Route::post('/CommandeEnvoit','CommandeController@store');
Route::get('Commandes','CommandeController@index');
Route::delete('Commandes/{id}','CommandeController@destroy');

Route::get('Registers', function () {
    return view('auth/Registers');
});






