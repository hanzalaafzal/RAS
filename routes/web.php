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
    return view('client.pages.home');
});

Route::get('/login',function(){
  return view('client.pages.login');
})->name('login');

Route::get('/vehicles/verify','VehicleController@verifyVehicle')->name('verifyvehicle');

Route::get('/vehicle/verify/{code}','VehicleController@verifyVehicle')->name('');

//Learner Verification
Route::get('/learner/verify','CertificateController@viewVerifyLearner')->name('certificate.view');

Route::get('/learners/verify','CertificateController@viewCertificate')->name('verify.certificate');

Route::post('/authenticate','LoginController@auth')->name('authenticate');

Route::middleware('auth.check')->prefix('/admin')->group(function(){
  Route::get('/dashboard',function(){
    return view('admin.pages.dashboard');
  })->name('admin.dashboard');

  Route::get('/logout',function(){
    session()->forget('auth');
    return redirect()->route('login');
  })->name('logout');

  Route::get('/vehicle/list','VehicleController@viewVehicles')->name('list.vehicle');

  Route::get('/vehicle/add','VehicleController@addVehicles')->name('add.vehicle');
  Route::get('/vehicle/category/list','VehicleController@viewVechileCateogires')->name('add.category');
  Route::post('/vehicle/category','VehicleController@postVehicleCategories')->name('post.category');
  Route::post('/vehicle/add','VehicleController@postVehicles')->name('post.vehicle');
  Route::get('/vehicle/certificate/{vcode}','CertificateController@GenerateCertificate')->name('certificate');
  Route::get('/vehicle/update/{vcode}','VehicleController@viewUpdateVehicles')->name('page.update.vehicle');
  Route::post('/vehicle/update','VehicleController@updateVehicle')->name('update.vehicle');
  Route::get('/vehicle/delete/{vcode}','VehicleController@deleteVehicle')->name('delete.vehicle');

  Route::get('/learner/add/','CertificateController@viewAddLeaner')->name('add.learner');
  Route::post('/learner/post','CertificateController@addLearner')->name('learner.post');
  Route::get('/leaners/list','CertificateController@viewLeanersList')->name('learner.list');
  Route::get('/learners/delete/{id}','CertificateController@deleteCertificate')->name('delete.learner');


});
