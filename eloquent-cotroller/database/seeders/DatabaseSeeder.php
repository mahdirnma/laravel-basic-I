<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Student;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

         Student::create([
             'firstname'=>'mahdi',
             'lastname'=>'rahnama'
         ]);
         Student::create([
             'firstname'=>'ali',
             'lastname'=>'azizi'
         ]);
         Student::create([
             'firstname'=>'farshad',
             'lastname'=>'zandi'
         ]);
    }
}
