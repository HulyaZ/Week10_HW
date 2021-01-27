<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUN',
        ]);
        DB::table('users')->insert([
            'name' => 'admin01',
            'email' => 'admin01@gmail.com',
            'email_verified_at' => now(),
            'password' => '2IXUNpkjO0rOQ5byM',
        ]);
        DB::table('users')->insert([
            'name' => 'admin02',
            'email' => 'admin02@gmail.com',
            'email_verified_at' => now(),
            'password' => 'e4oKoEa3Ro9ll',
        ]);
    }
}
