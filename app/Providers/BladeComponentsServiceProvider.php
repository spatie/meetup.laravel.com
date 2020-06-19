<?php

namespace App\Providers;

use App\Http\Components\NavigationItemComponent;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class BladeComponentsServiceProvider extends ServiceProvider
{
    public function register()
    {
        Blade::component('layouts.main', 'main-layout');
        Blade::component('layouts.components.navigation', 'navigation');
        Blade::component(NavigationItemComponent::class, 'navigation-item');
        Blade::component('components.flash', 'flash');
        Blade::component('components.formFieldError', 'form-field-error');
        Blade::component('components.speaker', 'speaker');
    }
}
