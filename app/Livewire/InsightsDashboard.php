<?php

namespace App\Livewire;

use App\Models\UserInsight;
use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Component;

class InsightsDashboard extends Component
{
    public string $selectedDate;
    public string $username = 'yogawilanda';

    public function mount(): void
    {
        $this->selectedDate = today()->toDateString();
    }

    #[Computed]
    public function dailyRecords()
    {
        return UserInsight::where('username', $this->username)
            ->whereDate('captured_at', Carbon::parse($this->selectedDate))
            ->orderBy('captured_at')
            ->get();
    }

    #[Computed]
    public function stats(): array
    {
        $records = $this->dailyRecords;
        $date = Carbon::parse($this->selectedDate);

        $first = $records->first();
        $last = $records->last();

        // Pakai views_count
        $startViews = (int) ($first?->views_count ?? 0);
        $endViews = (int) ($last?->views_count ?? 0);

        return [
            'date' => $date->format('Y-m-d'),
            'start_views' => $startViews,
            'end_views' => $endViews,
            'growth' => $endViews - $startViews,
            'total_records' => $records->count(),
            'successful_captures' => $records->where('is_successful', true)->count(),
            'failed_captures' => $records->where('is_successful', false)->count(),
            'peak_views' => (int) ($records->max('views_count') ?? 0),
            'average_views' => round((float) ($records->avg('views_count') ?? 0), 2),
        ];
    }

    #[Computed]
    public function hourlyData(): array
    {
        return $this->dailyRecords
            ->map(fn ($record) => [
                'hour' => $record->captured_at->format('H:i'),
                'views' => (int) ($record->views_count ?? 0),
                'timestamp' => $record->captured_at->toIso8601String(),
                'is_successful' => (bool) $record->is_successful,
            ])
            ->all();
    }

    #[Computed]
    public function overallStats(): array
    {
        $query = UserInsight::where('username', $this->username);

        return [
            'total_records' => (clone $query)->count(),
            'total_successful' => (clone $query)->where('is_successful', true)->count(),
            'total_failed' => (clone $query)->where('is_successful', false)->count(),
            'latest' => (clone $query)->latest('captured_at')->first(),
            'max_views' => (int) ((clone $query)->max('views_count') ?? 0),
        ];
    }

    #[Layout('layouts.guest')]
    public function render(): View
    {
        return view('livewire.insights-dashboard', [
            'overallStats' => $this->overallStats,
            'stats'        => $this->stats,
        ]);
    }
}
