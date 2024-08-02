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
        Schema::create('gurus', function (Blueprint $table) {
            $table->id();
            $table->char('nip', 18)->unique();
            $table->char('nik', 16)->unique();
            $table->string('nama');
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->string('jk');
            $table->string('agama');
            $table->string('no_telp');
            $table->string('email')->unique();
            $table->string('golongan');
            $table->date('tmt');
            $table->date('tahun_pengangkatan');
            $table->integer('masa_kerja');
            $table->date('mulai_smp');
            $table->string('pendidikan');
            $table->string('jurusan');
            $table->date('tgl_kelulusan');
            $table->string('keterangan')->nullable();
            $table->foreignId('kelas_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gurus');
    }
};
