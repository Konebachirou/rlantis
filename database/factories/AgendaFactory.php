<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Agenda;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Agenda>
 */
class AgendaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Agenda::class;
    public function definition()
    {
            return [

            'title'=>$this->faker->sentence($nbWords = 20, $variableNbWords = true),
            'desc'=>$this->faker->text(),
            'lieu'=>$this->faker->state(),
            'date'=>$this->faker->dateTime($max = 'now', $timezone = null),
        
        ];
    }
}
