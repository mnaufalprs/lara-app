<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Data_wbtest;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
    //    User::factory(5)->create();

       Data_wbtest::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // Data_wbtest::create([
        //     'server_address' => 'detik.com',
        //     'time_taken' => '5.2',
        //     'request_second' => '145',
        //     'time_request' => '10.1',
        //     'transfer_rate' => '483.11',
        //     'connection_time' => '101.55',
        //     'request_loss' => '0'
        // ]);

        // Data_wbtest::create([
        //     'server_address' => '192.168.100.53',
        //     'time_taken' => '7.2',
        //     'request_second' => '115',
        //     'time_request' => '15.1',
        //     'transfer_rate' => '283.11',
        //     'connection_time' => '187.23',
        //     'request_loss' => '0'
        // ]);

        // Data_wbtest::create([
        //     'server_address' => 'netflix.com',
        //     'time_taken' => '3.1',
        //     'request_second' => '321.5',
        //     'time_request' => '4.3',
        //     'transfer_rate' => '683.11',
        //     'connection_time' => '89.1',
        //     'request_loss' => '0'
        // ]);
    }
}
