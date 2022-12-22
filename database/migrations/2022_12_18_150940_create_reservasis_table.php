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
            $table->char('no_reservasi', 10);
            $table->bigInteger('tamus_id')->unsigned();
            $table->bigInteger('karyawans_id')->unsigned();
            $table->integer('jumlah_kamar');
            $table->date('tgl_masuk');
            $table->date('tgl_keluar');
            $table->integer('lama');
            $table->timestamps();

            $table->foreign('tamus_id')->references('id')->on('tamus')
            ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('karyawans_id')->references('id')->on('karyawans')
            ->onDelete('cascade')->onUpdate('cascade');
            $table->primary('no_reservasi');
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
