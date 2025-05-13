<?php
namespace Database\Seeders;
use DB;
use Hash;
use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Menambahkan data ke tabel users
        DB::table("users")->insert([
            'name' => 'angel', 
            'email' => 'angel@gmail.com', // Pastikan email valid
            'password' => Hash::make("password") // Menggunakan Hash untuk password
        ]);
        // Mengupdate password untuk user dengan id 1
        DB::table("users")->where("id", 1)
            ->update([
                'password' => Hash::make("123456") // Menggunakan Hash untuk password
            ]);
        // Menghapus semua user dengan id lebih dari 1
        DB::table("users")->where("id", ">", 1)->delete();
    }
}