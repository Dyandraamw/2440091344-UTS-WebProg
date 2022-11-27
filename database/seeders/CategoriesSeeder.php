<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoriesdata =[
        ["name"=> "Manga"],
        ["name"=> "Slice of Life"],
        ["name"=> "Fantasy"],
        ["name"=> "Sports"]];

        DB::table('categories')->insert($categoriesdata);

    }
}
