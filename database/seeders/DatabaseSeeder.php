<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
Use Illuminate\Support\Facades\Hash;

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
        User::factory()->create([
            'name' => 'Lars Wiegers',
            'email' => 'larswiegers@live.nl',
            'password' => Hash::make('password'),
        ]);
    }
}
