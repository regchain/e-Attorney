<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuratsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surats', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kasus_id');
            $table->string('judul_surat', 255);
            $table->string('no_surat_perkara', 100);
            $table->date('tanggal_surat_perkara');
            $table->date('tanggal_mulai');
            $table->date('tanggal_berhenti');
            $table->text('saran');
            $table->text('keterangan');
            $table->string('tindakan', 100);
            $table->string('tipe_surat', 30);
            $table->integer('status_surat');
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
        Schema::dropIfExists('surats');
    }
}
