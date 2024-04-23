<?php

namespace Database\Seeders;

use App\Models\Data_livetest;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DataLivetestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Data_livetest::factory(1)->create();
    }
}
