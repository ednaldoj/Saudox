<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvolucaoPsicologicasTable extends Migration {

    public function up() {
        Schema::create('evolucao_psicologicas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            $table->bigInteger('id_paciente')->unsigned();
            $table->bigInteger('id_profissional')->unsigned();
            $table->bigInteger('id_evolucao_anterior')->unsigned()->nullable(true);
            $table->foreign('id_paciente')->references('id')->on('pacientes');
            $table->foreign('id_profissional')->references('id')->on('profissionals');
            $table->foreign('id_evolucao_anterior')->references('id')->on('evolucao_psicologicas')->nullable(true);
            $table->dateTime('data_evolucao');
            $table->string('tipo_atendimento');
            $table->longText('texto');


            /* O responsavel_por_este_documento é o profissional que tem a
             * resposabilidade, então ele vai ta no json de pode ver e pode
             * editar.
             * Toda vez que um profissional ver ou editar este documento, seu
             * id vai ser salvo no campo responsavel_por_este_documento.
             */

            /* Cada json vai ter 2 arrays, o primeiro com os ids dos
             * profissionais que vao ter o acesso de leitura,
             * e o segundo de edição. Lembrar que é tudo em string.
             */
            $table->unsignedInteger('responsavel_por_este_documento')->nullable();
            $table->json('id_pode_ver')->nullable();
            $table->json('id_pode_editar')->nullable();
        });
    }

    public function down() {
        Schema::dropIfExists('evolucao_psicologicas');
    }
}
