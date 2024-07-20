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
        Schema::create('ruangkelas', function (Blueprint $table) {
            $table->id();
            $table->char('kode_ruangkelas')->unique();
            $table->string('nama');
            $table->integer('daya_tampung');
            $table->foreignId('kelas_id')->constrained()->onDelete('cascade');
            $table->foreignId('guru_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ruangkelas');
    }
};
