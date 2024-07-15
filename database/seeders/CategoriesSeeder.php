<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['name' => '210'],
            ['name' => 'Trinh tham'],
            ['name' => 'Lmao'],
            ['name' => 'Ngon tinh'],
            ['name' => 'Truyen doi song'],
        ]);
    }
}
