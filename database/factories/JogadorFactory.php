<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Jogador;
use Faker\Provider\Image;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class JogadorFactory extends Factory
{
    public function definition()
    {
        return [
            'nome' => $this->faker->name(),
            'data' => $this->faker->date(),
            'imagem' => $this->faker->image("storage/app/public/produtos", 640, 480, null, false),
            'nacionalidade_id' => rand(1, 10),
        ];
    }
}
