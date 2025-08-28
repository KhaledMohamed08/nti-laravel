<?php

namespace Database\Seeders;

use App\Models\Color;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $colors = [
            'red',
            'green',
            'blue',
            'black',
            'white',
            'yellow',
            'cyan',
        ];

        foreach ($colors as $color) {
            // Color::create(['name' => $color]);
            Color::firstOrCreate(
            [
                'name' => $color
            ],
            [
                'name' => $color
            ]
        );
        }
    }
}
