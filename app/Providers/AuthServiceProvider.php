<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
// use Illuminate\Support\Facades\Blade;
// use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Schema;

class AuthServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        Gate::before(function ($user, $ability) {
            return $user->role?->name === 'admin' ? true : null;
        });
    }
}
