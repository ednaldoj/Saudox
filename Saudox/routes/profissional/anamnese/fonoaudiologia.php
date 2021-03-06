<?php

Route::get('teste', function () {
    return 'fonoaudiologia.php';
});


Route::get('{id_paciente}/ver', 'ProfissionalAnamneseController@verFonoaudiologia')->name('.ver');
Route::get('{id_paciente}/criar', 'ProfissionalAnamneseController@criarFonoaudiologia')->name('.criar');
Route::post('/salvar', 'ProfissionalAnamneseController@salvarFonoaudiologia')->name('.salvar');
Route::get('{id_paciente}/editar', 'ProfissionalAnamneseController@editarFonoaudiologia')->name('.editar');
Route::post('/salvar_editar', 'ProfissionalAnamneseController@salvarEditarFonoaudiologia')->name('.editar.salvar');
