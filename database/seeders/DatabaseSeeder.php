<?php

namespace Database\Seeders;

use App\Models\Account;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // Seeder data acount
        Account::create([
            'username'  => 'admin',
            'name'      => 'Admin',
            'password'  => Hash::make('admin'),
            'role'      => 'admin',
        ]);
        Account::create([
            'username'  => 'author',
            'name'      => 'Author',
            'password'  => Hash::make('author'),
            'role'      => 'author',
        ]);

    }
}
