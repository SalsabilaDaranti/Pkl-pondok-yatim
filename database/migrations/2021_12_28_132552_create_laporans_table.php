<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaporansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pengeluaran_idpengeluaran');
            $table->unsignedBigInteger('donasi_iddonasi');
            $table->integer('donasi_konfirmasi');
            $table->string('pemasukan');
            $table->string('pengeluaran');
            $table->string('saldo');

            $table->foreign('pengeluaran_idpengeluaran')->references('id')
            ->on('pengeluarans')->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreign('donasi_iddonasi')->references('id')
            ->on('donasis')->onUpdate('cascade')
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
        Schema::dropIfExists('laporans');
    }
}
