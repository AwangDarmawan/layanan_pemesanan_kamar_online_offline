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
            $table->unsignedInteger('tamu_id');
            $table->foreign('tamu_id')
            ->references('id')
            ->on('tamus')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->unsignedInteger('karyawan_id')->nullable();
            $table->foreign('karyawan_id')
            ->references('id')
            ->on('karyawans')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->unsignedInteger('kamar_id');
            $table->foreign('kamar_id')
            ->references('id')
            ->on('kamars')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            // $table->integer('jumlah_kamar');
            $table->string('bukti_pembayaran')->nullable();
            $table->date('tgl_masuk');
            $table->date('tgl_keluar');
            $table->integer('lama_menginap');
            $table->integer('total_pembayaran');
            $table->enum('status_reservasi', ['tertunda','terkonfirmasi','selesai'])->default('tertunda');
            
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
