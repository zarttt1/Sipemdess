<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pengaduan', function (Blueprint $table) {
            $table->id('id_pengaduan');
            $table->foreignId('id_masyarakat')->constrained('masyarakat','id_masyarakat')->onUpdate('cascade')->onDelete('cascade');
            $table->date('tanggal_pengaduan');
            $table->text('isi_laporan');
            $table->string('foto', 255)->nullable();
            $table->enum('status', ['baru', 'diproses', 'selesai'])->default('baru');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pengaduan');
    }
};
