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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/incomes', 'IncomeController@index')->name('incomes');
Route::get('/banks', 'BankController@index')->name('banks');
Route::post('/banks/add', 'BankController@add')->name('add_new_bank');
Route::post('/incomes/add_new_income', 'IncomeController@add')->name('add_new_income');
Route::get('profile', 'UserController@profile');
Route::post('profile', 'UserController@updatephoto');
// Route::get('incomes', ['as' => 'incomes', function () {
//     return View::make('income');
// }]);add_new_bank