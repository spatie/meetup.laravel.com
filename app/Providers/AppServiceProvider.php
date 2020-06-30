<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use Spatie\Flash\Flash;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Flash::levels([
            'success' => 'green',
            'error' => 'red',
        ]);

        Gate::define('viewMailcoach', function (User $user) {
            return true;
        });

        Paginator::useTailwind();
    }
}
