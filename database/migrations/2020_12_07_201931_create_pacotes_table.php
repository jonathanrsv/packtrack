<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreatePacotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacotes', function (Blueprint $table) {
            $table->id();
            
            $table->string('status');
            $table->foreignId('unidade_id')->unsigned();
            $table->foreignId('morador_id')->unsigned();
            $table->text('obs')->nullable();
            $table->text('ref_pacote')->nullable();
            $table->string('code', 5)->unique();
            $table->string('urlimg')->nullable();
            $table->string('doc_number_recebedor')->nullable();
            $table->string('nome_recebedor')->nullable();
            $table->dateTime('notified_at')->nullable();
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
        Schema::dropIfExists('pacotes');
    }
}
