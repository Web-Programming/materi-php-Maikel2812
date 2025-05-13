<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration
{
    public function up(): void
    {
        Schema::table('mahasiswas', function (Blueprint $table) {
            // Menambahkan kolom 'alamat'
            $table->text('alamat')->after('tanggal_lahir');
            // Mengganti nama kolom 'nama' menjadi 'nama_mahasiswa'
            $table->renameColumn('nama', 'nama_mahasiswa');
        });
    }
    public function down(): void
    {
        Schema::table('mahasiswas', function (Blueprint $table) {
            // Mengembalikan nama kolom 'nama_mahasiswa' menjadi 'nama'
            $table->renameColumn('nama_mahasiswa', 'nama');
            // Menghapus kolom 'alamat'
            $table->dropColumn('alamat');
        });
    }
};
