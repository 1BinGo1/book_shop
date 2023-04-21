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
//        Schema::table('persons', function (Blueprint $table) {
//            $table->unsignedBigInteger('role_id')->after('id')->nullable()->default(null);
//            $table->foreign('role_id', 'persons_role_id_foreign')
//                ->references('id')
//                ->on('roles')
//                ->onUpdate('cascade')
//                ->nullOnDelete();
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
//        Schema::table('persons', function (Blueprint $table) {
//            $table->dropForeign('persons_role_id_foreign');
//            $table->dropColumn('role_id');
//        });
    }
};
