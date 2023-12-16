<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Wisata;

class WisataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * @return void
     */
    public function run()
    {
        $wisatas = [
            [
                'title' => 'Museum Nasional Indonesia',
                'slug' => 'museum-nasional-indonesia',
                'price' => 35,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'title' => 'Museum Macan',
                'slug' => 'museum-macan',
                'price' => 100,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'title' => 'Seaworld',
                'slug' => 'seaworld',
                'price' => 95,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'title' => 'Taman Mini Indonesia Indah',
                'slug' => 'taman-mini-indonesia-indah',
                'price' => 10,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]
        ];

        Wisata::insert($wisatas);
    }
}
