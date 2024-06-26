<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Recap;

class RecapsTableSeeder extends Seeder
{
    public function run()
    {
        Recap::factory()->count(12)->create();
    }
}

