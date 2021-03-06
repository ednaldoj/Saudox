<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfissionalsTable extends Migration {

    public function up() {
        Schema::create('profissionals', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('login')->unique();
            $table->string('password');

            $table->string('nome');
            $table->string('cpf')->unique();
            $table->string('rg')->unique();
            $table->string('status');
            $table->string('profissao');
            $table->unsignedInteger('numero_conselho')->nullable(true);
            $table->bigInteger('id_endereco')->unsigned();
            $table->foreign('id_endereco')->references('id')->on('enderecos');
            $table->string('telefone_1');
            $table->string('telefone_2')->nullable(true);
            $table->string('email');
            $table->string('estado_civil');
            $table->string('nacionalidade');
            $table->text('descricao_de_conhecimento_e_experiencia')->nullable(true);
            $table->string('aviso')->nullable(true);

            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('profissionals');
    }
}
