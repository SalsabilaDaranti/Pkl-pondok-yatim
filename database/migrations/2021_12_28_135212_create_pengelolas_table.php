<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengelolasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengelolas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kegiatan_idkegiatan');
            $table->unsignedBigInteger('pengeluaran_idpengeluaran');
            $table->unsignedBigInteger('donasi_iddonasi');
            $table->unsignedBigInteger('donasi_konfirmasi');
            $table->unsignedBigInteger('anak_asuh_idanakasuh');
            $table->string('nama');
            $table->string('usseername');
            $table->string('password');
            $table->string('jabatan');
            $table->string('alamat');
            $table->integer('telepon');

            $table->foreign('kegiatan_idkegiatan')->references('id')
            ->on('kegiatans')->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreign('pengeluaran_idpengeluaran')->references('id')
            ->on('pengeluarans')->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreign('donasi_iddonasi')->references('id')
            ->on('donasis')->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreign('donasi_konfirmasi')->references('id')
            ->on('konfirmasis')->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreign('anak_asuh_idanakasuh')->references('id')
            ->on('anak_asuhs')->onUpdate('cascade')
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
        Schema::dropIfExists('pengelolas');
    }
}
