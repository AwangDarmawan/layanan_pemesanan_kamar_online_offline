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
            $table->char('reservasi_no', 10);
            $table->foreignId('kamars_id')->constrained();
            $table->integer('total_harga');
            $table->timestamps();

            $table->foreign('reservasi_no')->references('no_reservasi')->on('reservasis')
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
