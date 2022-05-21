<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB:: table('_personas')->insert
        (
        [
          
           'nombre' => 'c',
           'apellido' => 'rodri',
           'direccion' => 'la paz',
           'telefono' => '310',
           'nombre' => 'so',
           'apellido' => 'pases',
           'direccion' => 'el mirador',
           'telefono' => '311',
       ]
        );
        
    }
}
