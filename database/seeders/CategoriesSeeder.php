<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CategoryModel;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        CategoryModel::create([
            'name' => 'Food'
        ]);
        CategoryModel::create([
            'name' => 'Transport'
        ]);
        CategoryModel::create([
            'name' => 'Entertainment'
        ]);
        CategoryModel::create([
            'name' => 'Health'
        ]);
        CategoryModel::create([
            'name' => 'Education'
        ]);
        CategoryModel::create([
            'name' => 'Services'
        ]);
        CategoryModel::create([
            'name' => 'Others'
        ]);
    }
}
