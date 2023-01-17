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
            $table->id();
            $table->char('jenis', 15);
            $table->biginteger('harga');
            $table->string('foto_kamar')->notnull();
            $table->string('foto_wc')->notnull();
            $table->bigInteger('status_id')->unsigned();
            $table->string('foto_ruangan')->nullable();

            $table->timestamps();

            $table->foreign('status_id')->references('id')->on('status')
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
        Schema::dropIfExists('kamars');
    }
}
