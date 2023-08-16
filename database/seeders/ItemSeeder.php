<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ItemSeeder extends Seeder
{

    public function run()
    {
        //
        $items = [
            ['name' => 'Composición Artística - Creatividad - Originalidad',  'assigned_score' => '25', 'criterion_id' => '1'],
            ['name' => 'Efectos visuales -Formaciones -Transiciones',         'assigned_score' => '25', 'criterion_id' => '1'],
            ['name' => 'Compenetración con la Música',                        'assigned_score' => '25', 'criterion_id' => '1'],
            ['name' => 'Nivel de Dificultad',                                 'assigned_score' => '25', 'criterion_id' => '1'],

            ['name' => 'Fuerza -Control -Conexión',                           'assigned_score' => '20', 'criterion_id' => '2'],
            ['name' => 'Ejecución adecuada de movimientos técnicos de danza', 'assigned_score' => '20', 'criterion_id' => '2'],
            ['name' => 'Sincronización - Uniformidad',                        'assigned_score' => '20', 'criterion_id' => '2'],
            ['name' => 'Proyección - Presencia Escénica',                     'assigned_score' => '20', 'criterion_id' => '2'],
            ['name' => 'Desplazamiento en el Espacio',                        'assigned_score' => '20', 'criterion_id' => '2'],

            ['name' => 'Vestuario',              'assigned_score' => '30', 'criterion_id' => '3'],
            ['name' => 'Entretenimiento',        'assigned_score' => '30', 'criterion_id' => '3'],
            ['name' => 'Conexión',               'assigned_score' => '40', 'criterion_id' => '3']
        ];


        Item::insert($items);
    }
}
