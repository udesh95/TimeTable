<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'AR',
                'email' => 'ar@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('AR123456'),
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'name' => 'Jayantha',
                'email' => 'jayantha@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('JA123456'),
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'name' => 'Test',
                'email' => 'test@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('TE123456'),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);

    }
}
