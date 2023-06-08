<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class EstudiantesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('estudiantes')->insert([
            ['rut'=>'21228253-7','nombre'=>'Carlos','apellido'=>'Andrades','email'=>'carlos.andrades@usm.cl','estudiante_rut'=>'21228253-7'],
        ]);
    }
}
