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
Route::get('/dynamic_pdf', 'DynamicPDFController@index');

Route::get('/dynamic_pdf/pdf', 'DynamicPDFController@pdf');


Route::group(['middleware' => ['web','auth']], function(){
  Route::get('/', function () {
      return view('welcome');
  });

  Route::get('/home', function(){
      if (Auth::user()->admin ==0){
          return view('dashboard_index');

      }else{
          $users['users'] = \App\User::all();
          return view('adminhome',$users);
      }
  });


});




Route::post('send', 'mailController@send');
Route::get('email', 'mailController@email');
Auth::routes();

Route::get('file','FileController@create');
Route::post('file','FileController@store');

Route::get('events', 'EventController@index');

Route::get('/homee', 'HomeController@index')->name('homee');
Route::resource('/dashboard', 'DashboardpoliceController');
Route::resource('/policeob', 'PoliceobController');
Route::resource('/policeobb', 'PoliceobbController');
Route::resource('/addcalender', 'AddcalenderController');
Route::resource('/admincasecreate', 'admincasecreateController');





Route::get('/suspiciouspolice','SuspiciousController@home');
Route::get('/create', function()
{

return view('inc.create');

});

Route::post('/insert','SuspiciousController@add');
Route::get('/update1/{id}','SuspiciousController@update');
Route::post('/edit1/{id}','SuspiciousController@edit');
Route::get('/read1/{id}','SuspiciousController@read');
Route::get('/delete1/{id}','SuspiciousController@delete');
Auth::routes();


Route::get('/sos','LocationsController@home');
Route::get('/update/{id}','LocationsController@update');
Route::post('/edit/{id}','LocationsController@edit');
Route::get('/read/{id}','LocationsController@read');
Route::get('/delete/{id}','LocationsController@delete');

Route::group(['prefix' => 'posts'], function() {
    Route::get('/', 'PostController@index');
    
   //Route::match(['get', 'post'], 'create', 'PostController@create');
  // Route::match(['get', 'put'], 'update/{id}', 'PostController@update');
  Route::get('update/{id}', 'PostController@update');
  Route::post('/edit/{id}','PostController@edit');
    Route::get('show/{id}', 'PostController@show');
    Route::delete('delete/{id}', 'PostController@destroy');
    Route::get('/index2', 'PostController@index');
  });

Route::get('stripe', 'StripePaymentController@stripe');
Route::post('stripe', 'StripePaymentController@stripePost')->name('stripe.post');

Route::resource('/student','StudentController');

Route::get('/admincase','AdminobController@home');
Route::get('/adminupdate/{id}','AdminobController@update');
Route::post('/adminedit/{id}','AdminobController@edit');
Route::get('/delete/{id}','AdminobController@delete');


Route::get('/policecategory', function () {
  return view('policecategory');
});
