<?php

namespace Database\Seeders;

use App\Models\LayananBK;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        LayananBK::create([
            'jenis_layanan' => 'Pribadi'
        ]);
        LayananBK::create([
            'jenis_layanan' => 'Sosial'
        ]);
        LayananBK::create([
            'jenis_layanan' => 'Karir'
        ]);
        LayananBK::create([
            'jenis_layanan' => 'Belajar'
        ]);
        LayananBK::create([
            'jenis_layanan' => 'Sosialisasi Karir'
        ]);
    }
}
