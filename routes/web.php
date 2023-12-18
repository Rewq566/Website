<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilesController; /* toegevoegd


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!

'Profilecontroller@index'
|
*/

Route::get('/', function ()  {
    

    return view('welcome');
});

//Route::get('/users', function ()  {
    

//    return view('users');
//});
    
Route::get('/users', [ProfilesController::class, 'showUsers']);

    


