<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInsight extends Model
{
    use HasFactory;

    protected $fillable = [
        'provider',
        'username',
        'views_count',
        'raw_response',
        'source_url',
        'status_code',
        'is_successful',
        'captured_at',
    ];

    protected function casts(): array
    {
        return [
            'views_count'   => 'integer',
            'is_successful' => 'boolean',
            'captured_at'   => 'datetime',
        ];
    }

    // --- Local Scopes ---

    public function scopeSuccessful(Builder $query): Builder
    {
        return $query->where('is_successful', true);
    }

    public function scopeProvider(Builder $query, string $provider): Builder
    {
        return $query->where('provider', $provider);
    }

    public function scopeForUsername(Builder $query, string $username): Builder
    {
        return $query->where('username', $username);
    }

    public function scopeLatestFirst(Builder $query): Builder
    {
        return $query->orderBy('captured_at', 'desc');
    }

    // --- Static Helper Methods ---

    public static function getGrowth(string $provider = 'github', ?string $username = null, int $hours = 24): ?array
    {
        $records = self::query()
            ->provider($provider)
            ->when($username, fn ($q) => $q->forUsername($username))
            ->where('captured_at', '>=', now()->subHours($hours))
            ->successful()
            ->latestFirst()
            ->get();

        if ($records->count() < 2) {
            return null;
        }

        $oldest = $records->last()->views_count;
        $newest = $records->first()->views_count;

        return [
            'growth'     => $newest - $oldest,
            'percentage' => $oldest > 0 ? round((($newest - $oldest) / $oldest) * 100, 2) : 0,
            'oldest'     => $oldest,
            'newest'     => $newest,
            'period'     => $hours . ' hours',
        ];
    }
}
