<?php

namespace Database\Seeders;

use App\Models\comedore;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class comedoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comedore = new comedore;
        $comedore->name = "Bramon";
        $comedore->fecha = "2023-08-08";
        $comedore->platos_servidos_diarios = 15;
        $comedore->platos_acumulados = 1999;
        $comedore->save();
    }
}
