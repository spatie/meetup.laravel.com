<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Spatie\Flash\Flash;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Flash::levels([
            'success' => 'success',
            'error' => 'error',
        ]);
    }
}
