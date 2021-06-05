<?php

use Illuminate\Database\Seeder;
use App\City;

class cityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::create([
            'name' => 'Tapera'
        ]);
        City::create([
            'name' => 'Passo Fundo'
        ]);
        City::create([
            'name' => 'Espumoso'
        ]);
        City::create([
            'name' => 'Carazinho'
        ]);
        City::create([
            'name' => 'Selbach'
        ]);
        City::create([
            'name' => 'Ibirubá'
        ]);
        City::create([
            'name' => 'Lagoa dos Três Cantos'
        ]);

    }
}
