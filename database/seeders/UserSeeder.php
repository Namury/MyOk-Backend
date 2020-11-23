<?php

use Illuminate\Database\Seeder;
use App\Models\User;

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
            ['name' => 'User1', 'email' => 'user1@mail.com', 'username' => 'user1', 'password' => app('hash')->make('user1'), 'is_admin' => 0],
            ['name' => 'User2', 'email' => 'user2@mail.com', 'username' => 'user2', 'password' => app('hash')->make('user2'), 'is_admin' => 0],
            ['name' => 'User4', 'email' => 'user3@mail.com', 'username' => 'user3', 'password' => app('hash')->make('user3'), 'is_admin' => 0],
            ['name' => 'User4', 'email' => 'user4@mail.com', 'username' => 'user4', 'password' => app('hash')->make('user4'), 'is_admin' => 0],
            ['name' => 'User5', 'email' => 'user5@mail.com', 'username' => 'user5', 'password' => app('hash')->make('user5'), 'is_admin' => 0],

            ['name' => 'Admin', 'email' => 'admin@mail.com', 'username' => 'admin', 'password' => app('hash')->make('admin'), 'is_admin' => 1],
        ];
        
        foreach ($users as $user) {
        	$data = new User;
        	$data->name = $user['name'];
        	$data->email = $user['email'];
        	$data->username = $user['username'];
        	$data->password = $user['password'];
        	$data->is_admin = $user['is_admin'];
        	$data->save();
        }
    }
}
