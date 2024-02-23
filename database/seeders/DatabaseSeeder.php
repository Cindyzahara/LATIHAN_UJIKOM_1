<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'username' => 'admin1',
            'email' => 'admin1@gmail.com',
            'password' => Hash::make('12345678'),
            'nama_lengkap' => 'Alya Mutiara',
            'role' => 'administrator',
            'verifikasi' => 'sudah',
            'alamat' => 'cikuda'
        ]);
        
    }
}
