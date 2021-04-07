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
Route::post('/registered-member','App\Http\Controllers\GymMemberController@registerNewGymMember')->name('register.new.member');
Route::get('/show-members','App\Http\Controllers\GymMemberController@showMembers')->name('show.members');



