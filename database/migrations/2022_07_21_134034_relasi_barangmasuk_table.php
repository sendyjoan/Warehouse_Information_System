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
        Schema::table('barangmasuk', function (Blueprint $table){
            $table->unsignedBigInteger('verified_id')->nullable();
            $table->foreign('verified_id')->references('id')->on('verifieds');
            $table->unsignedBigInteger('supplier_NIS')->nullable();
            $table->foreign('supplier_NIS')->references('NIS')->on('suppliers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('barangmasuk', function (Blueprint $table){
            $table->dropForeign(['verified_id']);
            $table->dropColumn('verified_id');
            $table->dropForeign(['supplier_NIS']);
            $table->dropColumn('supplier_NIS');
        });
    }
};
