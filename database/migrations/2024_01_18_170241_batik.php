<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('batik', function (Blueprint $table) {
            $table->id('id_batik');
            $table->string('nama_batik');
            $table->binary('foto_batik')->nullable();
            $table->string('kategori_batik');
            $table->integer('stok_batik');
            $table->boolean('IsDelete')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};