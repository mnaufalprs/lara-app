<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Data_loadtest>
 */
class Data_loadtestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // 'user_id' => '1',
            // 'server_address' => '192.168.100.209',
            // 'request_count' => '200',
            // 'connection_count' => '710',
            // 'time_taken' => fake()->randomFloat(2, 1, 10),
            // 'request_second' => fake()->randomFloat(2, 50, 500),
            // 'time_request' => fake()->randomFloat(2, 3, 50),
            // 'transfer_rate' => fake()->randomFloat(2, 50, 900),
            // 'connection_time' => fake()->randomFloat(2, 10, 500),
            // 'request_loss' => '0',
            // 'algortima_LB' => 'round_robin',
            // 'field_chart' => 'field_chart2',
            // 'urutan_pengukuran' => '2'

            // 'user_id' => '1',
            // 'server_address' => '192.168.100.209',
            // 'request_count' => '200',
            // 'connection_count' => '710',
            // 'time_taken' => fake()->randomFloat(2, 1, 10),
            // 'request_second' => fake()->randomFloat(2, 50, 500),
            // 'time_request' => fake()->randomFloat(2, 3, 50),
            // 'transfer_rate' => fake()->randomFloat(2, 50, 900),
            // 'connection_time' => fake()->randomFloat(2, 10, 500),
            // 'request_loss' => '0',
            // 'algortima_LB' => 'weight_round_robin',
            // 'field_chart' => 'field_chart2',
            // 'urutan_pengukuran' => '2'

            // 'user_id' => '1',
            // 'server_address' => '192.168.100.209',
            // 'request_count' => '200',
            // 'connection_count' => '710',
            // 'time_taken' => fake()->randomFloat(2, 1, 10),
            // 'request_second' => fake()->randomFloat(2, 50, 500),
            // 'time_request' => fake()->randomFloat(2, 3, 50),
            // 'transfer_rate' => fake()->randomFloat(2, 50, 900),
            // 'connection_time' => fake()->randomFloat(2, 10, 500),
            // 'request_loss' => '0',
            // 'algortima_LB' => 'least_connection',
            // 'field_chart' => 'field_chart2',
            // 'urutan_pengukuran' => '2'

            'user_id' => '1',
            'server_address' => '192.168.100.209',
            'request_count' => '200',
            'connection_count' => '710',
            'time_taken' => fake()->randomFloat(2, 1, 10),
            'request_second' => fake()->randomFloat(2, 50, 500),
            'time_request' => fake()->randomFloat(2, 3, 50),
            'transfer_rate' => fake()->randomFloat(2, 50, 900),
            'connection_time' => fake()->randomFloat(2, 10, 500),
            'request_loss' => '0',
            'algortima_LB' => 'weight_least_connection',
            'field_chart' => 'field_chart2',
            'urutan_pengukuran' => '2'

            // 'user_id' => '1',
            // 'server_address' => '192.168.100.209',
            // 'request_count' => '200',
            // 'connection_count' => '710',
            // 'time_taken' => fake()->randomFloat(2, 1, 10),
            // 'request_second' => fake()->randomFloat(2, 50, 500),
            // 'time_request' => fake()->randomFloat(2, 3, 50),
            // 'transfer_rate' => fake()->randomFloat(2, 50, 900),
            // 'connection_time' => fake()->randomFloat(2, 10, 500),
            // 'request_loss' => '0',
            // 'algortima_LB' => 'no_load_balancer',
            // 'field_chart' => 'field_chart4',
            // 'urutan_pengukuran' => '2'
        ];
    }
}
