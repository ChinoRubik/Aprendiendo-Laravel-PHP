<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*   Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',255);
            $table->string('email',255);
            $table->string('password',255);
            $table->integer('edad');
            $table->integer('sueldo');
            $table->timestamps();
        });
        */

        DB::statement("
            CREATE TABLE usuarios(
                id INT(255) auto_increment,
                nombre VARCHAR(255),
                email VARCHAR(255),
                password VARCHAR(255),
                CONSTRAINT pk_usuarios PRIMARY KEY(id)
            );");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('usuarios', function (Blueprint $table) {
            Schema::drop('usuarios');
        });
    }
}
