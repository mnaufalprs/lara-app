<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Data_wbtest>
 */
class Data_wbtestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            // 'server_address' => fake()->localIpv4(),
            // 'time_taken' => fake()->randomFloat(2, 1, 10),
            // 'request_second' => fake()->randomFloat(2, 50, 500),
            // 'time_request' => fake()->randomFloat(2, 3, 50),
            // 'transfer_rate' => fake()->randomFloat(2, 50, 900),
            // 'connection_time' => fake()->randomFloat(2, 10, 500),
            // 'request_loss' => '0'
            'server_address' => fake()->domainName(),
            'time_taken' => fake()->randomFloat(2, 1, 10),
            'request_second' => fake()->randomFloat(2, 50, 500),
            'time_request' => fake()->randomFloat(2, 3, 50),
            'transfer_rate' => fake()->randomFloat(2, 50, 900),
            'connection_time' => fake()->randomFloat(2, 10, 500),
            'request_loss' => '0'
        ];
    }
}
