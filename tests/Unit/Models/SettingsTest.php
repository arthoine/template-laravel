<?php

namespace Tests\Unit\Models;

use App\Models\Settings;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('uses correct database table', function () {
    $settings = new Settings();
    expect($settings->getTable())->toBe('site_settings');
});

it('has guarded id', function () {
    $settings = new Settings();
    expect(in_array('id', $settings->getGuarded()))->toBeTrue();
});
