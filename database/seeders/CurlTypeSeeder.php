<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CurlTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $curlTypes = [
            ['name' => 'Tipo 2A', 'description' => 'Rizos sueltos y ondulados con una ligera forma de S. Suelen ser finos y se pueden alisar o rizar fácilmente.'],
            ['name' => 'Tipo 2B', 'description' => 'Rizos ondulados de textura media con una forma de S más definida. Suelen ser más gruesos que los del Tipo 2A y pueden tener algo de frizz.'],
            ['name' => 'Tipo 2C', 'description' => 'Rizos gruesos y ondulados con una forma de S muy definida. A menudo son gruesos y propensos al frizz, por lo que requieren hidratación y cuidado adicionales.'],
            ['name' => 'Tipo 3A', 'description' => 'Rizos sueltos y elásticos, bien definidos y con un aspecto brillante. Suelen ser suaves y fáciles de peinar.'],
            ['name' => 'Tipo 3B', 'description' => 'Rizos más apretados, en forma de sacacorchos, densamente empaquetados. Pueden ser gruesos o finos y pueden requerir más humedad para evitar el encrespamiento.'],
            ['name' => 'Tipo 3C', 'description' => 'Rizos muy apretados y densamente empaquetados, a menudo gruesos y propensos a encogerse. Requieren mucha humedad y cuidado para mantener su forma y evitar la rotura.'],
            ['name' => 'Tipo 4A', 'description' => 'Rizos en forma de S, muy apretados, con un patrón de rizo visible. Suelen ser suaves y pueden tener algo de brillo cuando se hidratan adecuadamente.'],
            ['name' => 'Tipo 4B', 'description' => 'Rizos en forma de Z con un patrón de rizo menos definido. Suelen ser ásperos o gruesos y propensos a la sequedad y al encogimiento.'],
            ['name' => 'Tipo 4C', 'description' => 'Rizos muy apretados en forma de Z. Suelen ser muy densos, propensos al encogimiento y requieren mucha hidratación para mantener su salud y forma.']
        ];

        foreach ($curlTypes as $curlType) {
            \App\Models\CurlType::create($curlType);
        }
    }
}
