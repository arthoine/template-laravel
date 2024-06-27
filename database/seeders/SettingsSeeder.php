<?php

namespace Database\Seeders;

use App\Models\Settings;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = Settings::first();

        $settings->scripts_body = "<script>console.log('script body')</script>";
        $settings->scripts_head = "<script>console.log('script head')</script>";
        $settings->google_verification = '123456789';

        $settings->save();
    }
}
