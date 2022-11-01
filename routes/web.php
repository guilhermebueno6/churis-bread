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
    Mapper::map(
        43.008333019353415, 
        -81.24089793536393,
        [
            'zoom' => 16,
            'draggable' => false,
            'marker' => true,
            'title' => 'Churis Bread'
        ]
        );
    return view('index')->withTitle('Churis Bread');
    
       
});

Route::get('/location', function () {
    Mapper::map(
        53.3,
        -1.4,
        [
            'zoom' => 16,
            'draggable' => false,
            'marker' => true,
            

        ]
        );
        print '<div style="height: 400px; width: 400px">';
        print Mapper::render();
        print '</div>';
});




require __DIR__.'/auth.php';
