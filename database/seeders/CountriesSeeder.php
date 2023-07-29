<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CountryModel;

class CountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        CountryModel::create([
            'name' => 'Argentina'
        ]);
        CountryModel::create([
            'name' => 'Uruguay'
        ]);
        CountryModel::create([
            'name' => 'United States'
        ]);
        CountryModel::create([
            'name' => 'Brazil'
        ]);
        CountryModel::create([
            'name' => 'Chile'
        ]);
        CountryModel::create([
            'name' => 'Switzerland'
        ]);
    }
}
