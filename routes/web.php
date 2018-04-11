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

Route::get('/home', 'HomeController@index');
Route::get('/admin', 'HomeController@index');
Route::get('/trial', 'HomeController@trial');
Route::get('master_penyidikan', 'HomeController@master_penyidikan');
Route::get('master_penuntutan', 'HomeController@master_penuntutan');


Route::get('penyidikan', 'LayoutController@penyidikan');

Route::group(['prefix' => '', 'middleware' => ['auth']], function() {
	Route::resource('jaksa', 'JaksasController');
	Route::resource('pasal', 'PasalsController');
	Route::resource('kategori_subyek', 'KategoriSubyeksController');
	Route::resource('rp1', 'Rp1Controller');
	Route::resource('lidik', 'LidikController', [
		'except' => ['create', 'store', 'show', 'destroy']]);
	Route::resource('rp2', 'Rp2Controller');
	Route::get('dikmum/{kasus_id}', 'Rp3MumController@create');
	Route::get('diksus/{kasus_id}/spt/{spt_id}', 'Rp3SusController@create');
	Route::resource('rp3mum', 'Rp3MumController');
	Route::resource('spt', 'SptController');
	Route::resource('rp3sus', 'Rp3SusController');
	Route::get('subyek', 'SubyekController@index');
	Route::get('tersangka/{kasus_id}', 'SubyekController@tersangka');
	Route::get('tahan/{subyek_id}', 'SubyekController@tahan');
	Route::put('tahan/{subyek_id}', 'SubyekController@tahanupdate');
	Route::get('obyek', 'ObyekController@index');
	Route::get('fp15/{spt_id}', 'Rp3SusController@fp15');
	Route::put('p15/{spt_id}', 'Rp3SusController@p15update');
	Route::get('fp15a/{spt_id}', 'Rp3SusController@fp15a');
	Route::put('p15a/{spt_id}', 'Rp3SusController@p15aupdate');
	Route::get('surat_jaksa/{id}/{tipe}/{kasus_id}', 'JaksasController@deleteSuratJaksa');
	Route::get('surat_pasal/{id}/{tipe}/{kasus_id}', 'PasalsController@deleteSuratPasal');
});

Route::group(['prefix' => 'kasus'], function() {
	Route::group(['prefix' => '{kasus_id}'], function($kasus_id) {
    	
    	Route::resource('subyek', 'SubyekController', [
			'except' => ['index', 'show']]);
    	Route::resource('obyek', 'ObyekController', [
			'except' => ['index', 'show', 'destroy']]);
  	});	
});