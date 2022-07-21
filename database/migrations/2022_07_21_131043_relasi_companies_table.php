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
        Schema::table('compenies', function (Blueprint $table){
            $table->unsignedBigInteger('verified_id')->nullable();
            $table->foreign('verified_id')->references('id')->on('verifieds');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('compenies', function (Blueprint $table){
            $table->dropForeign(['verified_id']);
            $table->dropColumn('verified_id');
        });
    }
};
