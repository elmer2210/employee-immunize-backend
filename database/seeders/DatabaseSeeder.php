<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Catalogue;
use App\Models\Injection;
use App\Models\Profile;
use App\Models\Role;
use App\Models\User;
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
        User::factory(10)->create();
        User::factory()->create([
            'identity_card' => '0999999999',
            'names' => 'User',
            'surnames' => 'Admin',
            'username' => 'admin11',
            'email' => 'admin@example.com',
            'role_id' => '1',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            ]);
        Role::factory(2)->create();
        Profile::factory(10)->create();
        Injection::factory(10)->create();
        Catalogue::factory(4)->create();
    }
}
