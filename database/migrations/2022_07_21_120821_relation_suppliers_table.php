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
        Schema::table('suppliers', function (Blueprint $table){
            $table->unsignedBigInteger('gender_id')->nullable();
            $table->foreign('gender_id')->references('id')->on('genders');
            $table->unsignedBigInteger('verified_id')->nullable();
            $table->foreign('verified_id')->references('id')->on('verifieds');
            $table->unsignedBigInteger('perusahaan_NIPS')->nullable();
            $table->foreign('perusahaan_NIPS')->references('NIPS')->on('compenies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('suppliers', function (Blueprint $table){
            $table->dropForeign(['gender_id']);
            $table->dropColumn('gender_id');
            $table->dropForeign(['verified_id']);
            $table->dropColumn('verified_id');
            $table->dropForeign(['perusahaan_NIPS']);
            $table->dropColumn('perusahaan_NIPS');
        });
    }
};
