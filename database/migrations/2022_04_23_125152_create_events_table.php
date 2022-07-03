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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->foreignId('admin_id');
            $table->string('slug')->unique();
            $table->string('nama_event');
            $table->string('image')->default('contoh-poster.png');
            $table->string('pemateri');
            $table->date('tanggal');
            $table->time('waktu');
            $table->string('location');
            $table->text('benefits');
            $table->integer('kuota');
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
        Schema::dropIfExists('events');
    }
};
