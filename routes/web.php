<?php

use App\Http\Controllers\GuestsController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/greeting', function () {
    //You can write your logic here   
    $a = 1; 
    $b = 2;
    $c = $a + $b;
    return 'Hello World'.$c;
});

Route::get('/user', // The path
[
    UserController::class, // The Controller path
    'index' // The function of 
]);

Route::get('/', function () {
    return "This Main Route";
});

Route::get('/guest', [GuestsController::class, 'index']);
// Route::resource('/crud',UserController::class);
Route::get('/welcome', function(){
    return view('welcome');
});

Route::get('/dashboard', function (){
    return view('layout.master');
});


