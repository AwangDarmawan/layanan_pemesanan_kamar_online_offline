<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailReservasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_reservasis', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('kode_reservasi');
            $table->integer('lama_menginap')->length(5);
            $table->integer('total_bayar')->length(10);
            $table->timestamps();
            $table->foreign('kode_reservasi')->references('id')->on('reservasis')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->string('bukti_pembayaran');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail__reservasis');
    }
}
