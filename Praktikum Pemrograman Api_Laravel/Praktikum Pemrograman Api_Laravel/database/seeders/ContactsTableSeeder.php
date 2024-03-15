<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Buat data kontak secara manual
        Contact::create([
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'john@example.com',
            'phone' => '1234567890',
        ]);

        // Buat beberapa data kontak lainnya
        Contact::create([
            'first_name' => 'Jane',
            'last_name' => 'Doe',
            'email' => 'jane@example.com',
            'phone' => '9876543210',
        ]);

        // Anda juga dapat menggunakan factory untuk membuat sejumlah besar data kontak
        // \App\Models\Contact::factory()->count(10)->create();
    }
}

