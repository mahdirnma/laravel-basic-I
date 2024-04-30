<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

         Category::create([
             'title' => 'برقی'
         ]);
         Category::create([
             'title' => 'آشپزخانه'
         ]);
         Category::create([
             'title' => 'اتومبیل'
         ]);
         Product::create([
             'title' => 'بخاری برقی',
             'description' => 'ژاپنی',
             'category_id' => '1'
         ]);
         Product::create([
             'title' => 'قابلمه',
             'description' => 'ایرانی',
             'category_id' => '2'
         ]);
         Product::create([
             'title' => 'لاستیک',
             'description' => 'کره ای',
             'category_id' => '3'
         ]);
    }
}
