<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarangBuktiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang_bukti', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('surat_id');
            $table->integer('obyek_id');
            $table->text('barang_sitaan');
            $table->double('nilai_pemulihan_aset', 15,2);
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
        Schema::dropIfExists('barang_bukti');
    }
}
