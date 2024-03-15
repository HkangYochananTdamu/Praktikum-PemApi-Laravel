<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Buat data pengguna secara manual
        User::create([
            'name' => 'John Doe',
            'username' => 'johndoe',
        ]);

        // Buat beberapa data pengguna lainnya
        User::create([
            'name' => 'Jane Doe',
            'username' => 'janedoe',
        ]);

        // Anda juga dapat menggunakan factory untuk membuat sejumlah besar data pengguna
        // \App\Models\User::factory()->count(10)->create();
    }
}

