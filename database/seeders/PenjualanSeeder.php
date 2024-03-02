<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'penjualan_id' => 1,
                'user_id' => 3,
                'pembeli' => 'Echa',
                'penjualan_kode' => 'PK001',
                'penjualan_tanggal' => '2024-03-02',
            ],
            [
                'penjualan_id' => 2,
                'user_id' => 3,
                'pembeli' => 'April',
                'penjualan_kode' => 'PK002',
                'penjualan_tanggal' => '2024-03-02',
            ],
            [
                'penjualan_id' => 3,
                'user_id' => 3,
                'pembeli' => 'liya',
                'penjualan_kode' => 'PK003',
                'penjualan_tanggal' => '2024-03-02',
            ],
            [
                'penjualan_id' => 4,
                'user_id' => 3,
                'pembeli' => 'Achmad',
                'penjualan_kode' => 'PK004',
                'penjualan_tanggal' => '2024-03-02',
            ],
            [
                'penjualan_id' => 5,
                'user_id' => 3,
                'pembeli' => 'Dia',
                'penjualan_kode' => 'PK005',
                'penjualan_tanggal' => '2024-03-02',
            ],
            [
                'penjualan_id' => 6,
                'user_id' => 3,
                'pembeli' => 'Putri',
                'penjualan_kode' => 'PK006',
                'penjualan_tanggal' => '2024-03-02',
            ],
            [
                'penjualan_id' => 7,
                'user_id' => 3,
                'pembeli' => 'Maulana',
                'penjualan_kode' => 'PK007',
                'penjualan_tanggal' => '2024-03-02',
            ],
            [
                'penjualan_id' => 8,
                'user_id' => 3,
                'pembeli' => 'Muqor',
                'penjualan_kode' => 'PK008',
                'penjualan_tanggal' => '2024-03-02',
            ],
            [
                'penjualan_id' => 9,
                'user_id' => 3,
                'pembeli' => 'Raya',
                'penjualan_kode' => 'PK009',
                'penjualan_tanggal' => '2024-03-02',
            ],
            [
                'penjualan_id' => 10,
                'user_id' => 3,
                'pembeli' => 'Tanya',
                'penjualan_kode' => 'PK010',
                'penjualan_tanggal' => '2024-03-02',
            ],
        ];

        DB::table('t_penjualan')->insert($data);
    }
}