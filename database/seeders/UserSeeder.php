<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'user',
                'email' => 'user@user.com',
                'email_verified_at' => now(),
                'password' => Hash::make('user'),
                'remember_token' => Str::random(10),
                'role_id' => 0
            ],
            [
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'email_verified_at' => now(),
                'password' => Hash::make('admin79289600'),
                'remember_token' => Str::random(10),
                'role_id' => 1
            ]
        ];

        foreach ($users as $user) {
            User::create(
                [
                    'name' => $user["name"],
                    'email' => $user["email"],
                    'email_verified_at' => $user["email_verified_at"],
                    'password' => $user["password"],
                    'remember_token' => $user["remember_token"],
                    'role_id' => $user["role_id"]
                ]
            );
        }
    }
}
