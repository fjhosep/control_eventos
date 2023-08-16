<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;


class CategorySeeder extends Seeder
{

    public function run()
    {
        $categories = [

            ['code' => 'TP-00', 'name' => 'Grupo Salsa Cabaret', 'level' => 'Profesional', 'style' => '', 'gender' => 'Salsa',      'participants' => '2 a 5 P', 'cost' => '0.00', 'category_type_id' => '1'],
            ['code' => 'TP-01', 'name' => 'Grupo Salsa No Cabaret', 'level' => 'Profesional', 'style' => '', 'gender' => 'Salsa', 'participants' => '2 a 5 P', 'cost' => '0.00', 'category_type_id' => '1'],
            ['code' => 'TP-02', 'name' => 'Grupos Salsa Hombres Cabaret', 'level' => 'Profesional', 'style' => 'Libre', 'gender' => 'Salsa', 'participants' => '3 a 5 B', 'cost' => '0.00', 'category_type_id' => '1'],
            ['code' => 'TP-03', 'name' => 'Grupos Salsa Hombres No Cabaret', 'level' => 'Profesional', 'style' => 'Libre', 'gender' => 'Salsa', 'participants' => '3 a 5 B', 'cost' => '0.00', 'category_type_id' => '1'],
            ['code' => 'TP-05', 'name' => 'Grupos Salsa Mujeres Cabaret', 'level' => 'Profesional', 'style' => 'Libre', 'gender' => 'Salsa', 'participants' => '3 a 5 B', 'cost' => '0.00', 'category_type_id' => '1'],
            ['code' => 'TP-06', 'name' => 'Grupos Salsa Mujeres No Cabaret', 'level' => 'Profesional', 'style' => 'Libre', 'gender' => 'Salsa', 'participants' => '3 a 5 B', 'cost' => '0.00', 'category_type_id' => '1'],
            ['code' => 'TP-07', 'name' => 'Grupo Bachata Cabaret', 'level' => 'Profesional', 'style' => '', 'gender' => 'Bachata', 'participants' => '2 a 5 P', 'cost' => '0.00', 'category_type_id' => '1'],
            ['code' => 'TP-08', 'name' => 'Grupo Bachata No Cabaret', 'level' => 'Profesional', 'style' => '', 'gender' => 'Bachata', 'participants' => '2 a 5 P', 'cost' => '0.00', 'category_type_id' => '1'],
            ['code' => 'TP-10', 'name' => 'Grupo Rueda Casino', 'level' => 'Profesional', 'style' => '', 'gender' => 'Casino',  'participants' => '3 a 5 P', 'cost' => '0.00', 'category_type_id' => '1'],
            ['code' => 'TP-14', 'name' => 'Grupo Baile Urbano Latino (Mujeres, Hombres o Mixto)', 'level' => 'Profesional', 'style' => '', 'gender' => 'Urbano Latino', 'participants' => '3 a 10 B', 'cost' => '0.00', 'category_type_id' => '1'],

            ['code' => 'TSP-51', 'name' => 'Grupo Salsa Semi Profesional No Cabaret	', 'level' => 'Semi Profesional', 'style' => '', 'gender' => 'Salsa', 'participants' => '2 a 5 P', 'cost' => '0.00', 'category_type_id' => '2'],
            ['code' => 'TSP-53', 'name' => 'Grupo Salsa Hombres Semi Profesional No Cabaret', 'level' => 'Semi Profesional', 'style' => 'Libre', 'gender' => 'Salsa', 'participants' => '3 a 5 B', 'cost' => '0.00',  'category_type_id' => '2'],
            ['code' => 'TSP-55', 'name' => 'Grupo Salsa Mujeres Semi Profesional No Cabaret', 'level' => 'Semi Profesional', 'style' => 'Libre', 'gender' => 'Salsa', 'participants' => '3 a 5 B', 'cost' => '0.00',  'category_type_id' => '2'],
            ['code' => 'TSP-57', 'name' => 'Grupo Bachata Semi Profesional No Cabaret', 'level' => 'Semi Profesional', 'style' => '', 'gender' => 'Bachata', 'participants' => '2 a 5 P', 'cost' => '0.00',  'category_type_id' => '2'],
            ['code' => 'TSP-59', 'name' => 'Grupo Baile Urbano Latino Semi Profesional  (Mujeres, Hombres o Mixto)', 'level' => 'Semi Profesional', 'style' => '', 'gender' => 'Urbano  Latino',  'participants' => '3 a 10 P', 'cost' => '0.00',  'category_type_id' => '2'],
            ['code' => 'TSP-XXX', 'name' => 'Grupo Rueda Casino Semi Profesional', 'level' => ' Semi Profesional', 'style' => '', 'gender' => 'Casino', 'participants' => '3 a 5 P',  'cost' => '0.00', 'category_type_id' => '2'],

            ['code' => 'TA-100', 'name' => 'Grupo Salsa Amateur No Cabaret	', 'level' => 'Amateur', 'style' => '', 'gender' => 'Salsa', 'participants' => '2 a 5 P', 'cost' => '0.00', 'category_type_id' => '3'],
            ['code' => 'TA-102', 'name' => 'Grupo Salsa Hombres Amateur No Cabaret', 'level' => 'Amateur', 'style' => 'Libre', 'gender' => 'Salsa', 'participants' => '2 a 5 B', 'cost' => '0.00', 'category_type_id' => '3'],
            ['code' => 'TA-103', 'name' => 'Grupo Salsa Mujeres Amateur No Cabaret', 'level' => 'Amateur', 'style' => 'Libre', 'gender' => 'Salsa', 'participants' => '2 a 5 B', 'cost' => '0.00', 'category_type_id' => '3'],
            ['code' => 'TA-107', 'name' => 'Grupo Bachata Amateur No Cabaret', 'level' => 'Amateur', 'style' => '', 'gender' => 'Bachata', 'participants' => '2 a 5 P', 'cost' => '0.00', 'category_type_id' => '3'],
            ['code' => 'TA-XXX', 'name' => 'Grupo Rueda Casino Amateur No Cabaret', 'level' => 'Amateur', 'style' => '', 'gender' => 'Casino', 'participants' => '3 a 5 P', 'cost' => '0.00', 'category_type_id' => '3'],

            ['code' => 'TPA-150', 'name' => 'Grupo Bachata Pro Am No Cabaret', 'level' => 'Pro Am', 'style' => '', 'gender' => 'Bachata', 'participants' => '2 a 5 P', 'cost' => '0.00', 'category_type_id' => '4'],
            ['code' => 'TPA-151', 'name' => 'Grupo Salsa Pro Am No Cabaret', 'level' => 'Pro Am', 'style' => '', 'gender' => 'Salsa', 'participants' => '2 a 5 P', 'cost' => '0.00', 'category_type_id' => '4'],

            ['code' => 'TJ-200', 'name' => 'Grupos Salsa Junior', 'level' => 'Junior', 'style' => 'Libre', 'gender' => 'Salsa', 'participants' => '2 a 5 P', 'cost' => '0.00', 'category_type_id' => '5'],
            ['code' => 'TJ-202', 'name' => 'Grupos Salsa Hombres Junior', 'level' => 'Junior', 'style' => 'Libre', 'gender' => 'Salsa', 'participants' => '3 a 10 B', 'cost' => '0.00', 'category_type_id' => '5'],
            ['code' => 'TJ-203', 'name' => 'Grupos Salsa Mujeres Junior ', 'level' => 'Junior', 'style' => 'Libre', 'gender' => 'Salsa', 'participants' => '3 a 10 B', 'cost' => '0.00', 'category_type_id' => '5'],
            ['code' => 'TJ-204', 'name' => 'Grupo Bachata Junior', 'level' => 'Junior', 'style' => '', 'gender' => 'Bachata', 'participants' => '2 a 5 P', 'cost' => '0.00', 'category_type_id' => '5'],
            ['code' => 'TJ-207', 'name' => 'Grupo Baile Urbano Latino Junior (Hombres, Mujeres o Mixto)	', 'level' => 'Junior', 'style' => '', 'gender' => 'Urbano Latino', 'participants' => '3 a 10 B', 'cost' => '0.00', 'category_type_id' => '5'],
            ['code' => 'TJ-XXX', 'name' => 'Grupo Salsa Junior Casino', 'level' => 'Junior', 'style' => '', 'gender' => 'Casino', 'participants' => '3 a 5 P', 'cost' => '0.00', 'category_type_id' => '5'],

            ['code' => 'TC-250', 'name' => 'Grupos Salsa Infantil', 'level' => 'Infantil', 'style' => 'Libre', 'gender' => 'Salsa', 'participants' => '2 a 5 P', 'cost' => '0.00', 'category_type_id' => '6'],
            ['code' => 'TC-252', 'name' => 'Grupos Salsa Hombres Infantil', 'level' => 'Infantil', 'style' => 'Libre', 'gender' => 'Salsa', 'participants' => '3 a 5 B', 'cost' => '0.00', 'category_type_id' => '6'],
            ['code' => 'TC-253', 'name' => 'Grupos Salsa Mujeres Infantil', 'level' => 'Infantil', 'style' => 'Libre', 'gender' => 'Bachata', 'participants' => '3 a 5 B ', 'cost' => '0.00', 'category_type_id' => '6'],
            ['code' => 'TC-257', 'name' => 'Grupo Baile Urbano Latino Infantil (Hombres, Mujeres o Mixto)	', 'level' => 'Infantil', 'style' => '', 'gender' => 'Urbano Latino', 'participants' => '3 a 10 B', 'cost' => '0.00', 'category_type_id' => '6'],
            ['code' => 'TC-XXX', 'name' => 'Grupo Salsa Infantil Casino', 'level' => 'Infantil', 'style' => '', 'gender' => 'Casino', 'participants' => '3 a 5 P', 'cost' => '0.00', 'category_type_id' => '6'],

        ];

        Category::insert($categories);
    }
}
