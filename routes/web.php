<?php
use App\User;
use App\Notifications\CallFromReceptionist;
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
    // NOTE コメントアウトを外せば、’/’に遷移するとSlack通知ができる
    // $user = App\User::find(1);
    // $user->notify(new \App\Notifications\CallFromReceptionist($user));
    return view('welcome');
});

Route::get('/users', 'UsersController@index')->name('users.index');
