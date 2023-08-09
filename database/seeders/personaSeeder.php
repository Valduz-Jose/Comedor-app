<?php

namespace Database\Seeders;

use App\Models\persona;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class personaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        persona::factory(50)->create();
        // $persona = new persona;
        // $persona->name = "Pedro";
        // $persona->edad = 18;
        // $persona->sexo = "Masculino";
        // $persona->fecha_nacimiento = "1999-03-18";
        // $persona->ruta_foto = "Dowloads\Pedro";
        // $persona->save();
    }
}
