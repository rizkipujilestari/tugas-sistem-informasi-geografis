<?php

namespace Database\Seeders;

use App\Models\District;
use Illuminate\Database\Seeder;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $districts = [
            ['code' => '32.73.01', 'name' => 'Sukasari'],
            ['code' => '32.73.02', 'name' => 'Coblong'],
            ['code' => '32.73.03', 'name' => 'Babakan Ciparay'],
            ['code' => '32.73.04', 'name' => 'Bojongloa Kaler'],
            ['code' => '32.73.05', 'name' => 'Andir'],
            ['code' => '32.73.06', 'name' => 'Cicendo'],
            ['code' => '32.73.07', 'name' => 'Sukajadi'],
            ['code' => '32.73.08', 'name' => 'Cidadap'],
            ['code' => '32.73.09', 'name' => 'Bandung Wetan'],
            ['code' => '32.73.10', 'name' => 'Astana Anyar'],
            ['code' => '32.73.11', 'name' => 'Regol'],
            ['code' => '32.73.12', 'name' => 'Batununggal'],
            ['code' => '32.73.13', 'name' => 'Lengkong'],
            ['code' => '32.73.14', 'name' => 'Cibeunying Kidul'],
            ['code' => '32.73.15', 'name' => 'Bandung Kulon'],
            ['code' => '32.73.16', 'name' => 'Kiaracondong'],
            ['code' => '32.73.17', 'name' => 'Bojongloa Kidul'],
            ['code' => '32.73.18', 'name' => 'Cibeunying Kaler'],
            ['code' => '32.73.19', 'name' => 'Sumur Bandung'],
            ['code' => '32.73.20', 'name' => 'Antapani'],
            ['code' => '32.73.21', 'name' => 'Bandung Kidul'],
            ['code' => '32.73.22', 'name' => 'Buahbatu'],
            ['code' => '32.73.23', 'name' => 'Rancasari'],
            ['code' => '32.73.24', 'name' => 'Arcamanik'],
            ['code' => '32.73.25', 'name' => 'Cibiru'],
            ['code' => '32.73.26', 'name' => 'Ujungberung'],
            ['code' => '32.73.27', 'name' => 'Gedebage'],
            ['code' => '32.73.28', 'name' => 'Panyileukan'],
            ['code' => '32.73.29', 'name' => 'Cinambo'],
            ['code' => '32.73.30', 'name' => 'Mandalajati'],
        ];

        foreach ($districts as $key => $value) {
            District::create($value);
        }
    }
}
