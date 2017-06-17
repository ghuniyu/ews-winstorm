<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataAnginTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_angin',function(Blueprint $table){
            $table->increments('id');
            $table->float('arah_angin');
            $table->integer('kecepatan');
            $table->timestamp('waktu');
            $table->text('lokasi');
            $table->text('kategori_angin');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('data_angin');
    }
}
