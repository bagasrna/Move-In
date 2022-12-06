<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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

        \App\Models\User::create([
            'fullname' => 'Elyziaaa',
            'username' => 'elyzia',
            'phone' => '0821133242353',
            'address' => 'Jalan Panjaitan',
            'birth_date' => '2022-08-12',
            'password' => bcrypt('elyzia'),
        ]);
    }
}
