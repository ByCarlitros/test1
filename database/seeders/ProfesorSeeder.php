<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfeorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('profesores')->insert([
            [   
                'nombre'=>'Carlos',
                'apellido'=>'Alten',
                'email'=>'carlos.alten@usm.cl'
            ],
            [   
                'nombre'=>'Mariano',
                'apellido'=>'Gomez',
                'email'=>'mariano.gomez@usm.cl'
            ],
        ]);
    }
}
