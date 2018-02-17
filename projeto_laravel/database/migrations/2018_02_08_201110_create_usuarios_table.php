<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
          $table->increments('id')->unsigned();
        //  $table->integer('user_id')->unsigned();
          $table->string('nome',60);
          $table->string('email',128)->unique();
          $table->string('telefone');
          $table->string('endereco');
          $table->string('senha');
          $table->string('cpf');
          $table->string('categorias');
          $table->rememberToken()->nullable();
          $table->timestamps();
        });
        // Schema::table('usuarios', function(Blueprint $table) {
        //     $table->foreign('user_id')
        //         ->references('id')
        //         ->on('users')
        //         ->onDelete('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
