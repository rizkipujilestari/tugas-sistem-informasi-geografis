<?php

namespace Database\Seeders;

use App\Models\Religion;
use Illuminate\Database\Seeder;

class ReligionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $religions = [
            [
                'name'        => 'Islam',
                'description' => 'Masjid',
            ],
            [
                'name'        => 'Katolik',
                'description' => 'Gereja',
            ],
            [
                'name'        => 'Kristen',
                'description' => 'Gereja',
            ],
            [
                'name'        => 'Hindu',
                'description' => 'Pura',
            ],
            [
                'name'        => 'Budha',
                'description' => 'Vihara',
            ],
            [
                'name'        => 'Konghucu',
                'description' => 'Klenteng',
            ],
        ];

        foreach ($religions as $key => $value) {
            Religion::create($value);
        }
    }
}
