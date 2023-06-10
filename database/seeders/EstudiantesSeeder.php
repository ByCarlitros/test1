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
            [
                "rut"=>"21228253-7",
                "nombre"=>"Carlos",
                "apellido"=>"Andrades",
                "email"=>"carlos.andrades@usm.cl"
            ],
            [
                "rut"=>"22222222-2",
                "nombre"=>"Tomas",
                "apellido"=>"Tapia",
                "email"=>"Tomas.tapia@usm.cl",
            ],
            [
                "rut"=>"21433377-5",
                "nombre"=>"Manuel",
                "apellido"=>"Suarez",
                "email"=>"Manuel.Suarez@usm.cl"
            ],
            [
                "rut"=>"21217612-5",
                "nombre"=>"Joaquin",
                "apellido"=>"Sandoval",
                "email"=>"JoaquinSandoval@usm.cl"
            ],
            [
                "rut"=>"20731182-0",
                "nombre"=>"Javier",
                "apellido"=>"Nuñez",
                "email"=>"Javier.Nuñez.@usm.cl"
            ],
        ]);
    }
}