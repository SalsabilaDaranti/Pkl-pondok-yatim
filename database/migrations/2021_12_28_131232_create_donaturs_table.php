<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonatursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donaturs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('konfirmasi_id');
            $table->string('nama');
            $table->string('ussername');
            $table->string('password');
            $table->integer('no_telepon');

           $table->foreign('konfirmasi_id')->references('id')
            ->on('konfirmasis')->onUpdate('cascade')
            ->onDelete('cascade');


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
        Schema::dropIfExists('donaturs');
    }
}
