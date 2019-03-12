<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Noticias',
            'slug' => 'noticias',
            'created_at' => Carbon::now(),
        ]);
        DB::table('categories')->insert([
            'name' => 'Pueblos Originarios',
            'slug' => 'pueblos-originarios',
            'created_at' => Carbon::now(),
        ]);
        DB::table('categories')->insert([
            'name' => 'Opinión',
            'slug' => 'opinion',
            'created_at' => Carbon::now(),
        ]);
    }
}
