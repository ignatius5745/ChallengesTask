<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
\App\User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => bcrypt('verysafepassword'),
            'admin' => 1,
            'approved_at' => now(),
            'status' => true,
        ]);
        \App\User::create([
            'name' => 'SuperAdmin',
            'email' => 'Superadmin@admin.com',
            'email_verified_at' => now(),
            'password' => bcrypt('verysafepassword'),
            'admin' => 1,
            'approved_at' => now(),
            'status' => true,
        ]);
        
        \App\User::create([
            'name' => 'TaylorAdmin',
            'email' => 'Tayloradmin@admin.com',
            'email_verified_at' => now(),
            'password' => bcrypt('verysafepassword'),
            'admin' => 1,
            'approved_at' => now(),
            'status' => true,
        ]);
    }
}
