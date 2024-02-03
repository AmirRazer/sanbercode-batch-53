<?php

use App\Http\Controllers\genre;
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
Route::get('master', function () {
    return view('layouts.master');
});

Route::get('data-table',function(){
    return view('pages.data-table');    
});
Route::get('table',function(){
    return view('pages.table');    
});

Route::get('/genre',[genre::class,'index']);
Route::get('/genre/create',[genre::class,'create']);
Route::post('/genre',[genre::class,'store']);
Route::get('/genre/{id}',[genre::class,'show']);
Route::get('/genre/{id}/edit',[genre::class,'edit']);
Route::put('/genre/{id}',[genre::class,'update']);
Route::delete('/genre/{id}',[genre::class,'destroy']);



