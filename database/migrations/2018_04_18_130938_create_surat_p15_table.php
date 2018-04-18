<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuratP15Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_p15', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('surat_id');
            $table->string('judul_p15', 255);
            $table->string('no_p15', 100);
            $table->date('tanggal_p15');
            $table->string('jenis_p15', 50);
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
        Schema::dropIfExists('surat_p15');
    }
}
