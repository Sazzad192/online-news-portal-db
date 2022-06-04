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

Route::get('backend', 'AdminController@dashboard');           //Dashboard view

Route::resource('country', ComCountryController::class);    //Country

//category
Route::resource('category', ComCategorieController::class);  //Category
Route::get('/status{com_Categorie}', '\App\Http\Controllers\ComCategorieController@status');  //Category-status
Route::get('/show_app{com_Categorie}', '\App\Http\Controllers\ComCategorieController@apps');  //Category-app
Route::get('/show_tag{com_Categorie}', '\App\Http\Controllers\ComCategorieController@tags');  //Category-tags



Route::resource('author', ComAuthorController::class);  //author
Route::get('/show_byline/{com_author}', '\App\Http\Controllers\ComAuthorController@showbyline');  //Show byline
Route::get('/noindex/{com_author}', '\App\Http\Controllers\ComAuthorController@noindex');  //Noindex


Route::resource('audittrail', ComAudittrailBncontentController::class);  //audittrail
Route::get('/status/{com_Subcategorie}', '\App\Http\Controllers\ComSubcategorieController@status');  //Category-status


Route::resource('division', ComDivisionController::class);  //division

Route::resource('subcat', ComSubcategorieController::class);  //Subcategory
Route::get('/status/{com_Subcategorie}', '\App\Http\Controllers\ComSubcategorieController@status');  //Category-status

Route::resource('district',ComDistrictController::class);  //district

Route::resource('division',ComDivisionController::class);  //division

Route::resource('upazila',ComUpazilaController::class);  //upazila

Route::resource('conposition',BnContentPositionController::class);  //Content_position

//  ----------------------------- Content -------------------------------

Route::resource('content',BnContentController::class);  //Content
Route::get('/content-status/{bn_Content}','\App\Http\Controllers\BnContentController@status');  //Content-status
Route::get('/standout_tag/{bn_Content}','\App\Http\Controllers\BnContentController@standout');  //Standouttag-status
Route::get('/recent_status/{bn_Content}','\App\Http\Controllers\BnContentController@recentstatus');  //Recent-status
Route::get('/instant_article/{bn_Content}','\App\Http\Controllers\BnContentController@instantarticle');  //Instant-Artical-status
Route::get('/is_special/{bn_Content}','\App\Http\Controllers\BnContentController@isspecial');  //Instant-Artical-status
Route::get('/show_image/{bn_Content}','\App\Http\Controllers\BnContentController@showimage');  //Show-status
Route::get('/is_evergreen/{bn_Content}','\App\Http\Controllers\BnContentController@showimage');  //Evergreen

Route::resource('podcast',PodcastController::class); //podcast


Route::get('/apend','\App\Http\Controllers\AppendController@append');

// Route::get('/podcast', '\App\Http\Controllers\PodcastController@index');