<?php

namespace Database\Seeders;

use App\Models\Error;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ErrorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $error = [
            ['name' => 'Reducción Severa de Puntos', 'assigned_score' => '5'],
            ['name' => 'Reducción Leve de Puntos',   'assigned_score' => '1'],
            ['name' => 'Desclificación',             'assigned_score' => '100'],

        ];


        Error::insert($error);
    }
}
