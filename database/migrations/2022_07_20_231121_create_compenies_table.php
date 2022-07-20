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
        Schema::create('compenies', function (Blueprint $table) {
            $table->id('NIPS');
            $table->string('nama_perusahaan');
            $table->text('alamat_perusahaan');
            $table->string('email_perusahaan');
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
        Schema::dropIfExists('compenies');
    }
};
