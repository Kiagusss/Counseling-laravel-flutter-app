<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Guru;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $user = User::create([
            'name' => 'Guru Bk',
            'email' => 'guru@gmail.com',
            'password' => Hash::make('password'),
        ]);

        $user->assignRole('guru_bk');


        Guru::create([
            'user_id' => $user->id, 
            'nipd' => '100', 
            'nama' => 'Guru Bk',  
            'ttl' => Carbon::now(),  
            'jenis_kelamin' => 'pria',  
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now(), 
        ]);
    }
}
