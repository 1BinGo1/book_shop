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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('person_id');
            $table->foreign('person_id', 'clients_person_id_foreign')
                ->references('id')
                ->on('persons')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->unique('person_id', 'clients_person_id_unique');
            $table->boolean('vip_status')->default(false)->nullable();
            $table->text("comment");
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
        Schema::dropIfExists('clients');
    }
};
