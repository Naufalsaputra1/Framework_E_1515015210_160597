<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableJadwalMatakuliah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Jadwal_Matakuliah', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Mahasiswa_id',false,true);
            $table->foreign('Mahasiswa_id')->references('id')->on('Mahasiswa')->onDelete('cascade');
            $table->integer('Ruangan_id',false,true);
            $table->foreign('Ruangan_id')->references('id')->on('ruangan')->onDelete('cascade');
            $table->integer('Dosen_Matakuliah_id',false,true);
            $table->foreign('Dosen_Matakuliah_id')->references('id')->on('Dosen_Matakuliah')->onDelete('cascade');


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
        Schema::drop('Jadwal_Matakuliah');
    }
}
