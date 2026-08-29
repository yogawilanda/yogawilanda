<?php

namespace App\Services\Insights;

use App\Services\Insights\Providers\GithubProvider;

class InsightManager
{
    protected array $providers = [
        'github' => GithubProvider::class,
    ];

    public function make(string $provider): InsightProviderInterface
    {
        if (! isset($this->providers[$provider])) {
            throw new \InvalidArgumentException("Provider [{$provider}] not supported.");
        }

        return app($this->providers[$provider]);
    }
}
