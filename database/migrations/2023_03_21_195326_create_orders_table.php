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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id');
            $table->foreign('client_id', 'orders_client_id_foreign')
                ->references('id')
                ->on('clients')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->unsignedBigInteger('book_id');
            $table->foreign('book_id', 'orders_book_id_foreign')
                ->references('id')
                ->on('books')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->dateTime('date_order');
            $table->integer('count_books');
            $table->dateTime('date_delivery');
            $table->enum('type_delivery', ['courier', 'pvz']);
            $table->float('price_delivery');
            $table->float('price_order');
            $table->text('address_delivery');
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
        Schema::dropIfExists('orders');
    }
};
