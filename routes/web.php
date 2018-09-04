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

Route::get('/artistas/{artista}', function ($artista) {
    $artistas=['Katy perry','Enrique Iglesias','Ariana Grande','Taylor Swift','Shakira','Bruno Mars','Jennifer lopez','Pitbull','Britney Spears']
    return view('pantalla1',
    [
        'artista'=>$artista
        'artistas'=>$artistas
    ]
    );
});