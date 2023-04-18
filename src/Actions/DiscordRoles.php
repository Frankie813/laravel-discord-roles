<?php

namespace Frankie813\LaravelDiscordRoles\Actions;

use GuzzleHttp\Client;

class DiscordRoles
{
    private Client $httpClient;

    public function __construct($botToken = null)
    {
        $token = $botToken ?? config('discord-embeds.bot_token');

        $this->httpClient = new Client([
            'base_uri' => 'https://discord.com/api/v9/',
            'headers' => [
                'Authorization' => "Bot MTA4Nzc2Njk3MjY1NTIyMjc5NA.G2kzBw.O7iXDoByQka4cgouGvlT8l0BrBUZf7a5mVusMM",
                'Content-Type' => 'application/json',
            ],
        ]);
    }

    public function attachRole(string $guildId, string $userId, string $roleId)
    {
        $response = $this->httpClient->put("guilds/{$guildId}/members/{$userId}/roles/{$roleId}");

        return $response->getStatusCode() === 204;
    }

    public function detachRole(string $guildId, string $userId, string $roleId)
    {
        $response = $this->httpClient->delete("guilds/{$guildId}/members/{$userId}/roles/{$roleId}");

        return $response->getStatusCode() === 204;
    }
}
