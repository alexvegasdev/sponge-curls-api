<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Shampoo', 'description' => 'Productos para limpiar el cabello.'],
            ['name' => 'Acondicionador', 'description' => 'Productos para hidratar y desenredar el cabello.'],
            ['name' => 'Mascarilla', 'description' => 'Tratamientos intensivos para el cabello.'],
            ['name' => 'Gel', 'description' => 'Productos para definir rizos y controlar el frizz.'],
            ['name' => 'Crema para peinar', 'description' => 'Productos para hidratar y definir rizos sin apelmazar.'],
            ['name' => 'Mousse', 'description' => 'Productos para dar volumen y definición a los rizos.'],
            ['name' => 'Aceite capilar', 'description' => 'Productos para nutrir y dar brillo al cabello.'],
            ['name' => 'Spray de sal marina', 'description' => 'Productos para crear textura y volumen con un efecto de playa.'],
            ['name' => 'Sérum', 'description' => 'Productos para suavizar el cabello y controlar el frizz.']
        ];

        foreach ($categories as $category) {
            \App\Models\Category::create($category);
        }
    }
}
