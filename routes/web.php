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


Route::get('/', function () {
    return view('welcome');
});

    //Route::get('/hello', function () {
    //    return view('hello');
    //});

    //Route::get('/hello', function () {
    //    return view('hello', [
    //        'name' => 'Dev'
    //    ]);
    //});

    //Route::get('/hello', function () {
    //    return view('hello')->with('name', 'John');
    //});

    //Route::get('/hello', function () {
    //    $name = 'Dev3';
    //    return view('hello', [
    //        'name' => $name
    //    ]);
    //});

//    Route::get('/hello', function () {
//        $tasks = [
//            'add task',
//            'find task',
//            'review task'
//        ];
//        return view('hello', compact('tasks'));
//    });

Route::get('/hello', function () {
    $tasks = DB::table('tasks')->get();
    return view('hello', compact('tasks'));
});

//Route::get('/hello', function () {
//    $tasks = DB::table('tasks')->get();
//    return view('hello', compact('tasks'));
//});
