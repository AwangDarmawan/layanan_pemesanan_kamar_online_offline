<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservasis', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('tamu_id')->unsigned();
            $table->bigInteger('karyawan_id')->unsigned();
            $table->bigInteger('kamar_id')->unsigned();
            $table->integer('jumlah_kamar');
            $table->date('tgl_masuk');
            $table->date('tgl_keluar');
            $table->timestamps();

            $table->foreign('tamu_id')->references('id')->on('tamus')
            ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('karyawan_id')->references('id')->on('karyawans')
            ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('kamar_id')->references('no_kamar')->on('kamars')
            ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservasis');
    }
}
