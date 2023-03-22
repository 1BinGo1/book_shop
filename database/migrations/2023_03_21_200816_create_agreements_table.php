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
        Schema::create('agreements', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employee_id');
            $table->foreign('employee_id', 'agreements_employee_id_foreign')
                ->references('id')
                ->on('employees')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->unsignedBigInteger('order_id');
            $table->foreign('order_id', 'agreements_order_id_foreign')
                ->references('id')
                ->on('orders')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->unique('order_id', 'agreements_order_id_unique');
            $table->dateTime('date_of_registration');
            $table->text('comment')->nullable();
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
        Schema::dropIfExists('agreements');
    }
};
