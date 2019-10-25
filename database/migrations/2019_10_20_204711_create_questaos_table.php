<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questaos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_status')->nullable();
            $table->integer('id_cliente');
            $table->integer('questao_1')->default(0)->nullable();
            $table->integer('questao_1_1')->default(0)->nullable();
            $table->integer('questao_1_2')->default(0)->nullable();
            $table->integer('questao_1_3')->default(0)->nullable();
            $table->integer('questao_1_4')->default(0)->nullable();
            $table->integer('questao_2')->default(0)->nullable();
            $table->integer('questao_3')->default(0)->nullable();
            $table->integer('questao_4')->default(0)->nullable();
            $table->integer('questao_5_1')->default(0)->nullable();
            $table->integer('questao_5_2')->default(0)->nullable();
            $table->integer('questao_5_3')->default(0)->nullable();
            $table->integer('questao_6')->default(0)->nullable();
            $table->integer('questao_6_1')->default(0)->nullable();
            $table->integer('questao_7')->default(0)->nullable();
            $table->integer('questao_8_1')->default(0)->nullable();
            $table->integer('questao_8_2')->default(0)->nullable();
            $table->integer('questao_8_3')->default(0)->nullable();
            $table->integer('questao_8_4')->default(0)->nullable();
            $table->integer('questao_8_5')->default(0)->nullable();
            $table->integer('questao_8_6')->default(0)->nullable();
            $table->integer('questao_8_7')->default(0)->nullable();
            $table->integer('questao_8_8')->default(0)->nullable();
            $table->integer('questao_8_9')->default(0)->nullable();
            $table->integer('questao_8_10')->default(0)->nullable();
            $table->integer('questao_8_11')->default(0)->nullable();
            $table->integer('questao_8_12')->default(0)->nullable();
            $table->integer('questao_9_1')->default(0)->nullable();
            $table->integer('questao_9_2')->default(0)->nullable();
            $table->integer('questao_9_3')->default(0)->nullable();
            $table->integer('questao_9_4')->default(0)->nullable();
            $table->integer('questao_9_5')->default(0)->nullable();
            $table->integer('questao_10_1')->default(0)->nullable();
            $table->integer('questao_10_2')->default(0)->nullable();
            $table->integer('questao_10_3')->default(0)->nullable();
            $table->integer('questao_10_4')->default(0)->nullable();
            $table->integer('questao_10_5')->default(0)->nullable();
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
        Schema::dropIfExists('questaos');
    }
}
