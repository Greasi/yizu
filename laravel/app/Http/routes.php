<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|
| Here is where you can register all of the routes for an application.
|--------------------------------------------------------------------------
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|


Route::get('/', function () {
    return view('welcome');
});

*/

Route::get('/', 'WelcomeController@index');//首页
Route::get('login', 'WelcomeController@login');//登录
Route::get('captcha/{tmp}', 'WelcomeController@captcha');//验证码
Route::post('dologin', 'WelcomeController@dologin');//登录验证
Route::get('register', 'WelcomeController@register');//注册
Route::post('doregister', 'WelcomeController@doregister');//注册添加
Route::get('zhiyeadd', 'ContestRoomController@zhiyeadd');

//登录成功之后的主页
Route::get('index', 'WelcomeController@loginsuccess_index');
Route::get('loginout', 'WelcomeController@loginout');//退出

Route::post('dozhiyeadd', 'ContestRoomController@dozhiyeadd');//职业添加
Route::get('companyadd', 'ContestRoomController@companyadd');
Route::post('docompanyadd', 'ContestRoomController@docompanyadd');//公司添加


Route::get('contestRoom', 'ContestRoomController@index');//题库主页
Route::get('topics', 'ContestRoomController@topics');//精华专题
Route::get('questionCenter', 'ContestRoomController@questionCenter');//试题广场
Route::get('questionTerminal', 'ContestRoomController@questionTerminal');//试题广场--》题
Route::get('oj', 'ContestRoomController@oj');//在线编程
Route::get('intelligentTest', 'ContestRoomController@intelligentTest');//专项练习
Route::get('question', 'ContestRoomController@question');//题库答题

Route::get('course','CourseController@index');//课程
Route::get('live','CourseController@live');//课程
//排行榜
Route::get('ranking','RankingController@ranking');//
Route::get('ranking_all','RankingController@ranking_all');//
//内推
Route::get('recommand','RecommandController@index');//
//讨论区
Route::get('discuss','DiscussController@index');//课程
Route::get('discuss/{post}','DiscussController@post');//课程
Route::get('discuss/{login}','WelcomeController@login');
Route::get('discuss_all','DiscussController@discuss_all');//课程
//app
Route::get('app','AppController@index');//课程


Route::get('/mongodb', function () {
	$user=\App\User::all()->toarray();
	print_r($user);
});
