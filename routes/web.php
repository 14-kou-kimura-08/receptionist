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
})->name('welcome');

Route::get('/groups', 'GroupsController@index')->name('groups.index');
Route::get('/users/{group_id}', 'UsersController@index')->where('group_id', '[0-9]+')->name('users.index');
Route::get('/notification/{id}', 'UsersController@notification')->where('id', '[0-9]+')->name('users.notification');
Route::get('/corporate', 'UsersController@notificationToCorporate')->name('users.corporate');
