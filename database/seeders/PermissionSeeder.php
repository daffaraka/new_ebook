<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'admin-index',
            'admin-permission-management',
            'admin-services',
            'admin-transaksi',
            'admin-user-management',
            'admin-role-management',
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'transaction-history',
            'ongoing-transaction',
            'payment',
            
         ];
    
         foreach ($permissions as $permission) {
              Permission::create(['name' => $permission]);
         }
    }
}
