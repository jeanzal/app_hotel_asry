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
            'name' => 'BO',
            'role' => 'BO',
            'email' => 'asrigrahahotelyogya@gmail.com',
            'password' => Hash::make('Asrigrahahotel123_'),
        ]);
        DB::table('bo')->insert([
            'name' => 'Je',
            'role' => 'BO',
            'email' => 'jeanzal61@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
        DB::table('fo')->insert([
            'name' => 'Front Office',
            'role' => 'FO',
            'email' => 'frontofficeasrygraha@gmail.com',
            'password' => Hash::make('Frontofficeasg123_'),
        ]);
        DB::table('kamar')->insert([
            'no_kamar' => '1',
            'lokasi' => 'Lantai 1',
            'harga' => 100000,
            'fasilitas' => 'Lengkap',
            'status' => 1,
        ]);
        DB::table('kamar')->insert([
            'no_kamar' => '2',
            'lokasi' => 'Lantai 1',
            'harga' => 100000,
            'fasilitas' => 'Lengkap',
            'status' => 1,
        ]);
        DB::table('kamar')->insert([
            'no_kamar' => '3',
            'lokasi' => 'Lantai 1',
            'harga' => 100000,
            'fasilitas' => 'Lengkap',
            'status' => 1,
        ]);
        DB::table('kamar')->insert([
            'no_kamar' => '4',
            'lokasi' => 'Lantai 1',
            'harga' => 100000,
            'fasilitas' => 'Lengkap',
            'status' => 1,
        ]);
        DB::table('kamar')->insert([
            'no_kamar' => '5',
            'lokasi' => 'Lantai 1',
            'harga' => 100000,
            'fasilitas' => 'Lengkap',
            'status' => 1,
        ]);
        DB::table('kamar')->insert([
            'no_kamar' => '6',
            'lokasi' => 'Lantai 1',
            'harga' => 100000,
            'fasilitas' => 'Lengkap',
            'status' => 1,
        ]);
        DB::table('kamar')->insert([
            'no_kamar' => '7',
            'lokasi' => 'Lantai 1',
            'harga' => 100000,
            'fasilitas' => 'Lengkap',
            'status' => 1,
        ]);
        DB::table('kamar')->insert([
            'no_kamar' => '9',
            'lokasi' => 'Lantai 2',
            'harga' => 100000,
            'fasilitas' => 'Lengkap',
            'status' => 1,
        ]);
        DB::table('kamar')->insert([
            'no_kamar' => '10',
            'lokasi' => 'Lantai 2',
            'harga' => 100000,
            'fasilitas' => 'Lengkap',
            'status' => 1,
        ]);
        DB::table('kamar')->insert([
            'no_kamar' => '11',
            'lokasi' => 'Lantai 2',
            'harga' => 100000,
            'fasilitas' => 'Lengkap',
            'status' => 1,
        ]);
        DB::table('kamar')->insert([
            'no_kamar' => '12',
            'lokasi' => 'Lantai 2',
            'harga' => 100000,
            'fasilitas' => 'Lengkap',
            'status' => 1,
        ]);
        DB::table('kamar')->insert([
            'no_kamar' => '14',
            'lokasi' => 'Lantai 2',
            'harga' => 100000,
            'fasilitas' => 'Lengkap',
            'status' => 1,
        ]);
        DB::table('kamar')->insert([
            'no_kamar' => '15',
            'lokasi' => 'Lantai 2',
            'harga' => 100000,
            'fasilitas' => 'Lengkap',
            'status' => 1,
        ]);
        DB::table('kamar')->insert([
            'no_kamar' => '16',
            'lokasi' => 'Lantai 2',
            'harga' => 100000,
            'fasilitas' => 'Lengkap',
            'status' => 1,
        ]);
        DB::table('kamar')->insert([
            'no_kamar' => '17',
            'lokasi' => 'Lantai 2',
            'harga' => 100000,
            'fasilitas' => 'Lengkap',
            'status' => 1,
        ]);
        DB::table('kamar')->insert([
            'no_kamar' => '20',
            'lokasi' => 'Lantai 2',
            'harga' => 100000,
            'fasilitas' => 'Lengkap',
            'status' => 1,
        ]);
        DB::table('sisa_saldo')->insert([
            'tgl_trs' => '2022-12-31 07:01:00',
            'sisa_saldo' => 224500,
            'total_kas_masuk' => 0,
            'total_kas_keluar' => 0,
            'total_setor_ke_sgh' => 0

        ]);
    }
}
