<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePessoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoas', function (Blueprint $table) {
            $table->id();
            $table->integer('pessoa_matricula');
            $table->string('pessoa_nome');
            $table->string('pessoa_pessoa_cpf');
            $table->string('pessoa_cep');
            $table->string('pessoa_endereco');
            $table->string('pessoa_bairro');
            $table->integer('pessoa_numero');
            $table->string('pessoa_telefone');
            $table->string('pessoa_complemento');
            $table->string('pessoa_cod_municipio');
            $table->datetime('pessoa_dthr_cadastro');
            $table->string('pessoa_email');
            $table->string('pessoa_senha');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pessoas');
    }
}
