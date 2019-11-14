<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerfilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perfils', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('imagem');
            $table->string('rua')->default('');
            $table->string('numero')->default('');
            $table->string('bairro')->default('');
            $table->string('cidade')->default('');
            $table->string('estado')->default('');
            $table->string('cep')->default('');
            $table->string('profissao')->default('');
            $table->string('nomeC')->default('');
            $table->string('numeroC')->default('');
            $table->string('dataValiC')->default('');
            $table->string('digitoC')->default('');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('perfils');
    }
}
