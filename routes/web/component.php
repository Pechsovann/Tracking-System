<?php
Route::group(['prefix' => 'components' , 'namespace' => 'Components'], function() {
    Route::get('button', 'buttonController@index');
    Route::get('card', 'cardController@index');
});
