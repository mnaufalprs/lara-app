<?php

namespace Database\Seeders;

use App\Models\InputLivetest;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InputLivetestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        InputLivetest::factory(1)->create();
    }
}
