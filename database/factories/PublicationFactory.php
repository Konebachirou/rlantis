<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Publication;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Publication>
 */
class PublicationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Publication::class;
    public function definition()
    {
        return [
            'title'=>$this->faker->sentence($nbWords = 20, $variableNbWords = true),
            'desc'=>$this->faker->realText($maxNbChars = 200, $indexSize = 2),
            'doc'=>$this->faker->imageUrl($width = 640, $height = 480),
            'parteners' => $this->faker->name(),
            'active'=>$this->faker->randomElement($array=array('true','false')),
            'id_user'=>User::all()->random()->id,
        ];
    }
}
