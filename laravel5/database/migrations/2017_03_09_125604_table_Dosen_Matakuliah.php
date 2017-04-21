<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableDosenMatakuliah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Dosen_Matakuliah', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Dosen_id',false,true);
            $table->foreign('Dosen_id')->references('id')->on('dosenn')->onDelete('cascade');
            $table->integer('Matakuliah_id',false,true);
            $table->foreign('Matakuliah_id')->references('id')->on('matakuliah')->onDelete('cascade');
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
        Schema::drop('Dosen_Matakuliah');
    }
}
