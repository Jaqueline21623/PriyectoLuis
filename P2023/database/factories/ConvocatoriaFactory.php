<?php

namespace Database\Factories;

use App\Models\Empresa;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Convocatoria>
 */
class ConvocatoriaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name=$this->faker->unique()->word(20);
        $date=$this->faker->unique()->date;
        $integer=$this->faker->unique()->numberBetween(9,99);

        return [
            'titulo'=> $name,
            'descripcion' => $this->faker->sentence(),
            'fechainicio' => $date,
            'fechafin' => $date,
            'vacante' => $integer,
            'jornada' =>$name,
            'emp_id' =>Empresa::all()->unique()->random()->id,

        ];
    }
}
