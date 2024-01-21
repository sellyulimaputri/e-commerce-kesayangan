<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\batik;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        batik::create([
            'id_batik' => 1,
            'nama_batik' => 'Batik Kawung',
            'kategori_batik' => 'Batik Tulis',
            'stok_batik' => 8
        ]);
        batik::create([
            'id_batik' => 2,
            'nama_batik' => 'Batik Parang',
            'kategori_batik' => 'Batik Tulis',
            'stok_batik' => 14
        ]);
        batik::create([
            'id_batik' => 3,
            'nama_batik' => 'Batik Sidomuki',
            'kategori_batik' => 'Batik Tulis',
            'stok_batik' => 11
        ]);
        batik::create([
            'id_batik' => 4,
            'nama_batik' => 'Batik Megomendung',
            'kategori_batik' => 'Batik Printing',
            'stok_batik' => 17
        ]);
        batik::create([
            'id_batik' => 5,
            'nama_batik' => 'Batik Sidoluhur',
            'kategori_batik' => 'Batik Tulis',
            'stok_batik' => 13
        ]);
        batik::create([
            'id_batik' => 6,
            'nama_batik' => 'Batik Sogan',
            'kategori_batik' => 'Batik Cap',
            'stok_batik' => 3
        ]);
        batik::create([
            'id_batik' => 7,
            'nama_batik' => 'Batik Gentongan',
            'kategori_batik' => 'Batik Cap',
            'stok_batik' => 5
        ]);
        batik::create([
            'id_batik' => 8,
            'nama_batik' => 'Batik Tujuh Rupa',
            'kategori_batik' => 'Batik Printing',
            'stok_batik' => 2
        ]);
        batik::create([
            'id_batik' => 9,
            'nama_batik' => 'Batik Kraton',
            'kategori_batik' => 'Batik Printing',
            'stok_batik' => 9
        ]);
        batik::create([
            'id_batik' => 10,
            'nama_batik' => 'Batik Simbut',
            'kategori_batik' => 'Batik Printing',
            'stok_batik' => 5
        ]);
    }
}