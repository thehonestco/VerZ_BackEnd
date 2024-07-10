<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // CREATE ROLES
		Role::create(['name' => 'Super Admin', 'guard_name' => 'superadmin']);
		Role::create(['name' => 'Store Admin', 'guard_name' => 'storeadmin']);
		Role::create(['name' => 'Customer', 'guard_name' => 'customer']);
		Role::create(['name' => 'Driver', 'guard_name' => 'driver']);

		// CREATE USERS
        User::factory()->create([
            'name'     => 'Super ADMIN',
			'splcode'  =>uniqid(),
			'nickname' => 'SA',
            'email'    => 'superadmin@verz.com',
			'password' => '123456',
			'role_id'  => '1'
        ]);

		User::factory()->create([
            'name'     => 'Store ADMIN',
			'splcode'  =>uniqid(),
			'nickname' => 'StoreA',
            'email'    => 'storeadmin@verz.com',
			'password' => '123456',
			'role_id'  => '2'
        ]);



    }
}
