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
            $table->string('name')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->rememberToken();
            $table->timestamps();

            $table->string('dni')->nullable();
            $table->date('fecha_nacimiento')->nullable();
            $table->string('talla_overol')->nullable();
            $table->integer('talla_zapato')->nullable();
            $table->decimal('talla', 3, 2)->nullable();
            $table->decimal('peso', 5, 2)->nullable();
            $table->string('direccion')->nullable();
            $table->string('observacion')->nullable();
            $table->decimal('sueldo_dia', 10, 2)->nullable();
            $table->decimal('sueldo_mes', 10, 2)->nullable();
            $table->string('foto_firma')->nullable();
            $table->string('foto_perfil')->nullable();
            $table->string('foto_huella')->nullable();
            $table->integer('tipo_trabajador')->default(0); // 0: ni definido
            $table->boolean('status')->default(1); // 0: inactivo 1: activo
            
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
