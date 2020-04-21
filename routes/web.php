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

Route::get('/bank-account', function(){
    
    // echo $dataA = DB::table('categories ')->get();
    //    echo $data = DB::table('accounts')->where('bank_id','2')->get();
    // $data = DB::table('accounts')->where('customer_name','Haseeb Butt')->update(['bank_id'=>'3']);
    // $data = DB::table('accounts')->insert(['customer_name'=>'Taha Khan','bank_id'=>'4', 'account_no'=>'00000']);
    // $data = DB::table('accounts')->where('count[0]')->insert(['customer_name'=>'Fiaz Khan','bank_id'=>'2', 'account_no'=>'211']);
    // if($data)
    //     echo "done";
    $data = 'App\Bank'::find(2)->accounts;
    echo $data;
    
    dd();
});

Route::get('employeTest', function(){
    $empaloyes = 'App\Employe'::find(2)->roles;
    // foreach($empaloyes as $emp){
    //     echo $emp;
    //     // echo '<pre>';
    //     //     print_r($emp->toArray());
    //     // echo '</pre>';
    // }
    foreach ($empaloyes as $key => $value) {
        echo $value->name;
        echo "<br>";
    }
        
    dd();
});


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
    Route::resource('/option', 'OptionsController');
    Route::resource('/tabuler', 'TabulerController');
    Route::resource('/user-test', 'UserTestController');
    Route::resource('/add-competition', 'CompetitionController');

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

// CRUD for Self Practice 

Route::resource('/patient-crud', 'PatientController');