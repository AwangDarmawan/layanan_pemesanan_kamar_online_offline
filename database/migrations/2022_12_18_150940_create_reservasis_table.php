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
            $table->bigIncrements('no_reservasi');
            $table->foreignId('id_tamu')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('id_karyawan')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->integer('jumlah_kamar');
            $table->date('tanggal_masuk');
            $table->date('tanggal_keluar');
            $table->int('waktu_lama');
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
        Schema::dropIfExists('reservasis');
    }
}
