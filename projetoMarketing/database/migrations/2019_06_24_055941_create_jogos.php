<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJogos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jogos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('nome',30)->unique();
            $table->binary('image');
            $table->string('plataforma,30')->unique();
            $table->date('completado')->unique();
            $table->date('lancamento')->unique();
            $table->string('comunicador')->unique();
            $table->float('orcamento_disponivel')->unique();
            $table->float('estimativa_preco')->unique();
            $table->string('publico_alvo')->unique();
            $table->string('faixa_etaria')->unique();
            $table->text('description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jogos');
    }
}
