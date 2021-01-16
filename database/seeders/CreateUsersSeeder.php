<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Admin Demo',
                'email' => 'admin@admin.com',
                'password' => bcrypt('123456'),
                'is_admin' => '1',
            ],
            [
                'name' => 'User Demo',
                'email' => 'user@user.com',
                'password' => bcrypt('123456'),
                'is_admin' => '0',
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
