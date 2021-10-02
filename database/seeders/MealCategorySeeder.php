<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MealCategory;

class MealCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MealCategory::factory(4)->create();
    }
}
