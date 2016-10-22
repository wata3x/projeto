<?php

use App\Categoria;
use Illuminate\Database\Seeder;

class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoria = new Categoria();
        $categoria->nome= 'Peito';
        $categoria->save();

        $categoria = new Categoria();
        $categoria->nome= 'Costas';
        $categoria->save();

        $categoria = new Categoria();
        $categoria->nome= 'Bíceps';
        $categoria->save();

        $categoria = new Categoria();
        $categoria->nome= 'Tríceps';
        $categoria->save();

        $categoria = new Categoria();
        $categoria->nome= 'Ombro e Trapézio';
        $categoria->save();

        $categoria = new Categoria();
        $categoria->nome= 'Membros Inferiores';
        $categoria->save();
    }
}
