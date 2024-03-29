<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKamarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kamars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no_kamar')->length(5)->unique();
            $table->bigInteger('jenis_kamar_id')->unsigned();
            $table->foreign('jenis_kamar_id')
            ->references('id')
            ->on('jenis_kamars')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->biginteger('harga');
            $table->string('foto_kamar');
            $table->string('foto_wc');
            $table->string('foto_ruangan')->nullable();
            $table->bigInteger('status_id')->unsigned()->default(1);
            $table->foreign('status_id')
            ->references('id')
            ->on('status_kamars')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->string('deskripsi');
            

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
        Schema::dropIfExists('kamars');
    }
}
