<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Disease;
use App\Models\Patient;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

         Patient::create([
             'firstname' => 'ali',
             'lastname' => 'sedighi',
             'age' => '60',
             'disease_id' => '1',
         ]);
         Disease::create([
             'title' => 'cold',
         ]);
         Disease::create([
             'title' => 'injury',
         ]);
    }
}
