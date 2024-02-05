# Laravel Discord Roles

A Laravel package for easily attaching and detaching Discord roles.

## Installation

You can install the package via composer:

```bash
composer require Frankie813/laravel-discord-roles
```

## Configuration

Publish the configuration file (optional):

```bash
php artisan vendor:publish --provider="Frankie813\LaravelDiscordRoles\LaravelDiscordRolesServiceProvider"

```

Add your Discord bot token to your .env file:

```makefile
DISCORD_BOT_TOKEN=your_bot_token_here
```

## Usage

Use the package in your Laravel application by importing the main class:

```php
use Frankie813\LaravelDiscordRoles\LaravelDiscordRoles;

$discordRoles = new LaravelDiscordRoles(env('DISCORD_BOT_TOKEN'));

$guildId = 'guild_id';
$userId = 'user_id';
$roleId = 'role_id';

// Attach a role
$result = $discordRoles->attachRole($guildId, $userId, $roleId);

// Detach a role
$result = $discordRoles->detachRole($guildId, $userId, $roleId);
```

Or, if you prefer using the facade:

```php
use Frankie813\LaravelDiscordRoles\Facades\LaravelDiscordRoles;

$guildId = 'guild_id';
$userId = 'user_id';
$roleId = 'role_id';

// Attach a role
$result = LaravelDiscordRoles::attachRole($guildId, $userId, $roleId);

// Detach a role
$result = LaravelDiscordRoles::detachRole($guildId, $userId, $roleId);
```

## License

This package is open-source software licensed under the MIT license.
