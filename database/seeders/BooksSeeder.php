<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categoryIds = DB::table('categories')->pluck('id')->toArray();

        if (empty($categoryIds)) {
            $this->command->info('No categories found, seeding books skipped.');
            return;
        }

        for ($i = 0; $i < 100; $i++) {
            DB::table('books')->insert([
                'title' => fake()->text(50),
                'thumbnail' => 'https://example.com/image.jpg',
                'author' => fake()->name(),
                'publisher' => fake()->company(),
                'publication_date' => fake()->date(),
                'price' => fake()->randomFloat(2, 10, 50),
                'quantity' => fake()->numberBetween(1, 100),
                'category_id' => $categoryIds[array_rand($categoryIds)],
            ]);
        }
    }
}
