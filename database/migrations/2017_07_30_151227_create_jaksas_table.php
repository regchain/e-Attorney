<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJaksasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jaksas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nip', 30);
            $table->string('nama_jaksa', 50);
            $table->string('pangkat', 30);
            $table->string('telepon', 30);
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
        Schema::dropIfExists('jaksas');
    }
}
