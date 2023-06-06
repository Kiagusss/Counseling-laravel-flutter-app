<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        $admin->assignRole('admin');

        $user = User::create([
            'name' => 'Wali Kelas',
            'email' => 'wali@gmail.com',
            'password' => Hash::make('password'),
        ]);

        $user->assignRole('wali_kelas');

        $user = User::create([
            'name' => 'Siswa',
            'email' => 'siswa@gmail.com',
            'password' => Hash::make('password'),
        ]);

        $user->assignRole('siswa');

        $user = User::create([
            'name' => 'Guru Bk',
            'email' => 'guru@gmail.com',
            'password' => Hash::make('password'),
        ]);

        $user->assignRole('guru_bk');
    }
}
