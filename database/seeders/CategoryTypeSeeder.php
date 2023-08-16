<?php

namespace Database\Seeders;

use App\Models\CategoryType;
use Illuminate\Database\Seeder;

class CategoryTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoriesType = [
            ['code' => 'TP',  'name' => 'GRUPOS PROFESIONALES'],
            ['code' => 'TSP', 'name' => 'GRUPOS SEMIPROFESIONAL'],
            ['code' => 'TA',  'name' => 'GRUPOS AMATEUR'],
            ['code' => 'TPA', 'name' => 'GRUPOS PRO AM'],
            ['code' => 'TJ',  'name' => 'GRUPOS JUNIOR'],
            ['code' => 'TC',  'name' => 'GRUPOS INFANTIL'],
            ['code' => 'CP',  'name' => 'PAREJAS PROFESIONALES'],
            ['code' => 'CSP', 'name' => 'PAREJAS SEMI PROFESIONAL'],
            ['code' => 'CA',  'name' => 'PAREJAS AMATEUR'],
            ['code' => 'CPA', 'name' => 'PAREJAS PRO AM'],
            ['code' => 'CJ',  'name' => 'PAREJAS JUNIOR'],
            ['code' => 'CC',  'name' => 'PAREJAS INFANTIL'],
            ['code' => 'SP',  'name' => 'SOLISTA PROFESIONAL'],
            ['code' => 'SA',  'name' => 'SOLISTA AMATEUR'],
            ['code' => 'SJ',  'name' => 'SOLISTA JUNIOR'],
            ['code' => 'SC',  'name' => 'SOLISTA INFANTIL'],
            ['code' => 'OF',  'name' => 'FAMILIAR'],
        ];


        CategoryType::insert($categoriesType);
    }
}
