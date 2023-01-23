<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'titulo' => Str::random(8),
            'extracto' => Str::random(16),
            'contenido' => Str::random(35),
            'caducable' => true,
            'comentable' => true,
            'select' => true

        ]);
    }
}
