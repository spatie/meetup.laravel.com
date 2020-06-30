<?php

namespace App\Http\Components;

use Illuminate\Support\Str;
use Illuminate\View\Component;

class NavigationItemComponent extends Component
{
    public string $href = '';

    public bool $active = false;

    public function __construct(string $route)
    {
        $this->href = route($route);

        $this->active = $this->isActive($route);
    }

    public function isActive(string $routeName)
    {
        if ($routeName === 'home') {
            return request()->path() === '/';
        }

        return Str::startsWith(request()->url(), $this->href);
    }

    public function render()
    {
        return view('layouts.components.navigationItem');
    }
}
