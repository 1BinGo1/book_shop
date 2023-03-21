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
        Schema::create('employees', function (Blueprint $table) {
            $table->unsignedBigInteger('person_id');
            $table->foreign('person_id', 'employees_person_id_foreign')
                ->references('id')
                ->on('persons')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->unique('person_id', 'employees_person_id_unique');
            $table->unsignedBigInteger('position_id');
            $table->foreign('position_id', 'employees_position_id_foreign')
                ->references('id')
                ->on('positions')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->integer('experience')->nullable();
            $table->float('premium', 8,2)->nullable();
            $table->date('date_hire')->nullable();
            $table->text('requisites')->nullable();
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
        Schema::dropIfExists('employees');
    }
};
