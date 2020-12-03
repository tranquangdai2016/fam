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

Route::get('/login','AuthController@login')->name('auth.login');
Route::get('/logout','AuthController@logout')->name('auth.logout');
Route::get('/','PageController@index')->name('dashboard');
Route::get('test', function () {
        $user = new \App\Models\User;
        $user->name = 'dai';
        $user->role = 1;
        $user->email = 'daitq@gmail.com';
        $user->password = bcrypt('123456789');
        $user->save();
        echo "Create User success";
    });
    