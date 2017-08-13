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

Route::resource('pengumuman', 'PengumumanController');

/*
|--------------------------------------------------------------------------
| Kategori Jabatan Tersangka Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('penyidikan', 'LayoutController@penyidikan');

/*
|--------------------------------------------------------------------------
| Kategori Jabatan Tersangka Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('jabatan', 'JabatanController@index');

Route::get('jabatan_create', 'JabatanController@jabatan_create');

Route::get('jabatan_edit', 'JabatanController@jabatan_edit');

/*
|--------------------------------------------------------------------------
| Obyek [Benda Sitaan] Routes
|--------------------------------------------------------------------------
|
| frb1 = surat perintah geledah
| erb1 = surad edit benda sitaan [Berita Acara Penyitaan]
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('geledah', 'ObyekController@geledah');

Route::get('erb1', 'ObyekController@erb1');

/*
|--------------------------------------------------------------------------
| RP-3mum Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('rp3mum', 'Rp3mumController@index');

Route::get('frp3mum', 'Rp3mumController@frp3mum');

Route::get('erp3mum', 'Rp3mumController@erp3mum');

/*
|--------------------------------------------------------------------------
| RP-3sus Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('rp3sus', 'Rp3susController@index');

Route::get('frp3sus', 'Rp3susController@frp3sus');

/*
|--------------------------------------------------------------------------
Subyek [Tersangka] Routes
|--------------------------------------------------------------------------
|
| frt1 = Surat Penetapan Tersangka
| frt2 = surat perintah penahanan
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('subyek', 'SubyekController@index');

Route::get('frt0', 'SubyekController@frt0');

Route::get('frt2', 'SubyekController@frt2');

Route::get('ert1', 'SubyekController@ert1');

/*
|--------------------------------------------------------------------------
| User [Jaksa Penyidik] Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('user', 'UserController@index');

Route::get('fjaksa', 'UserController@fjaksa');

Route::get('ejaksa', 'UserController@ejaksa');

Route::group(['prefix' => '', 'middleware' => ['auth']], function() {
	Route::resource('jaksa', 'JaksasController');
	Route::resource('pasal', 'PasalsController');
	Route::resource('kategori_subyek', 'KategoriSubyeksController');
	Route::resource('rp1', 'Rp1Controller');
	Route::resource('lidik', 'LidikController', [
		'except' => ['create', 'store', 'show', 'destroy']]);
	Route::resource('rp2', 'Rp2Controller');
	Route::get('dikmum/{kasus_id}', 'Rp3MumController@create');
	Route::resource('rp3mum', 'Rp3MumController');
	Route::resource('rp3sus', 'Rp3SusController');
	Route::get('subyek', 'SubyekController@index');
	Route::get('tersangka/{kasus_id}', 'SubyekController@tersangka');
	Route::get('obyek', 'ObyekController@index');
	Route::get('fp15/{kasus_id}', 'Rp3SusController@fp15');
	Route::get('fp15a/{kasus_id}', 'Rp3SusController@fp15a');
});

Route::group(['prefix' => 'kasus'], function() {
	Route::group(['prefix' => '{kasus_id}'], function($kasus_id) {
    	
    	Route::resource('subyek', 'SubyekController', [
			'except' => ['index', 'show', 'destroy']]);
    	Route::resource('obyek', 'ObyekController', [
			'except' => ['index', 'show', 'destroy']]);
  	});	
});