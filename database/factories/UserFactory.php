<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User_Type;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nom'=>$this->faker->firstName(),
            'prenom'=>$this->faker->lastName(),
            'contact'=>$this->faker->phoneNumber(),
            'sexe'=>$this->faker->randomElement($array=array('F','M')),
            'img'=>"",
            'active'=>$this->faker->randomElement($array=array('true','false')),
            'location'=>$this->faker->state(),
            'these'=>$this->faker->realText($maxNbChars = 200, $indexSize = 2),
            'research_domaine'=>$this->faker->realText($maxNbChars = 200, $indexSize = 2),
            'ieeexplore'=>$this->faker->url(),
            'researchgate'=>$this->faker->url(),
            'scholar'=>$this->faker->url(),
            'acm'=>$this->faker->url(),
            'dblp'=>$this->faker->url(),
            'type'=>User_Type::all()->random()->id,
            'email'=>$this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
