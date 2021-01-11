<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Curso;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $curso = new Curso();
      $curso->name ="Laravel";
      $curso->descripcion = "El mejor curso de PHP";
      $curso->categoria = "Desarrollo web";
      $curso->save();
      $curso2 = new Curso();
      $curso2->name ="VueJs";
      $curso2->descripcion = "Framework de Js";
      $curso2->categoria = "Desarrollo web";
      $curso2->save();
      $curso3 = new Curso();
      $curso3->name ="HTML5";
      $curso3->descripcion = "El mejor curso de HTML";
      $curso3->categoria = "Desarrollo web";
      $curso3->save();
    }
}
