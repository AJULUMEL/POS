<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class penjualandetailseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'penjualan_id' => 11,
                'barang_id' => 1,
                'harga' => 12000,
                'jumlah' => 3,
            ],
            [
                'penjualan_id' => 12,
                'barang_id' => 2,
                'harga' => 16000,
                'jumlah' => 4,
            ],
            [
                'penjualan_id' => 13,
                'barang_id' => 3,
                'harga' => 21000,
                'jumlah' => 2,
            ],
            [
                'penjualan_id' => 14,
                'barang_id' => 4,
                'harga' => 6000,
                'jumlah' => 2,
            ],
            [
                'penjualan_id' => 15,
                'barang_id' => 5,
                'harga' => 11000,
                'jumlah' => 3,
            ],
            [
                'penjualan_id' => 16,
                'barang_id' => 6,
                'harga' => 8000,
                'jumlah' => 2,
            ],
            [
                'penjualan_id' => 17,
                'barang_id' => 5,
                'harga' => 6000,
                'jumlah' => 2,
            ],
            [
                'penjualan_id' => 18,
                'barang_id' => 12,
                'harga' => 9000,
                'jumlah' => 2,
            ],
            [
                'penjualan_id' => 19,
                'barang_id' => 2,
                'harga' => 12000,
                'jumlah' => 2,
            ],
            [
                'penjualan_id' => 20,
                'barang_id' => 3,
                'harga' => 17000,
                'jumlah' => 3,
            ],
            [
                'penjualan_id' => 21,
                'barang_id' => 5,
                'harga' => 11000,
                'jumlah' => 2,
            ],
            [
                'penjualan_id' => 22,
                'barang_id' => 6,
                'harga' => 9000,
                'jumlah' => 2,
            ],
            [
                'penjualan_id' => 23,
                'barang_id' => 7,
                'harga' => 8000,
                'jumlah' => 3,
            ],
            [
                'penjualan_id' => 24,
                'barang_id' => 8,
                'harga' => 9500,
                'jumlah' => 2,
            ],
            [
                'penjualan_id' => 25,
                'barang_id' => 9,
                'harga' => 10000,
                'jumlah' => 1,
            ],
            [
                'penjualan_id' => 26,
                'barang_id' => 10,
                'harga' => 11000,
                'jumlah' => 2,
            ],
            [
                'penjualan_id' => 27,
                'barang_id' => 11,
                'harga' => 12000,
                'jumlah' => 1,
            ],
            [
                'penjualan_id' => 28,
                'barang_id' => 12,
                'harga' => 13000,
                'jumlah' => 1,
            ],
            [
                'penjualan_id' => 29,
                'barang_id' => 13,
                'harga' => 14000,
                'jumlah' => 1,
            ],
            [
                'penjualan_id' => 30,
                'barang_id' => 14,
                'harga' => 15000,
                'jumlah' => 1,
            ],
            [
                'penjualan_id' => 11,
                'barang_id' => 15,
                'harga' => 16000,
                'jumlah' => 1,
            ],
            [
                'penjualan_id' => 12,
                'barang_id' => 1,
                'harga' => 17000,
                'jumlah' => 1,
            ],
            [
                'penjualan_id' => 13,
                'barang_id' => 12,
                'harga' => 18000,
                'jumlah' => 1,
            ],
            [
                'penjualan_id' => 14,
                'barang_id' => 8,
                'harga' => 19000,
                'jumlah' => 1,
            ],
            [
                'penjualan_id' => 15,
                'barang_id' => 9,
                'harga' => 20000,
                'jumlah' => 1,
            ],
            [
                'penjualan_id' => 16,
                'barang_id' => 3,
                'harga' => 21000,
                'jumlah' => 1,
            ],
            [
                'penjualan_id' => 17,
                'barang_id' => 5,
                'harga' => 22000,
                'jumlah' => 1,
            ],
            [
                'penjualan_id' => 18,
                'barang_id' => 7,
                'harga' => 23000,
                'jumlah' => 1,
            ],
            [
                'penjualan_id' => 19,
                'barang_id' => 9,
                'harga' => 24000,
                'jumlah' => 1,
            ],
            [
                'penjualan_id' => 20,
                'barang_id' => 10,
                'harga' => 25000,
                'jumlah' => 1,
            ],
        ];
        DB::table('t_penjualan_detail')->insert($data);
    }
}