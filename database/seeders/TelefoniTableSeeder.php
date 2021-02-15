<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TelefoniTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('telefons')->insert(
            [
                ['model' => 'iphone 10', 'slika' => 'https://fdn2.gsmarena.com/vv/bigpic/apple-iphone-x.jpg', 'procesor' => 'Hexa-core 2.39 GHz (2x Monsoon + 4x Mistral)', 'cena' => 50000, 'ram' => '3GB RAM', 'kamera' => '12 MP, f/1.8, 28mm (wide), 1/3", 1.22µm, dual pixel PDAF, OIS', 'baterija' => 'Li-Ion 2716 mAh, non-removable (10.35 Wh)', 'memorija' => '256GB', 'kategorija_id' => 1],
                ['model' => 'galaxy s21', 'slika' => 'https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-s21-5g-r.jpg', 'procesor' => 'Hexa-core 2.39 GHz (2x Monsoon + 4x Mistral)', 'cena' => 50000, 'ram' => '3GB RAM', 'kamera' => '12 MP, f/1.8, 28mm (wide), 1/3", 1.22µm, dual pixel PDAF, OIS', 'baterija' => 'Li-Ion 2716 mAh, non-removable (10.35 Wh)', 'memorija' => '256GB', 'kategorija_id' => 2]
            ]
        );
    }
}
