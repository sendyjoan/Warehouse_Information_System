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
        Schema::table('barangkeluar', function (Blueprint $table){
            $table->unsignedBigInteger('verified_id')->nullable();
            $table->foreign('verified_id')->references('id')->on('verifieds');
            $table->unsignedBigInteger('consumer_NIC')->nullable();
            $table->foreign('consumer_NIC')->references('NIC')->on('consumers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('barangkeluar', function (Blueprint $table){
            $table->dropForeign(['verified_id']);
            $table->dropColumn('verified_id');
            $table->dropForeign(['consumer_NIC']);
            $table->dropColumn('consumer_NIC');
        });
    }
};
