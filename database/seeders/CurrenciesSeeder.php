<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CurrencyModel;

class CurrenciesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        CurrencyModel::create([
            'name' => 'Argentine Peso',
            'symbol' => '$',
            'code' => 'ARS'
        ]);

        CurrencyModel::create([
            'name' => 'United States Dollar',
            'symbol' => '$',
            'code' => 'USD'
        ]);

        CurrencyModel::create([
            'name' => 'Euro',
            'symbol' => '€',
            'code' => 'EUR'
        ]);

        CurrencyModel::create([
            'name' => 'Brazilian Real',
            'symbol' => 'R$',
            'code' => 'BRL'
        ]);

        CurrencyModel::create([
            'name' => 'Chilean Peso',
            'symbol' => '$',
            'code' => 'CLP'
        ]);

        CurrencyModel::create([
            'name' => 'Swiss Franc',
            'symbol' => 'CHF',
            'code' => 'CHF'
        ]);

        CurrencyModel::create([
            'name' => 'Uruguayan Peso',
            'symbol' => '$',
            'code' => 'UYU'
        ]);

        CurrencyModel::create([
            'name' => 'Mexican Peso',
            'symbol' => '$',
            'code' => 'MXN'
        ]);

    }
}
