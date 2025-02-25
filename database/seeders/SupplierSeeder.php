<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('m_supplier')->insert([
            [
                'supplier_kode' => 'SUP001',
                'supplier_nama' => 'Supplier A',
                'supplier_alamat' => 'Alamat Supplier A',
                'supplier_telepon' => '081234567890',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'supplier_kode' => 'SUP002',
                'supplier_nama' => 'Supplier B',
                'supplier_alamat' => 'Alamat Supplier B',
                'supplier_telepon' => '081234567891',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'supplier_kode' => 'SUP003',
                'supplier_nama' => 'Supplier C',
                'supplier_alamat' => 'Alamat Supplier C',
                'supplier_telepon' => '081234567892',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
