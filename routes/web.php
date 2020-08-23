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

Route::get('/', 'HomeController@index');
Route::get('/register', 'RegistrationController@create');
Route::post('register', 'RegistrationController@store');
Route::get('/logout', 'SessionsController@destroy');
Route::get('/aboutus', 'AboutController@create')->name('aboutus.aboutus');
Route::get('/gallery', 'GalleryController@create')->name('gallery.gallery');
Route::get('/ourresorts', 'ResortController@create')->name('ourresorts.ourresorts');
Route::get('/safety', 'SafetyController@create')->name('safety.safety');
Route::get('/teambuilding', 'TeamBuildingController@create')->name('teambuilding.teambuilding');
Route::get('/contactus', 'ContactusController@create')->name('contactus.contactus');
Route::post('contactus', 'ContactusController@store')->name('contactus.store');
Route::get('/ourstoreproduct', 'OurStoreProductController@products')->name('ourstoreproduct.ourstoreproduct');
Route::get('/admin', 'AdminController@create')->name('admin.admin');
Route::get('/addclient', 'AdminController@addclient')->name('addclient');
Route::post('login', 'LoginController@store')->name('login');
Route::get('/dashboard', 'AdminController@dashboard')->name('admin.dashboard');
Route::get('logout', 'LoginController@logout')->name('logout');
Route::post('/upload-file', 'AdminController@fileUpload')->name('fileUpload');
Route::get('/clientlist', 'AdminController@clientlist')->name('clientlist');
Route::get('/clientedit/{id}', 'AdminController@clientedit')->name('clientedit');
