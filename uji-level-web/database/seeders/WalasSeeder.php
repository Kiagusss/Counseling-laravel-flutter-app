<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Siswa;
use App\Models\Walas;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class WalasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $user = User::create([
            'name' => 'Wali Kelas',
            'email' => 'wali@gmail.com',
            'password' => Hash::make('password'),
        ]);

        $user->assignRole('wali_kelas');


        Walas::create([
            'user_id' => $user->id, 
            'nipd' => '900', 
            'nama' => 'Wali Kelas',  
            'ttl' => Carbon::now(),  
            'jenis_kelamin' => 'pria',  
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now(), 
        ]);


        $user = User::create([
            'name' => 'Udin',
            'email' => 'wali2@gmail.com',
            'password' => Hash::make('password'),
        ]);

        $user->assignRole('wali_kelas');


        Walas::create([
            'user_id' => $user->id, 
            'nipd' => '500', 
            'nama' => 'Udin',  
            'ttl' => Carbon::now(),  
            'jenis_kelamin' => 'pria',  
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now(), 
        ]);

        $user = User::create([
            'name' => 'Riki',
            'email' => 'wali5@gmail.com',
            'password' => Hash::make('password'),
        ]);

        $user->assignRole('wali_kelas');


        Walas::create([
            'user_id' => $user->id, 
            'nipd' => '8100', 
            'nama' => 'Riki',  
            'ttl' => Carbon::now(),  
            'jenis_kelamin' => 'pria',  
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now(), 
        ]);
    }
}
