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

//Login//
Route::get('login', 'UserController@login');
Route::post('login/check', 'UserController@check');
Route::get('logout', 'UserController@logout');
Route::post('register', 'UserController@store');

Route::get('masyarakat/beranda-masyarakat', 'UserController@dashboard');
Route::get('masyarakat/profil', 'UserController@profile');

Route::get('masyarakat/complaint', 'ComplaintController@complaint');
Route::put('masyarakat/complaint/store', 'ComplaintController@store');
Route::get('masyrakat/report/detail/{id}', 'ComplaintController@detail');

Route::get('admin/home', 'AdminController@home');

Route::get('admin/report', 'ComplaintController@show');
Route::get('admin/report/detail/{id}', 'ComplaintController@admindetail');
Route::put('admin/report/sort/{id}', 'ComplaintController@reportsort');

Route::get('admin/process', 'ComplaintController@process');
Route::get('admin/processing/{id}', 'ComplaintController@processing');
Route::put('admin/processing/store/{id}', 'ComplaintController@processupdate');

Route::get('admin/feed', 'ComplaintController@feedback');
Route::get('admin/feedbacking/{id}', 'ComplaintController@feedbacking');
Route::put('admin/feedbacking/store/{id}', 'ComplaintController@feedbackupdate');

Route::get('admin/generate', 'ComplaintController@generate');
Route::get('admin/generating/{id}', 'ComplaintController@generating');

Route::get('admin/pdf', 'ComplaintController@pdf');
Route::get('admin/pdf/detail/{id}', 'ComplaintController@pdfdetail');
Route::get('admin/pdf/cetak/{id}', 'ComplaintController@getDownload');

Route::get('admin/user-setting', 'AdminController@usersetting');
Route::put('admin/user-setting/sort/{id}', 'AdminController@rolesort');


Route::get('test', 'ComplaintController@test');