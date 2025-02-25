<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'user_id' => 1,
                'penjualan_kode' => 'FJ-20220101-001',
                'penjualan_tanggal' => '2022-01-01 09:00:00',
            ],
            [
                'user_id' => 2,
                'penjualan_kode' => 'FJ-20220102-002',
                'penjualan_tanggal' => '2022-01-02 10:00:00',
            ],
            [
                'user_id' => 3,
                'penjualan_kode' => 'FJ-20220103-003',
                'penjualan_tanggal' => '2022-01-03 11:00:00',
            ],
            [
                'user_id' => 1,
                'penjualan_kode' => 'FJ-20220104-004',
                'penjualan_tanggal' => '2022-01-04 12:00:00',
            ],
            [
                'user_id' => 2,
                'penjualan_kode' => 'FJ-20220104-005',
                'penjualan_tanggal' => '2022-01-04 13:00:00'
            ],
            [
                'user_id' => 3,
                'penjualan_kode' => 'FJ-20220105-006',
                'penjualan_tanggal' => '2022-01-05 14:00:00',
            ],
            [
                'user_id' => 1,
                'penjualan_kode' => 'FJ-20220106-007',
                'penjualan_tanggal' => '2022-01-06 15:00:00',
            ],
            [
                'user_id' => 2,
                'penjualan_kode' => 'FJ-20220107-008',
                'penjualan_tanggal' => '2022-01-07 16:00:00',
            ],
            [
                'user_id' => 3,
                'penjualan_kode' => 'FJ-20220108-009',
                'penjualan_tanggal' => '2022-01-08 17:00:00',
            ],
            [
                'user_id' => 1,
                'penjualan_kode' => 'FJ-20220109-010',
                'penjualan_tanggal' => '2022-01-09 18:00:00',
            ],
        ];
        DB::table('t_penjualan')->insert($data);
    }
}