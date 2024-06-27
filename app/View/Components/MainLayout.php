<?php

namespace App\View\Components;

use App\Models\Settings;
use Illuminate\View\Component;
use Illuminate\View\View;

class MainLayout extends Component
{
    public Settings $settings;

    public function __construct()
    {
        $this->settings = Settings::firstOrFail();
    }

    public function render(): View
    {
        return view('layouts.main');
    }
}
