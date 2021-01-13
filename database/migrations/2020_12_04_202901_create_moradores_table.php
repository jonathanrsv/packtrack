<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoradoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('moradores', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('lastname')->nullable();
            $table->string('celphone');
            $table->string('email')->nullable();
            $table->foreignId('unidade_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('moradores',function(Blueprint $table){

            $table->foreign('unidade_id')
                ->references('id')
                ->on('unidades')
                ->onDelete('cascade')
                ->onUpdate('cascade');
    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('moradores');
    }
}
