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
    return view('welcome'); //view는 Helper Function임. 
});
Route::get('/list', function (Request $request) { //최초 접속
    return view('index');
    //$uri = $request->path();
});
// url/create가 된다. PostModelController class의 create 메소드 실행 후 응답 돌려줌.
//Route::get('/create', 'PostModelController@create'); 이걸론 왜 안될까?
Route::get('/create', function () {
    return view('create');
});
Route::post('/list','PostModelController@store');
Route::put('edit/{id}','PostModelController@edit')->name('update');
Route::get('/show/{id}',[PostModelController::class, 'show'])->name('show');
Route::redirect('/here', '/there', 301);
// // Route::fullback(function () {
// //     '현재 페이지 오류로 인하여 준비중입니다.';
// //     return view('main');
// // });