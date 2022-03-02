<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Categoria;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class CategoriaFactory extends Factory
{
  public function definition()
  {
    return [
      'categoria' => $this->faker->name(),
    ];
  }
}
