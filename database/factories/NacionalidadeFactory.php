<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Nacionalidade;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class NacionalidadeFactory extends Factory
{
  public function definition()
  {
    return [
      'nacionalidade' => $this->faker->name(),
    ];
  }
}
