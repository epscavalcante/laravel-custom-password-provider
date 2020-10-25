<?php

use App\User;
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
        // $this->call(UserSeeder::class);

        User::create([
            'name' => 'Custom Password Authentication',
            'username' => 'admin',
            // 'password' => bcrypt('secret')
            // 'pass' => bcrypt('secret')
            'pass' => md5('secret')
        ]);
    }
}
