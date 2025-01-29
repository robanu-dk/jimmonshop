<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembelians', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('product_id');
            $table->string('nama_pembeli');
            $table->string('noTelp_pembeli');
            $table->string('alamat_jalan');
            $table->string('alamat_kota_kabupaten');
            $table->string('alamat_provinsi');
            $table->string('kodepos');
            $table->integer('jumlah_barang');
            $table->float('total_harga');
            $table->string('metode_pembayaran');
            $table->string('status_pembelian');
            $table->string('keterangan')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign('product_id')->references('id')->on('products')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembelians');
    }
};
