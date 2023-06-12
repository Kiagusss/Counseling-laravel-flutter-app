<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
      

        $this->call(RoleSeeder::class);
        $this->call(GuruSeeder::class);
        $this->call(WalasSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(KelasSeeder::class);
        $this->call(SiswaSeeder::class);
     
    }
}
