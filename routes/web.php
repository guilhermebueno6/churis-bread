<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\GoogleSocialiteController;
use Cornford\Googlmapper\Facades\MapperFacade;

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
Route::get('auth/google', [GoogleSocialiteController::class, 'redirectToGoogle']);
Route::get('callback/google', [GoogleSocialiteController::class, 'handleCallback']);

Route::get('/', function () {
    Mapper::location('1040 Adelaide St N, London, ON N5Y 2M9')->map([
            'zoom' => 16,
            'title' => 'Churis Bread',
    ]);
    return view('index')->withTitle('Churis Bread');
    
       
});

require __DIR__.'/auth.php';
