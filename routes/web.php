<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\RedSocialController;

Route::controller(RedSocialController::class) ->group(function() {
    Route::get('/', 'Register')->name('Register');
    Route::post('/', 'Register')->name('Register');

    Route::get('/registrarse', 'showRegisterForm')->name('registrarse');
    Route::post('/registrarse', 'register')->name('registrarse');

    Route::get('/recuperarPassword', 'showRecoverForm')->name('recuperarPassword');
    Route::post('/recuperarPassword', 'recover')->name('procesar_recuperacion');

    Route::get('/cambiarPassword', 'showChangePasswordForm')->name('cambiar_password');
    Route::post('/cambiarPassword', 'changePassword')->name('actualizar_password');

    Route::get('/bienvenido', 'bienvenido')-> name('ingreso');

    Route::post('/logout', 'logout')-> name('logout');
    
    Route::get('/verificar', 'showMesaggeVerificar')-> name('verificar');

});
