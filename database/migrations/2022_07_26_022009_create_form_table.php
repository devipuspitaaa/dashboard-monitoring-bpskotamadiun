<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kelurahan');
            $table->string('nama_survei');
            $table->integer('total_target');
            $table->integer('ttl_target_revisi');
            $table->integer('total_petugas');
            $table->integer('ttl_petugas_revisi');
            $table->integer('jh_penyelesaian');
            $table->integer('jhp_revisi');
            $table->integer('target_petugas');
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
        Schema::dropIfExists('form');
    }
}
