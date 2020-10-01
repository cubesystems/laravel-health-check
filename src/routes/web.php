<?php

Route::group(['prefix' => 'health-check'], function () {
    Route::get('/readiness', 'CubeSystems\HealthCheck\Http\Controllers\HealthCheckController@readiness')->name('readiness');
    Route::get('/liveness', 'CubeSystems\HealthCheck\Http\Controllers\HealthCheckController@liveness')->name('liveness');
});
