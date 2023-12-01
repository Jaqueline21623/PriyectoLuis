<?php

namespace Database\Seeders;

use App\Models\Convocatoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConvocatoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Convocatoria::factory(10)->create();
    }
}
