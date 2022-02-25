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
        Schema::create('buktis', function (Blueprint $table) {
            $table->id();
            $table->string('tgl_check_in');
            $table->string('tgl_check_out');
            $table->string('nama_pemesan');
            $table->string('nama_tamu');
            $table->string('email');
            $table->string('no_hp');
            $table->string('tipe_kamar');
            $table->string('jumlah');
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
        Schema::dropIfExists('buktis');
    }
};
