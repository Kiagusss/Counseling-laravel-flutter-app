<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
            Role::create([
                'name' => 'admin',
                'guard_name' => 'web'
            ]);
    
            Role::create([
                'name' => 'wali_kelas',
                'guard_name' => 'web'
            ]);
            Role::create([
                'name' => 'siswa',
                'guard_name' => 'web'
            ]);
            Role::create([
                'name' => 'guru_bk',
                'guard_name' => 'web'
            ]);
        }
    
}
