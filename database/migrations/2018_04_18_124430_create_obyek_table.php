<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObyekTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('obyek', function (Blueprint $table) {
            $table->increments('id');
            $table->double('nilai_kontrak', 15,2);
            $table->double('kerugian_negara', 15,2);
            $table->double('pemulihan_aset', 15,2);
            $table->string('obyek_pidana', 100);
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
        Schema::dropIfExists('obyek');
    }
}
