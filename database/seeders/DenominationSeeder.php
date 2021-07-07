<?php

namespace Database\Seeders;

use App\Models\Denomination;
use Illuminate\Database\Seeder;

class DenominationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Denomination::create([
            'type' => 'BILLETE',
            'value' => 1000
        ]);
        Denomination::create([
            'type' => 'BILLETE',
            'value' => 500
        ]);
        Denomination::create([
            'type' => 'BILLETE',
            'value' => 200
        ]);
        Denomination::create([
            'type' => 'BILLETE',
            'value' => 100
        ]);
        Denomination::create([
            'type' => 'MONEDA',
            'value' => 5
        ]);
        Denomination::create([
            'type' => 'MONEDA',
            'value' => 2
        ]);
        Denomination::create([
            'type' => 'MONEDA',
            'value' => 0.5
        ]);
        Denomination::create([
            'type' => 'OTRO',
            'value' => 0
        ]);
    }
}