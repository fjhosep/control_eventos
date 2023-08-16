<?php

namespace Database\Seeders;

use App\Models\Criterion;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CriterionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     *
     * @return void
     */
    public function run()
    {
        //
        // DB::table('criteria')->truncate();

        $criteria = [
            ['name' => 'Coreografía',        'assigned_score' => '40'],
            ['name' => 'Eecución y Técnica',  'assigned_score' => '50'],
            ['name' => 'Impresión General',  'assigned_score' => '10'],

        ];


        Criterion::insert($criteria);
    }
}
