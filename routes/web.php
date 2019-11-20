<?php

Route::get('/', 'FrontController@index')->middleware('notAdult')->name('index');
Route::get('/solicitar-acceso', 'FrontController@requestAccess');
Auth::routes();

Route::group(['middleware' => ['adult']], function () {
    Route::get('/escoge-tu-noche', 'CategoryController')->name('choose.night');
    Route::get('/sorteo/{categorySlug}/{lotterySlug?}', 'LotteryController')->name('lottery');
//    Route::view('/noche-en-limosina', 'front.lottery')->name('lottery');
    Route::view('/nosotros', 'front.about')->name('about');
    Route::view('/reglas-del-juego', 'front.rules')->name('rules');
    Route::view('/contacto', 'front.contact')->name('contact');
});

Route::get('air', function () {

    $key = env('AIRTABLE_KEY');
    $base = env('AIRTABLE_BASE');

    $airtable = new \Armetiz\AirtableSDK\Airtable($key, $base);
    $records = $airtable->findRecords('Sorteos');
    dd($records);


});
