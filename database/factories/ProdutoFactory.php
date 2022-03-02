<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Produto;
use Faker\Provider\Image;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class ProdutoFactory extends Factory
{
  public function definition()
  {
    return [
      'nome' => $this->faker->name(),
      'preco' => $this->faker->randomNumber(1, 100),
      'descricao' => $this->faker->text(),
      'quantidade' => $this->faker->randomNumber(1, 50),
      'imagem' => $this->faker->image("storage/app/public/produtos", 640, 480, null, false),
      'categoria_id' => rand(1, 10),
    ];
  }
}
