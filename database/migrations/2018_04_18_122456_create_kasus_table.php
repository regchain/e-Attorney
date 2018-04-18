<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKasusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kasus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('judul_kasus', 250);
            $table->string('lokasi_kejadian', 100);
            $table->date('tanggal_kejadian');
            $table->string('nama_lengkap', 100);
            $table->text('alamat');
            $table->string('kota', 50);
            $table->string('propinsi', 50);
            $table->string('kontak_telpon', 30);
            $table->string('kontak_handphone', 30);
            $table->string('kontak_email', 50);
            $table->char('kodepos', 10);
            $table->text('disposisi');
            $table->text('kasus_posisi');
            $table->text('kasimpulan');
            $table->text('saran');
            $table->string('asal_surat', 255);
            $table->string('no_surat', 255);
            $table->date('tanggal_surat_pelapor');
            $table->date('tanggal_surat_diterima');
            $table->string('pembuat_catatan_surat', 50);
            $table->integer('status_rp1');
            $table->integer('status_rp2');
            $table->integer('status_rp3mum');
            $table->integer('status_rp3mum_partial');
            $table->integer('status_rp3sus');
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
        Schema::dropIfExists('kasus');
    }
}
