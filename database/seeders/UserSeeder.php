<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // $user = new User();
        // $user->name = 'ali';
        // $user->email = 'ali@email.com';
        // $user->password = 'password';
        // $user->save();

        // User::create([
        //     'name' => 'khaled',
        //     'email' => 'khaled@email.com',
        //     'password' => 'password',
        // ]);

        $users = [
            [
                'name' => 'user 1',
                'email' => 'user1@email.com',
            ],
            [
                'name' => 'user 2',
                'email' => 'user2@email.com',
            ],
            [
                'name' => 'user 3',
                'email' => 'user3@email.com',
            ],
            [
                'name' => 'user 4',
                'email' => 'user4@email.com',
            ],
            [
                'name' => 'user 5',
                'email' => 'user5@email.com',
            ],
        ];

        foreach ($users as $user) {
            $user['password'] = 'password';
            User::create($user);
        }
    }
}
