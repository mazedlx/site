<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Category::create([
            'category' => 'Webdevelopment'
        ]);

        App\Category::create([
            'category' => 'Support'
        ]);
    }
}
