<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atividade_fisicas', function (Blueprint $table) {
            
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();  
            $table->string('nome');
            $table->string('inicio');
            $table->string('fim');
            $table->string('descricao');
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
        Schema::dropIfExists('atividade_fisicas');
    }
};
