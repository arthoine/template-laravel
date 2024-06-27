<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Settings>
 */
class SettingsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'scripts_head' => "<script>console.log('script head')</script>",
            'scripts_body' => "<script>console.log('script body')</script>",
            'google_verification' => '123456789',
        ];
    }
}
