<?php

namespace Database\Seeders;

use App\Models\BookCategory;
use Illuminate\Database\Seeder;

class BookCategorySeeder extends Seeder
{
    public function run()
    {
        BookCategory::factory()
            ->count(50)
            ->create();
    }
}
