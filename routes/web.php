<?php
use App\role;
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


Route::get('/', 'FrontController@index')->name('studentHome');
Route::get('/shirts', 'FrontController@shirts')->name('shirts');
Route::get('shirt', 'FrontController@shirt');

Auth::routes();

Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){

    Route::get('/',function(){
        return view('admin.index');
    });
    Route::resource('/product', 'productsController');
    Route::resource('/category', 'CategoryController');
    Route::resource('/quiz', 'QuizController');
});

Route::get('rate', 'FrontController@rate');

// Route::get('/role', function(){
//     $result = app\role::find(1)->users;
//     echo $result;
//     dd();
// });
    // Rating Controller 
Route::get('/rate-controller', 'ratingController@inputRate');
Route::post('saveRate', 'ratingController@saveRate');
Route::post('displayRate', 'ratingController@displayRate')->name('displayRate');


    //Student-Login-Routes
Route::get('student-register', 'StudentController@studentRegister')->name('student-register');
Route::post('student-register-request', 'StudentController@studentRegisterRequest');

Route::get('student-login', 'StudentController@studentLogin')->name('student-login');
Route::post('student-login-request', 'StudentController@studentLoginRequest');

