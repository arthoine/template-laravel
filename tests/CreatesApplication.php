<?php

namespace Tests;

use Illuminate\Contracts\Console\Kernel;
use Illuminate\Foundation\Application;

trait CreatesApplication
{
    public function createApplication(): Application
    {
        $app = require __DIR__.'/../bootstrap/app.php';

        if (! file_exists(database_path('testing.sqlite'))) {
            file_put_contents(database_path('testing.sqlite'), '');
        }

        $app->make(Kernel::class)->bootstrap();

        return $app;
    }
}
