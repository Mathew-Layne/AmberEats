<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->count(8)->create();
        
        $this->call([
            MealCategorySeeder::class,
            MealOptionSeeder::class,
            MealChoiceSeeder::class,            
        ]);
    }
}
