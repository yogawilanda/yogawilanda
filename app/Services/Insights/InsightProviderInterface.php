<?php
namespace App\Services\Insights;

interface InsightProviderInterface
{
    /**
     * Fetch raw data and return parsed view count.
     */
    public function capture(string $username): ?int;

    public function getRawResponse(): ?string;
    public function getStatusCode(): int;
    public function getSourceUrl(string $username): string;
}
