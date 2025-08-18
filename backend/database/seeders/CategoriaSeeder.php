<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categorias')->insert([
            [
            'nombre'=>'Calsados de varon',
            'descripcion'=>'Calzados de varon',
            'created_at'=> now(),
            'updated_at'=> now(),
            ],
             [
            'nombre'=>'Calsados de dama',
            'descripcion'=>'Calzados de dama',
            'created_at'=> now(),
            'updated_at'=> now(),
            ]

             ]);
        
    }
        
}
