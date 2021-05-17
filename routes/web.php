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
    return view('welcome');
});
Route::get('/register-member', function () {
    return view('register-member');
})->name('register.member');
Route::post('/create-member','App\Http\Controllers\GymMemberController@createNewMember')->name('create.new.member');
Route::get('/show-members','App\Http\Controllers\GymMemberController@showMembers')->name('show.members')->middleware('auth');
Route::get('/delete-member/{id}','App\Http\Controllers\GymMemberController@deleteMember')->name('delete.member');
Route::get('/editing-member/{id}','App\Http\Controllers\GymMemberController@editingMember')->name('editing.member');
Route::get('/edit-member/{id}','App\Http\Controllers\GymMemberController@editMember')->name('edit.member');





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
