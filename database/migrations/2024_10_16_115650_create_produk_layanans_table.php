<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdukLayanansTable extends Migration
{
    public function up()
    {
        Schema::create('produk_layanans', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->text('deskripsi')->nullable();
            $table->decimal('harga', 10, 2);
            $table->enum('tipe', ['produk', 'layanan']);
            $table->integer('stok')->nullable(); // Untuk tipe 'produk'
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('produk_layanans');
    }
}