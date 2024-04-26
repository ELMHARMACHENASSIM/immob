<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Cities extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        City::insert([
            [
                'id' => 1,
                'name'=> 'Casablanca'
            ],
            [
                'id' => 2,
                'name'=> 'Rabat'
            ],
            [
                'id' => 3,
                'name'=> 'Fes'
            ],
            [
                'id' => 4,
                'name'=> 'Agadir'
            ],
            [
                'id' => 5,
                'name'=> 'Marrakech'
            ],
            [
                'id' => 6,
                'name'=> 'Tanger'
            ],
            [
                'id' => 7,
                'name'=> 'Tetouan'
            ],
            [
                'id' => 8,
                'name'=> 'Safi'
            ],
            [
                'id' => 9,
                'name'=> 'Laayoune'
            ],
            [
                'id' => 10,
                'name'=> 'Dakhla'
            ],
            [
                'id' => 11,
                'name'=> 'Oujda'
            ],
            [
                'id' => 12,
                'name'=> 'Al Houcima'
            ],
            [
                'id' => 13,
                'name'=> 'Meknes'
            ],
            [
                'id' => 14,
                'name'=> 'Kenitra'
            ],
            [
                'id' => 15,
                'name'=> 'Mohammedia'
            ],
            [
                'id' => 16,
                'name'=> 'El Jadida'
            ],
            [
                'id' => 17,
                'name'=> 'Nador'
            ],
            [
                'id' => 18,
                'name'=> 'Settat'
            ],
            [
                'id' => 19,
                'name'=> 'Béni Mellal'
            ],
            [
                'id' => 20,
                'name'=> 'Khémisset'
            ],
            [
                'id' => 21,
                'name'=> 'Khouribga'
            ],
            [
                'id' => 22,
                'name'=> 'Taza',
            ],
        ]);
    }
}
