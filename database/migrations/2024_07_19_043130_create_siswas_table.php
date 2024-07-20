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
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->char('nisn', 10)->unique();
            $table->char('nis', 5)->unique();
            $table->string('name');
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->string('jk');
            $table->string('agama');
            $table->string('status_anak');
            $table->string('sekolah_asal');
            $table->char('nik', 16)->unique();
            $table->string('alamat');
            $table->foreignId('kelas_id')->constrained()->onDelete('cascade');
            $table->foreignId('ruangkelas_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswas');
    }
};
