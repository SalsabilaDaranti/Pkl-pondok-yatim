<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donasis', function (Blueprint $table) {
            $table->id();
                $table->unsignedBigInteger('konfirmasi_id');
                $table->string('nama_donatur');
                $table->string('jumlah');
                $table->date('tanggal');
    
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
        Schema::dropIfExists('donasis');
    }
}
