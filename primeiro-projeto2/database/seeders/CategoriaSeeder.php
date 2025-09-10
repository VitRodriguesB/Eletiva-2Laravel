<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::teble('categoria')->insert([
            ['descricao'=> 'Pessoa Física'],
            ['descricao'=> 'Pessoa Juritica'],
        ]);
    }
}
