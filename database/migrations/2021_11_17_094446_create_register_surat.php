<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegisterSurat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('register_surat', function (Blueprint $table) {
            $table->id();
            $table->date('tgl_masuk')->nullable();;
            $table->text('jenis_surat')->nullable();;
            $table->text('no_surat')->nullable();;
            $table->date('tgl_surat')->nullable();;
            $table->date('tgl_disposisi_gm')->nullable();;
            $table->text('disposisi_untuk')->nullable();;
            $table->text('perihal')->nullable();;
            $table->text('posisi_surat')->nullable();;
            $table->date('tgl_disposisi_pimkel')->nullable();;
            $table->text('disposisi_untuk2')->nullable();;
            $table->text('keterangan')->nullable();;
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
        Schema::dropIfExists('register_surat');
    }
}


