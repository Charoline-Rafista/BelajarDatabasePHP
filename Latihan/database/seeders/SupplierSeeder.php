<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Supplier;

class SupplierSeeder extends Seeder
{
    public function run(): void
    {
        // Mengisi data dummy pertama
        Supplier::create([
            'name' => 'PT. Sumber Makmur',
            'phone' => '081234567890',
            'address' => 'Jl. Industri No. 12, Jakarta'
        ]);

        // Mengisi data dummy kedua
        Supplier::create([
            'name' => 'CV. Maju Jaya',
            'phone' => '089876543210',
            'address' => 'Jl. Dagang No. 5, Bandung'
        ]);
    }
}