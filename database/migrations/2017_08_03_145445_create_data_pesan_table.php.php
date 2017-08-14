<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataPesanTable.php extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_pesan',function(Blueprint $table){
            $table->increments('id');
            $table->varchar('nama');
            $table->varchar('email');
            $table->varchar('subjek');
            $table->varchar('pesan');
            $table->timestamp('update_at');
            $table->timestamp('create_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('data_pesan');
    }
}
