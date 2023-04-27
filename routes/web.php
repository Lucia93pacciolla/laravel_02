<?php

use Illuminate\Support\Facades\Route;

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

Route::get('inizio', function () {
    return view('welcome');
})->name('homepage');


Route::get('about', function () {
    return view('staff');
})->name('chi.siamo');

Route::get('viaggi', function () {

    $viaggi = [
        ['id' => 1, 'nome' => 'America', 'durata' => 'una settimana'],
        ['id' => 2, 'nome' => 'Asia', 'durata' => 'due settimane'],
        ['id' => 3, 'nome' => 'Africa', 'durata' => 'tre settimane'],
    ];
    return view('servizi', ['viaggi' => $viaggi]);
})->name('i.nostri.viaggi');


route::get('viaggi/dettaglio/{id}', function($id){
    $viaggi = [
        ['id' => 1, 'nome' => 'America', 'durata' => 'una settimana', 'prezzo' => 1200],
        ['id' => 2, 'nome' => 'Asia', 'durata' => 'due settimane', 'prezzo' => 3000],
        ['id' => 3, 'nome' => 'Africa', 'durata' => 'tre settimane', 'prezzo' => 2500],
    ];

    foreach($viaggi as $viaggio){

        if($id == $viaggio['id']){
             return view('viaggi-dettaglio', ['viaggio' => $viaggio]);
        }
    }

})->name('dettaglio.viaggi');


