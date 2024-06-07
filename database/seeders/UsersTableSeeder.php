<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            ['name' => 'Rahul',
            'email' => 'rahul@gmail.com',
            'dept' => 'Accounting',
            'password' => Hash::make('123'),
            'role' => 'admin'],
            ['name' => 'akas',
            'email' => 'akas@gmail.com',
            'dept' => 'Accounting',
            'password' => Hash::make('123'),
            'role' => 'user']
        ]);
    }
}
