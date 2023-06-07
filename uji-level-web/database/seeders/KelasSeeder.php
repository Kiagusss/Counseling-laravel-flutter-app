<?php

namespace Database\Seeders;

use Carbon\Carbon;

use App\Models\Kelas;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kelas::create([
            'nama' => 'XI PPLG 2', 
            'walas_id' => '1', 
            'guru_id' => '1', 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now(), 
        ]);
        
    }
}
