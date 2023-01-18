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
            $table->id();
            $table->bigInteger('kode_reservasi', 10);
            $table->integer('lama_menginap');
            $table->integer('total_bayar');
            $table->timestamps();

            $table->foreign('kode_reservasi')->references('id')->on('reservasis')
            ->onDelete('cascade')
            ->onUpdate('cascade');
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
