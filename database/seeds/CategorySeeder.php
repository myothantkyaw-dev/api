<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Category::create([
         'name'=>'HTML',
      ]);
        Category::create([
            'name'=>'Javascript',
        ]);
        Category::create([
            'name'=>'Jquery',
        ]);
    }
}
