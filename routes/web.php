<?php

use Illuminate\Routing\RouteUri;
use Illuminate\Support\Facades\Route;
use App\Exports\InventarioExport;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('encuesta');
});

Route::get('/climOrg', 'ClimaOrganizacionalController@index')->name('climOrg.index');
Route::post('/climOrg/store/', 'ClimaOrganizacionalController@store')->name('climOrg.store');
Route::get('/pregun', 'ClimaOrganizacionalController@pregun')->name('pregun');
Route::post('/climOrg/save/', 'ClimaOrganizacionalController@save')->name('climOrg.save');

Route::get('/gracias', function () {
    return view('encuestaFin');
});

//Busqueda de subdireccion
Route::post('/subDir/findSub/', 'ClimaOrganizacionalController@findSub')->name('subDir.findSub');
// Route::get('/subDir/{id}', 'ClimaOrganizacionalController@findSubG')->name('subDir.findSubG');

// OOPS HUBO UN ERROR
Route::get('/oops', 'OopsController@index')->name('oops');

