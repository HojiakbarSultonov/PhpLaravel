<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('users', [UserController::class, 'index']);//action
Route::get('users/create', [UserController::class, 'create']);
Route::get('users/{user}', [UserController::class, 'show']);
Route::get('users/{user}/edit', [UserController::class, 'edit']);
//Route::get('/test-route', function (){
//    return view('test');
//});

//Route::get('/users', function (){
//    return 'User';
//});

//Route::get('/users/{id?}', function ($user_id=null){
//    return 'siz tanlagan User id bu : ' . $user_id ;
//});
//
//Route::view('tests', 'test');
//
//Route::get('/users/{id?}', function ($user_id=null){
//    return 'siz tanlagan User id bu : ' . $user_id ;
//})->name('users');
//
//
//Route::prefix('admin')->group(function (){
//    Route::get('/users', function (){
//        return 'admin user';
//    })
//})
//}



//Route::post('contact', function (){
//    return 'post route';
//});

//
//Route::post('contact', [Controller::class, 'action']);

