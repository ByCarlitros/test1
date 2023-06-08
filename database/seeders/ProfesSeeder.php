<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('profesores')->insert([
            ['id'=>1,'nombre'=>'Carlos','apellido'=>'Alten','email'=>'11111111-1'],
        ]);
    }
}
