<?php

namespace Database\Seeders;

use App\Models\vivere;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class vivereSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vivere = new vivere;
        $vivere->name = "Carne";
        $vivere->cantidad = 300;
        $vivere->unidad_medida = "kg";
        $vivere->save();
    }
}
