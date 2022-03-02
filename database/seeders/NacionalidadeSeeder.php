<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Models\Nacionalidade;

class NacionalidadeSeeder extends Seeder
{
  public function run()
  {
    Nacionalidade::factory()->count(10)->create();
  }
}
