<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\WisataBenefit;

class WisataBenefitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * @return void
     */
    public function run()
    {
        $wisataBenefits = [
            [
                'wisata_id' => 1,
                'name' => 'Tiket Fisik',
            ],
            [
                'wisata_id' => 2,
                'name' => 'Tiket Fisik',
            ],
            [
                'wisata_id' => 3,
                'name' => 'Tiket Fisik',
            ],
            [
                'wisata_id' => 4,
                'name' => 'Tiket Fisik',
            ],
        ];

        WisataBenefit::insert($wisataBenefits);
    }
}
