<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Laravel\Passport\Passport;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {

        Passport::tokensExpireIn(now()->addDays(env('PASSPORT_TOKEN_EXPIRE', 365)));
        Passport::refreshTokensExpireIn(now()->addDays(env('PASSPORT_TOKEN_REFRESH', 365)));
        Passport::personalAccessTokensExpireIn(now()->addMonths(12));
    }
}
