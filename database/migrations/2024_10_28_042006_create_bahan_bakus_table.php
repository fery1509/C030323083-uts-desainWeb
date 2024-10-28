<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBahanBakusTable extends Migration
{
    public function up()
    {
        Schema::create('bahan_bakus', function (Blueprint $table) {
            $table->id();
            $table->string('nama_bahan'); // Pastikan kolom ini ada
            $table->integer('stok');
            $table->foreignId('kategori_id')->constrained('kategoris');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bahan_bakus');
    }
}
