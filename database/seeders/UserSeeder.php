<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $admin = User::create([
            'name' => 'Admin Role',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678'),
            'dob' => '2000-01-13',
        ]);

        
        $admin->assignRole('admin');

        $user = User::create([
            'name' => 'User Role',
            'email' => 'user@gmail.com',
            'password' => bcrypt('12345678'),
            'dob' => '2002-05-23',
        ]);

        $user->assignRole('user');
    }
}
