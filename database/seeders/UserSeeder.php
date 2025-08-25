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
        // $user->name = 'Khaled';
        // $user->email = 'khaled@email.com';
        // $user->phone = '01010101010';
        // $user->password = 'password';
        // $user->save();

        // User::create([
        //     'name' => 'ali',
        //     'email' => 'ali@email.com',
        //     'phone' => '01011121314',
        //     'password' => 'password',
        // ]);

        // $users = [
        //     [
        //         'name' => 'user 1',
        //         'email' => 'user1@email.com',
        //         'phone' => '01276385342',
        //     ],
        //     [
        //         'name' => 'user 2',
        //         'email' => 'user2@email.com',
        //         'phone' => '01254098235',
        //     ],
        //     [
        //         'name' => 'user 3',
        //         'email' => 'user3@email.com',
        //         'phone' => '0104678342576',
        //     ],
        //     [
        //         'name' => 'user 4',
        //         'email' => 'user4@email.com',
        //         'phone' => '01192546873',
        //     ],
        //     [
        //         'name' => 'user 5',
        //         'email' => 'user5@email.com',
        //         'phone' => '01194678765',
        //     ],
        // ];

        // foreach ($users as $user) {
        //     $user['password'] = 'password';
        //     User::create($user);
        // }

        // foreach ($users as $user) {
        //     User::factory()->create($user);
        // }

        // User::factory(10)->create();
    }
}
