<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create(
            [
            'name'=>'Monika',
            'email'=>'moni@gmail.com',
            'mobile_number'=>'985367522',
            'is_admin'=>'1',
            'password'=>bcrypt('12345678'),
            ],
        );


    
    }
}
