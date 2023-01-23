<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bo')->insert([
            'name' => 'Back Office',
            'role' => 'BO',
            'email' => 'asrigrahahotelyogya@gmail.com',
            'password' => Hash::make('Asrigrahahotel123_'),
        ]);
        DB::table('bo')->insert([
            'name' => 'Front Office',
            'role' => 'FO',
            'email' => 'frontofficeasrygraha@gmail.com',
            'password' => Hash::make('Frontofficeasg123_'),
        ]);


        DB::table('fo')->insert([
            'name' => 'Back Office',
            'role' => 'BO',
            'email' => 'asrigrahahotelyogya@gmail.com',
            'password' => Hash::make('Asrigrahahotel123_'),
        ]);
        DB::table('fo')->insert([
            'name' => 'Front Office',
            'role' => 'FO',
            'email' => 'frontofficeasrygraha@gmail.com',
            'password' => Hash::make('Frontofficeasg123_'),
        ]);
    }
}
