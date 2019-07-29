<?php

Route::get('/', 'FrontController@index')->middleware('notAdult')->name('index');
Route::get('/solicitar-acceso', 'FrontController@requestAccess');
Auth::routes();

Route::group(['middleware' => ['adult']], function () {
    Route::view('/escoge-tu-noche', 'front.chooseNight')->name('choose.night');
    Route::view('/noche-en-limosina', 'front.lottery')->name('lottery');
    Route::view('/nosotros', 'front.about')->name('about');
    Route::view('/reglas-del-juego', 'front.rules')->name('rules');
    Route::view('/contacto', 'front.contact')->name('contact');
});

