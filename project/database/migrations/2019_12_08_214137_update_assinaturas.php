<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateAssinaturas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('assinaturas', function(Blueprint $table){
            $table->foreign('solicitacao_id')->references('id')->on('solicitacaos');
            $table->foreign('user_destino')->references('id')->on('users');
            $table->foreign('documento_id')->references('id')->on('documentos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
