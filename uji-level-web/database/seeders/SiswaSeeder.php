<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Siswa;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $user = User::create([
            'name' => 'Suga',
            'email' => 'siswa@gmail.com',
            'password' => Hash::make('password'),
        ]);

        $user->assignRole('siswa');

        Siswa::create([
            'user_id' => $user->id, 
            'nisn' => '300', 
            'nama' => 'Suga', 
            'kelas_id' => '1', 
            'ttl' => Carbon::now(),  
            'jenis_kelamin' => 'pria',  
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now(), 
        ]);
        $user = User::create([
            'name' => 'yanto',
            'email' => 'yanto@gmail.com',
            'password' => Hash::make('password'),
        ]);

        $user->assignRole('siswa');

        Siswa::create([
            'user_id' => $user->id, 
            'nisn' => '600', 
            'nama' => 'Yanto', 
            'kelas_id' => '2', 
            'ttl' => Carbon::now(),  
            'jenis_kelamin' => 'pria',  
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now(), 
        ]);
        $user = User::create([
            'name' => 'Udin',
            'email' => 'udin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        $user->assignRole('siswa');

        Siswa::create([
            'user_id' => $user->id, 
            'nisn' => '10000', 
            'nama' => 'Udin', 
            'kelas_id' => '1', 
            'ttl' => Carbon::now(),  
            'jenis_kelamin' => 'pria',  
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now(), 
        ]);


        $user = User::create([
            'name' => 'Aryo',
            'email' => 'aryo@gmail.com',
            'password' => Hash::make('password'),
        ]);

        $user->assignRole('siswa');

        Siswa::create([
            'user_id' => $user->id, 
            'nisn' => '23213', 
            'nama' => 'Aryo', 
            'kelas_id' => '2', 
            'ttl' => Carbon::now(),  
            'jenis_kelamin' => 'pria',  
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now(), 
        ]);

        
        $user = User::create([
            'name' => 'Aryo',
            'email' => 'aryo@gmail.com',
            'password' => Hash::make('password'),
        ]);

        $user->assignRole('siswa');

        Siswa::create([
            'user_id' => $user->id, 
            'nisn' => '23213', 
            'nama' => 'Aryo', 
            'kelas_id' => '2', 
            'ttl' => Carbon::now(),  
            'jenis_kelamin' => 'pria',  
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now(), 
        ]);
    }
}
