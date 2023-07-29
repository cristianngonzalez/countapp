<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ExpenseModel;

class ExpenseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        ExpenseModel::create([
            'name' => 'Medio kilo de papas',
            'description' => 'Papas medio kilo',
            'amount' => 100.00,
            'date' => '2021-01-01',
            'category_id' => 1,
            'currency_id' => 1,
            'payment_method_id' => 1,
            'user_id' => 1,
        ]);
    }
}
