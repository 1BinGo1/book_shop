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
        Schema::create('persons', function (Blueprint $table) {
            $table->id();
            $table->string("surname", 50)->nullable();
            $table->string("name", 50)->nullable();
            $table->string("patronymic", 50)->nullable();
            $table->string("phone", 20)->nullable();
            $table->date("date_of_birth")->nullable();
            $table->string("email", 255);
            $table->string("password", 255);
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
        Schema::dropIfExists('persons');
    }
};
