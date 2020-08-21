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
//

Auth::routes();
Route::group(['prefix'=>'administrator' , 'middleware'=>['auth','IsAdmin'] ],function(){

Route::get('/','AdminstratorController@index')->name('admin.home');
Route::resource('setting','SettingController');
Route::resource('categories','CategoryController');
Route::resource('news','PostsController');
Route::resource('todolist','TodoListController');
Route::get('todocheck/{id}','TodoListController@todocheck')->name('todocheck');
Route::resource('comments','CommentController');

Route::get('dailycomment','CommentController@dailycomment')->name('dailycomment');
Route::get('checkedcomment','CommentController@checkedcomment')->name('checkedcomment');
Route::get('notcheckcomment','CommentController@notcheckcomment')->name('notcheckcomment');
Route::get('replycomment','CommentController@replycomment')->name('replycomment');
Route::get('comments/access/{id}','CommentController@access')->name('comments.access');
Route::get('comments/remove/{id}','CommentController@remove')->name('comments.remove');
Route::get('comments/create/{id}/{postid}/{userid}','CommentController@create')->name('comments.create');

Route::get('adduser','AdminstratorController@userCreate')->name('admin.adduser');
Route::post('saveuser','AdminstratorController@userStore')->name('user.register');
Route::get('users','AdminstratorController@usersList')->name('admin.users');
Route::get('updateuser/{id}','AdminstratorController@updateUser')->name('admin.updateuser');
Route::post('edituser/{id}','AdminstratorController@editUser')->name('admin.edituser');
Route::delete('userdelete/{id}','AdminstratorController@destroyUser')->name('admin.deleteuser');


Route::get('notfound',function(){  $menu = '404'; return view('admin.404',compact('menu'));  })->name('admin404');


Route::resource('/bot','Bot\BotController');

});//end






Route::get('/', 'HomeController@index')->name('home');
Route::get('/xeber/{id}/{slug}', 'HomeController@detailNews')->name('detail') ;
Route::get('/{id}/{slug}', 'HomeController@categoryNews')->name('categorynews') ;
Route::get('/notfound404',function(){ return view('404'); })->name('notfound404');
Route::get('/searching','HomeController@search') ;


Route::get('/haqqimizda', 'SiteController@about')->name('about');
Route::get('/elaqe', 'SiteController@contact')->name('contact');

//Route:get('/login','');
// user prefix goup duzeldilecek ,user problemi hell tapandan sonra
Route::resource('usercomment','UsercommentController');


Route::get('/home', 'HomeController@index')->name('home');
