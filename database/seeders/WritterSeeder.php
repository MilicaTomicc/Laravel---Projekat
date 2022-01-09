<?php

namespace Database\Seeders;

use App\Models\Writter;
use Illuminate\Database\Seeder;

class WritterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Writter::factory(10)->create();
    }
}
