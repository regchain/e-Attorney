<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubyekTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subyek', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_terlapor', 100);
            $table->string('tempat_tinggal', 100);
            $table->char('jenis_kelamin', 1);
            $table->string('pendidikan', 100);
            $table->string('tempat_lahir', 100);
            $table->date('tanggal_lahir');
            $table->string('kewarganegaraan', 100);
            $table->string('agama', 100);
            $table->string('pekerjaan', 100);
            $table->string('lembaga', 100);
            $table->string('jabatan_resmi', 100);
            $table->string('jabatan_lain', 100);
            $table->integer('kategori_subyek_id');
            $table->integer('status');
            $table->date('masa_hukuman_dari');
            $table->date('masa_hukuman_ke');
            $table->integer('masa_hukuman');
            $table->text('keterangan');
            $table->string('foto', 250);
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
        Schema::dropIfExists('subyek');
    }
}
