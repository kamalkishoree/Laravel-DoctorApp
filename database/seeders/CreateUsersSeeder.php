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
               'name'=>'Admin',
               'email'=>'admin@takecare.com',
               'is_admin'=>'1',
               'password'=> bcrypt('admin'),
               'phone' => '123456789',
               'image' => '1639567108_istockphoto-177373093-612x612.jpg'
            ]
        ];
  
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
