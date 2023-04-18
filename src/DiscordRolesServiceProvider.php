<?php

namespace Frankie813\LaravelDiscordRoles;

use Illuminate\Support\ServiceProvider;

class DiscordRolesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Publish the config file.
        $this->publishes([
            __DIR__.'/../config/discord-roles.php' => config_path('discord-roles.php'),
        ], 'discord-roles-config');
    }
}
