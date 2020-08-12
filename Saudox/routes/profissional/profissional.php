<?php

// Dentro do namespace (diretorio) Auth
// Como já está dentro do namespace 'Profissional', fica: Profisisonal/Auth
Route::namespace('Auth')->group(function(){

    Route::middleware('auth:profissional')->group(function() {
        Route::any('/logout','LoginController@logout')->name('.logout');
        Route::any('/logout','LoginController@logout')->name('.logout');
    });

    Route::middleware('ninguemLogado')->group(function() {
        //Login Routes
        Route::get('/login','LoginController@showLoginForm')->name('.login')->middleware('ninguemLogado');
        Route::post('/login','LoginController@login')->name('.efetuarLogin')->middleware('ninguemLogado');

        // TODO: Pensar bem em como vai fazer isso
        Route::get('/password/reset','ForgotPasswordController@showLinkRequestForm')->name('.password.request');
        Route::post('/password/email','ForgotPasswordController@sendResetLinkEmail')->name('.password.email');

        // TODO: Pensar bem em como vai fazer isso
        //Reset Password Routes
        Route::get('/password/reset/{token}','ResetPasswordController@showResetForm')->name('.password.reset');
        Route::post('/password/reset','ResetPasswordController@reset')->name('.password.update');
    });

});

// Rotas que precisam de autenticação do profissional
Route::middleware('auth:profissional')->group(function() {

    // Home do profissional
    Route::get('/home','ProfissionalController@home')->name('.home');

    // Visualizar perfil de outros usuários
    Route::get('/ver/{id}', 'ProfissionalController@ver_profissional')->name('.ver');



    Route::prefix('anamnese')->name('.anamnese')->group(function () {
        require 'anamnese/anamnese_geral.php';
    });

    Route::prefix('avaliacao')->name('.avaliacao')->group(function () {
        require 'avaliacao/avaliacao_geral.php';
    });

    Route::prefix('evolucao')->name('.evolucao')->group(function () {
        require 'evolucao/evolucao_geral.php';
    });




    // Restringindo grupo de acesso para apenas profissionais admin
    Route::middleware('ehadmin')->name('.admin')->group(function() {
        require 'admin.php';
    });

});
