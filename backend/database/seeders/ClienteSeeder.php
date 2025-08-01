<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use  Illuminate\Support\Facades\DB;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('clientes')->insert([
                [
                    'nombres'=>'Jaime',
                    'apellidos'=>'Clemente Ramirez',
                    'direccion'=>'Av. 2 circunvalacion',
                    'celular'=>'77932239',
                    'nit'=>'8048059',
                ],
                 [
                     'nombres'=>'Maria Isabel',
                    'apellidos'=>'Equilea Lobo',
                    'direccion'=>'Av. Guadalupe',
                    'celular'=>'77932239',
                    'nit'=>'896523',
                  
                ]
        ] );
    }
}
