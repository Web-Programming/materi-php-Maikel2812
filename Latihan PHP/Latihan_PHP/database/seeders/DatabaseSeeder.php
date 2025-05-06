<?php

namespace Database\Seeders;

use App\Models\User;
use db;
use hash;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
      //DB::table('users')->insert([
        //'name'=>'michel',
        //'email'=>'dmaikel10@gmail.com',
        //'password'=>hash::make('password')
      //]);

      DB::table('users')
        ->where('id',1)
        ->update([
            'password'=>hash::make('123456')
        ]);
    }
}
