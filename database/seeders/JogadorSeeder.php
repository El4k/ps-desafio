<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Models\Jogador;

class JogadorSeeder extends Seeder
{
  public function run()
  {
    Jogador::factory()->count(10)->create();
  }
}
