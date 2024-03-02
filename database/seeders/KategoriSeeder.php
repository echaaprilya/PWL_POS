<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'kategori_id' => 1,
                'kategori_kode' => 'GRO',
                'kategori_nama' => 'Grosir',
            ],
            [
                'kategori_id' => 2,
                'kategori_kode' => 'FRU',
                'kategori_nama' => 'Buah dan Sayuran',
            ],
            [
                'kategori_id' => 3,
                'kategori_kode' => 'BAK',
                'kategori_nama' => 'Roti dan Kue',
            ],
            [
                'kategori_id' => 4,
                'kategori_kode' => 'MEAT',
                'kategori_nama' => 'Daging dan Ayam',
            ],
            [
                'kategori_id' => 5,
                'kategori_kode' => 'DRI',
                'kategori_nama' => 'Minuman',
            ],
        ];

        DB::table('m_kategori')->insert($data);
    }
}
