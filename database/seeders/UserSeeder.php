<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\{User, Contact}; 

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'test',
            'email' => 'test@gmail.com',
            'password' => bcrypt('password')
        ]);

        Contact::create([
            'user_id' => 1,
            'phone' => '123456',
            'address' => 'Test',

        ]);
    }
}
