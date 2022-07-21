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
        Schema::table('detail_barangmasuk', function (Blueprint $table){
            $table->unsignedBigInteger('barangmasuk_id')->nullable();
            $table->foreign('barangmasuk_id')->references('id')->on('barangmasuk');
            $table->unsignedBigInteger('product_barcode')->nullable();
            $table->foreign('product_barcode')->references('barcode')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detail_barangmasuk', function (Blueprint $table){
            $table->dropForeign(['barangmasuk_id']);
            $table->dropColumn('barangmasuk_id');
            $table->dropForeign(['product_barcode']);
            $table->dropColumn('product_barcode');
        });
    }
};
