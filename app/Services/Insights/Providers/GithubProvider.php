<?php

namespace App\Services\Insights\Providers;

use App\Services\Insights\InsightProviderInterface;
use Illuminate\Support\Facades\Http;

class GithubProvider implements InsightProviderInterface
{
    protected ?string $rawResponse = null;
    protected int $statusCode = 0;

    public function getSourceUrl(string $username): string
    {
        return "https://komarev.com/ghpvc/?username={$username}&color=blue";
    }

    public function capture(string $username): ?int
    {
        $url = $this->getSourceUrl($username);

        $response = Http::timeout(30)
            ->withHeaders(['User-Agent' => 'Mozilla/5.0'])
            ->get($url);

        $this->statusCode = $response->status();
        $this->rawResponse = $response->body();

        if (! $response->successful()) {
            return null;
        }

        if (preg_match_all('/<text[^>]*>([^<]+)<\/text>/i', $this->rawResponse, $matches)) {
            $lastElement = trim(end($matches[1]));
            $digits = preg_replace('/[^0-9]/', '', $lastElement);

            return $digits !== '' ? (int) $digits : null;
        }

        return null;
    }

    public function getRawResponse(): ?string
    {
        return $this->rawResponse;
    }

    public function getStatusCode(): int
    {
        return $this->statusCode;
    }
}
