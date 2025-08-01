<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use  Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run():void
    {
        //Insertar registros a la tabla 
        DB::table('categorias')->insert([
                [
                    'nombre'=>'Calzados de caron',
                    'descripcion'=>'Calzados de varon',
                    
                ],
                 [
                    'nombre'=>'Calzados de dama',
                    'descripcion'=>'Calzados de dama',
                  
                ]
        ] );
    }
}
