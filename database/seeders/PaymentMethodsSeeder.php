<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PaymentMethodModel;
use Faker\Provider\ar_EG\Payment;

class PaymentMethodsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        PaymentMethodModel::create([
            'name' => 'Mercado Pago',
            'icon' => 'mercado-pago.png',
            'country_id' => 1,
        ]);

        PaymentMethodModel::create([
            'name' => 'Prex',
            'icon' => 'prex-ar.png',
            'country_id' => 1,
        ]);

        PaymentMethodModel::create([
            'name' => 'Prex',
            'icon' => 'prex-uy.png',
            'country_id' => 2,
        ]);

        PaymentMethodModel::create([
            'name' => 'PayPal',
            'icon' => 'paypal.png',
            'country_id' => 3,
        ]);

        PaymentMethodModel::create([
            'name' => 'Payoneer',
            'icon' => 'payoneer.png',
            'country_id' => 3,
        ]);

        PaymentMethodModel::create([
            'name' => 'Banco Provincia',
            'icon' => 'banco-provincia.png',
            'country_id' => 1,
        ]);

        PaymentMethodModel::create([
            'name' => 'Duckascopy',
            'icon' => 'duckascopy.png',
            'country_id' => 6,
        ]);

    }
}
