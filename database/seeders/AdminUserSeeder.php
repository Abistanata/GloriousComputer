<?php
// database/seeders/AdminUserSeeder.php
namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => env('ADMIN_EMAIL', 'admin@glorious.test')],
            [
                'name'     => 'Administrator',
                'role'     => 'admin',
                'password' => Hash::make(env('ADMIN_PASSWORD', 'admin12345')),
            ]
        );
    }
}
