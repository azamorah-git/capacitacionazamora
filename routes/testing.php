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


Route::group(['prefix'=>'admin'], function(){

    Route::get('/saludar', function() {
        return "Hola";
    });

    Route::get('/saludar-p/{name}', function($name) {
        return "Hola" .name;
    });

    Route::get('/saludar-p/{name}', function($name ="vacio") {
        return "Hola" .name;
    });

    Route::get('/sumar/{op1}/{op2}', function($op1,$op2=1) {
            return $op1 + $op2;
    }); 

    Route::get('validador/{num}/{num2}', function($num,$num2) {
        return $num + $num2;
    });    
    
    //Route::get('validador2/{num}/{num2}', function($num,$num2) {
    //    return $num + $num2;
    //})->where (['num'=>'[0-9]+','num2=>'[0+9]+']);       
});
