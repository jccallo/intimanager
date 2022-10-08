<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

            $table->string('dni');
            $table->date('fecha_nacimiento');
            $table->string('talla_overol');
            $table->integer('talla_zapato');
            $table->decimal('talla', 3, 2);
            $table->decimal('peso', 5, 2);
            $table->string('direccion');
            $table->string('observacion');
            $table->decimal('sueldo_dia', 10, 2);
            $table->decimal('sueldo_mes', 10, 2);
            $table->string('foto_firma');
            $table->string('foto_perfil');
            $table->string('foto_huella');
            $table->enum('tipo_trabajador', ['externo', 'permanente']);
            
            $table->unsignedBigInteger('place_id')->nullable();
            $table->foreign('place_id')->references('id')->on('places')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
