<?php
use App\Events\TaskEvent;

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
 
   
   //User::find(1)->notify(new TaskCompleted);
    return view ('welcome');
});

Auth::routes();

Route::get('/counter', function () {
 
   return view ('counter');
});

Route::get('markAsRead', function () {
 auth()->user()->unreadNotifications->markAsRead();
   return  redirect()-> back();
 })->name('markRead');

Route::get('/', 'BlogController@index');

Route::get('/notification/get','notificationController@get');

//post
 //Route::get('posts','postcontroller@index');
 //Route::get('posts/create','postcontroller@create');
 //Route::post('posts/store','postcontroller@store');
 //Route::get('posts/{id}','postcontroller@show');
Route::resource('posts','postcontroller');
Route::get('posts/{id}','postcontroller@show');
//Route::post('/comment/{id}','postcontroller@comment');
Route::post('posts/{id}','postcontroller@comment')->name('post.comment');

//comment
//Route::('posts','postcontrooler@index');
// Route::get('posts/create','postcontrooler@create');
// Route::post('posts/store','postcontrooler@store');
// Route::get('posts/{id}','postcontrooler@show');
Route::resource('comments','commentcontroller');
//Route::post('comments/{post_id}','commentcontroller@store')->name('comments.store');

Route::get('event', function(){
   event(new TaskEvent('Hi Nkululeko how are you'));

});

Route::get('listen',function(){
   return view('listenBroadcast');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
