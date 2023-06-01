<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('employees')->insert([
            [
                'firstname' => 'Adzro',
                'lastname' => 'Salsabilla',
                'email'=> 'adzrosabila@gmail.com',
                'age' => 20,
                'position_id' => 1
            ],
            [
                'firstname' => 'Moch. Aditya',
                'lastname' => 'Pramana',
                'email'=> 'adietprams@gmail.com',
                'age' => 25,
                'position_id' => 2
            ],
            [
                'firstname' => 'Nanditya',
                'lastname' => 'Pramana Putri',
                'email'=> 'nandityaa@gmail.com',
                'age' => 23,
                'position_id' => 3
            ],
        ]);

    }
}
