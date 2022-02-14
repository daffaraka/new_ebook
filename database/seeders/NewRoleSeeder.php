<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'role_id' => '1',
            'role_desc' => 'Admin'
        ]);
        Role::create([
            'role_id' => '0',
            'role_desc' => 'User'
        ]);
    }
}
