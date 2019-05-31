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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/Vente', 'HomeController@index2')->name('home2');
Route::get('/loginn', 'HomeController@login')->name('loginn');


Route::get('/Vente/Clients', 'ClientsController@index');
Route::get('/Vente/{id}/View', 'ClientsController@View');
Route::get('/Vente/AjouterClient', 'ClientsController@storeaf');
Route::get('/Vente/{id}/ModifierClient', 'ClientsController@updateaf');

Route::post('/insertClient', 'ClientsController@insert');
Route::post('/updateClient/{id}', 'ClientsController@update');
Route::post('/SupprimerClient/{id}', 'ClientsController@destroy')->name('suppc');


Route::get('/Vente/Articles', 'ArticleController@index');
Route::get('/Vente/AjouterArticle', 'ArticleController@storeaf');
Route::get('/Vente/{id}/ModifierArticle', 'ArticleController@updateaf');
Route::get('/Vente/Articles/Data', 'ArticleController@data');


Route::post('/insertArticle', 'ArticleController@insert');
Route::post('/updateArticle/{id}', 'ArticleController@update');
Route::get('/SupprimerArticle/{id}', 'ArticleController@destroy')->name('aa');



Route::get('/Vente/Devis', 'DevisController@index');
Route::get('/Vente/AjouterDevis', 'DevisController@storeaf');
Route::get('/Vente/Devis/Data', 'DevisController@data');
Route::get('/Vente/Devis/{id}/View', 'DevisController@View');
Route::get('/Vente/Devis/print/{id}', 'DevisController@pdf')->name('pdfdv');;;






Route::post('/insertDevis', 'DevisController@insert');
Route::post('/updateDevis/{id}', 'DevisController@updatev');
Route::get('/updateDevisq/{id}', 'DevisController@updatev')->name('edeetu');
Route::get('/SupprimerDevis/{id}', 'DevisController@destroy')->name('deletedevis');


Route::get('/Vente/Boncommande', 'BoncommandeController@index');
Route::get('/Vente/AjouterBoncommande', 'BoncommandeController@storeaf');
Route::get('/Vente/Devis/Data2', 'BoncommandeController@data');
Route::get('/Vente/Boncommande/{id}/View', 'BoncommandeController@View');
Route::get('/Vente/Boncommande/print/{id}', 'BoncommandeController@pdf')->name('imprbond');


Route::get('/Vente/Factures', 'FactureController@index');

Route::get('/Vente/Facture/print', 'FactureController@pdf');
Route::get('/Vente/Facture/insert/{id}', 'FactureController@insert')->name('insertfac');;


