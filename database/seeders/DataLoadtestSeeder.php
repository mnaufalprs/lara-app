<?php

namespace Database\Seeders;

use App\Models\Data_loadtest;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DataLoadtestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Data_loadtest::factory(1)->create();
    }
}
