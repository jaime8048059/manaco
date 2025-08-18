<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     DB::table('clientes')->insert([
            [
            'nombres'=>'Jaime',
            'apellidos'=>'Clemente',
             'direccion'=>'av.santa cruz',
              'celular'=>'77932239',
               'nit'=>'80480596',
            'created_at'=> now(),
            'updated_at'=> now(),
            ],
             [
            'nombres'=>'Maria',
            'apellidos'=>'Ramirez',
             'direccion'=>'av.santa cochabamba',
              'celular'=>'77932239',
               'nit'=>'85693256',
            'created_at'=> now(),
            'updated_at'=> now(),
            ]

             ]);
    }
}
