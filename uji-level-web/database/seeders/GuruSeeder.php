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
        $user = User::create([
            'name' => 'Cassandra',
            'email' => 'cassandra@gmail.com',
            'password' => Hash::make('password'),
        ]);

        $user->assignRole('guru_bk');


        Guru::create([
            'user_id' => $user->id, 
            'nipd' => '132100', 
            'nama' => 'Cassandra',  
            'ttl' => Carbon::now(),  
            'jenis_kelamin' => 'wanita',  
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now(), 
        ]);


        $user = User::create([
            'name' => 'Heni',
            'email' => 'heni@gmail.com',
            'password' => Hash::make('password'),
        ]);

        $user->assignRole('guru_bk');


        Guru::create([
            'user_id' => $user->id, 
            'nipd' => '14290', 
            'nama' => 'Heni',  
            'ttl' => Carbon::now(),  
            'jenis_kelamin' => 'wanita',  
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now(), 
        ]);

        $user = User::create([
            'name' => 'Gunawan',
            'email' => 'gunawan@gmail.com',
            'password' => Hash::make('password'),
        ]);

        $user->assignRole('guru_bk');


        Guru::create([
            'user_id' => $user->id, 
            'nipd' => '42120', 
            'nama' => 'Gunawan',  
            'ttl' => Carbon::now(),  
            'jenis_kelamin' => 'wanita',  
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now(), 
        ]);
    }
}
