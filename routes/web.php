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

/// generale

Route::get('/', function () {
    return view('welcome');
});


Route::get('/log', function () {
    return view('layouts.log');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home2', 'HomeController@rejected');
Route::get('/Vente', 'HomeController@index2')->name('home2');
Route::get('/loginn', 'HomeController@login')->name('loginn');



/////////////////////////////// Ventte


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
Route::get('/SupprimerArticle/{id}', 'ArticleController@destroy')->name('repmoveart');



Route::get('/Vente/Devis', 'DevisController@index');
Route::get('/Vente/AjouterDevis', 'DevisController@storeaf');
Route::get('/Vente/Devis/Data', 'DevisController@data');
Route::get('/Vente/Devis/{id}/View', 'DevisController@View');
Route::get('/Vente/Devis/print/{id}', 'DevisController@pdf')->name('pdfdv');

Route::get('/mail/{id}', 'DevisController@mail');




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
Route::get('/Vente/Facture/pdf/{id}', 'FactureController@pdf');
Route::get('/Vente/Facture/pdfd/{id}', 'FactureController@download');
Route::get('/Vente/Facture/insert/{id}', 'FactureController@insert')->name('insertfac');
Route::get('/Vente/Facture/Data', 'FactureController@data');



Route::get('/Vente/Tableaudebord', 'TblbordController@index1');


Route::get('/Vente/Signature/{id}', 'SignatureController@index');
Route::post('/insertcomment/{id}', 'SignatureController@insert');



///////////////////////////////////////////Achat


Route::get('/Achat/Articles', 'ArticleaController@index');
Route::get('/Achat/AjouterArticle', 'ArticleaController@storeaf');
Route::get('/Achat/{id}/ModifierArticle', 'ArticleaController@updateaf');
Route::get('/Achat/Articles/Data', 'ArticleaController@data');



//changment name with viewss
Route::post('/insertArticlea', 'ArticleaController@insert');
Route::post('/updateArticlea/{id}', 'ArticleaController@update');
Route::get('/SupprimerArticle/{id}', 'ArticleaController@destroy')->name('deleteartac');


Route::get('/Achat/Fournisseurs', 'FournisseurController@index');
Route::get('/Achat/{id}/View', 'FournisseurController@View');
Route::get('/Achat/ajouterFournisseur', 'FournisseurController@storeaf');
Route::get('/Achat/{id}/ModifierFournisseur', 'FournisseurController@updateaf');

Route::post('/insertFournisseur', 'FournisseurController@insert');
Route::post('/updateFournisseur/{id}', 'FournisseurController@update');
Route::post('/SupprimerFournisseur/{id}', 'FournisseurController@destroy')->name('suppc');






Route::get('/Achat/DemandePrix', 'DemandePController@index');
Route::get('/Achat/AjouterDemandePrix', 'DemandePController@storeaf');
Route::get('/Achat/DemandePrix/Data', 'DemandePController@data');
Route::get('/Achat/DemandePrix/{id}/View', 'DemandePController@View');
Route::get('/Achat/DemandePrix/print/{id}', 'DemandePController@pdf')->name('pdfdvprix');




Route::post('/insertDemandePrix', 'DemandePController@insert');
Route::post('/updateDemandePrix/{id}', 'DemandePController@updatev');
Route::get('/updateDemandePrix/{id}', 'DemandePController@updatev')->name('edeetuprix');
Route::get('/SupprimerDemandePrix/{id}', 'DemandePController@destroy')->name('deletedevisprix');


Route::get('/Achat/Boncommande', 'BoncommandeaController@index');
Route::get('/Achat/AjouterBoncommande', 'BoncommandeaController@storeaf');
Route::get('/Achat/Devis/Data2', 'BoncommandeaController@data');
Route::get('/Achat/Boncommande/{id}/View', 'BoncommandeaController@View');
Route::get('/Achat/Boncommande/print/{id}', 'BoncommandeaController@pdf')->name('imprbondprix');


Route::get('/Achat/Factures', 'FactureaController@index');
Route::get('/Achat/Facture/pdf/{id}', 'FactureaController@pdf');
Route::get('/Achat/Facture/pdfd/{id}', 'FactureaController@download');
Route::get('/Achat/Facture/insert/{id}', 'FactureaController@insert')->name('insertfacachat');
Route::get('/Achat/Facture/Data', 'FactureaController@data');
Route::get('/Achat/Tableaudebord', 'Tblbord2Controller@index');






///// adminn


Route::get('/Admin', 'AdminstrateurController@index');
Route::get('/Admin/EditSocieter/{id}', 'AdminstrateurController@updateaf');
Route::get('/Admin/Users/Data', 'AdminstrateurController@data');
Route::post('/updateentreprise', 'AdminstrateurController@update');

Route::get('/Admin/AjouterUser', 'AdminstrateurController@ajouteruser');
Route::get('/Admin/{id}/Modiferuser', 'AdminstrateurController@mmodiferuser');
Route::get('/Admin/treeview', 'AdminstrateurController@treeview');

Route::post('/ajouteruser', 'AdminstrateurController@insertuser');
Route::post('/updateuser/{id}', 'AdminstrateurController@updateuser');
Route::get('/supprimeruser/{id}', 'AdminstrateurController@destroy')->name('suppuser');


// Comptabilite


Route::get('/Comptabilite/Piecescomptables', 'PiecesController@index');
Route::get('/Comptabilite/Piècescomptables/AjouterPiéces', 'PiecesController@storeaf');
Route::get('/Comptabilite/pc/Data', 'PiecesController@data');
Route::get('/Comptabilite/pc/Data2', 'PiecesController@data2');
Route::get('/Comptabilite/Piècescomptables/{id}/View', 'PiecesController@View');
Route::get('/Comptabilite/pdf/ec/{id}', 'PiecesController@pdf')->name('pdfdvqq');




Route::post('/insertpieces', 'PiecesController@insert');
Route::post('/updatepiecesppst/{id}', 'PiecesController@updatev');
Route::get('/updatepieces/{id}', 'PiecesController@updatev')->name('validatep');
Route::get('/Supprimerpieces/{id}', 'PiecesController@destroy')->name('deletepieceq');


Route::get('/Comptabilite/Ecriturescomptables', 'EcrituresController@index');
Route::get('/Comptabilite/ex/Data', 'EcrituresController@data');



Route::get('/Comptabilite/Grandlivre', 'RapportController@index1');
Route::get('/Comptabilite/Grandlivre/data', 'RapportController@data1');


Route::get('/Comptabilite/Bilan', 'RapportController@index2');
Route::get('/Comptabilite/Bilan/data', 'RapportController@data2');
