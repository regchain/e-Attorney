<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePasalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('undang_undang', 200);
            $table->string('pasal', 30);
            $table->integer('ayat');
            $table->string('huruf', 30);
            $table->text('keterangan');
            $table->integer('masa_hukuman_min');
            $table->integer('masa_hukuman_max');
            $table->double('denda_min', 15,2);
            $table->double('denda_max', 15,2);
            $table->string('kategori_pasal', 100);
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
        Schema::dropIfExists('pasals');
    }
}
