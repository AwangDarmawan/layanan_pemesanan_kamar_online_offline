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
        Schema::create('detail__reservasis', function (Blueprint $table) {
            $table->bigIncrements('id_detail');
            $table->foreignId('no_reservasi')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('no_kamar')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->bigint('total_harga');
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
        Schema::dropIfExists('detail__reservasis');
    }
}
