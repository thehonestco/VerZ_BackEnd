<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User; // Ensure this namespace is correct
use App\Models\Role; // Ensure this namespace is correct

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create admin user
        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
        ]);

        // Assign admin role to the admin user
        $adminRole = Role::where('name', 'admin')->first();
        $admin->roles()->attach($adminRole);

        // Create store user
        $storeUser = User::create([
            'name' => 'Store User',
            'email' => 'store@example.com',
            'password' => bcrypt('password'),
        ]);

        // Assign store role to the store user
        $storeRole = Role::where('name', 'store')->first();
        $storeUser->roles()->attach($storeRole);
    }
}
