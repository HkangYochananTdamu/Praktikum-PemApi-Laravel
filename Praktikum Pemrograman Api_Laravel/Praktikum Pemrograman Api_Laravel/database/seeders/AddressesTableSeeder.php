<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Address;

class AddressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Buat data alamat secara manual
        Address::create([
            'street' => '123 Main Street',
            'city' => 'New York',
            'province' => 'New York',
            'country' => 'USA',
            'postal_code' => '10001',
        ]);

        // Buat beberapa data alamat lainnya
        Address::create([
            'street' => '456 Elm Street',
            'city' => 'Los Angeles',
            'province' => 'California',
            'country' => 'USA',
            'postal_code' => '90001',
        ]);

        // Anda juga dapat menggunakan factory untuk membuat sejumlah besar data alamat
        // \App\Models\Address::factory()->count(10)->create();
    }
}
