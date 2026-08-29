<!-- Insight Card Component -->
<div wire:poll.5s.keep-alive
    class="w-full max-w-md bg-gray-800 border border-gray-700 rounded-xl p-5 shadow-lg">

    <!-- Header Card -->
    <div class="flex items-center justify-between border-b border-gray-700 pb-3 mb-4">
        <div class="flex items-center space-x-3">
            <div class="p-2 bg-gray-700 rounded-lg">
                <!-- GitHub Icon -->
                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.53 1.032 1.53 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" />
                </svg>
            </div>
            <div>
                <h3 class="font-semibold text-white leading-tight">GitHub Insights</h3>
                <a href="https://github.com/{{ $username }}" target="_blank" rel="noopener noreferrer"
                    class="text-xs text-gray-400 hover:text-white hover:underline transition-colors duration-150 inline-flex items-center gap-1">
                    {{ '@' . $username }}
                </a>
            </div>
        </div>

        <!-- Last Updated Badge -->
        <div
            class="flex items-center gap-1.5 text-xs text-gray-400 bg-gray-900/60 px-2.5 py-1 rounded-full border border-gray-700/60">
            <svg class="w-3 h-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span>
                @if($this->overallStats['latest']?->captured_at)
                    {{ $this->overallStats['latest']->captured_at->diffForHumans() }}
                @else
                    Belum ada data
                @endif
            </span>
        </div>
    </div>

    <!-- Metric Main Display -->
    <div class="mb-5">
        <p class="text-xs text-gray-400 uppercase tracking-wider mb-1 font-medium">Total Profile Views</p>
        <div class="flex items-baseline space-x-3">
            <span class="text-3xl font-extrabold text-white tracking-tight">
                {{ number_format($this->stats['end_views']) }}
            </span>

            @if($this->stats['growth'] != 0)
                <span
                    class="text-sm font-semibold flex items-center {{ $this->stats['growth'] > 0 ? 'text-green-400' : 'text-red-400' }}">
                    <svg class="w-4 h-4 mr-0.5 {{ $this->stats['growth'] < 0 ? 'rotate-180' : '' }}" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                    </svg>
                    {{ $this->stats['growth'] > 0 ? '+' : '' }}{{ number_format($this->stats['growth']) }}
                </span>
            @endif
        </div>
    </div>

    <!-- Aggregation Grid -->
    <div class="grid grid-cols-2 gap-3 pt-3 border-t border-gray-700/60 text-xs">
        <div class="bg-gray-900/50 p-2.5 rounded-lg border border-gray-700/40">
            <p class="text-gray-400 mb-0.5">Peak Views Today</p>
            <p class="text-sm font-bold text-gray-200">
                {{ number_format($this->stats['peak_views']) }}
            </p>
        </div>
        <div class="bg-gray-900/50 p-2.5 rounded-lg border border-gray-700/40">
            <p class="text-gray-400 mb-0.5">Average Views</p>
            <p class="text-sm font-bold text-gray-200">
                {{ number_format($this->stats['average_views'], 1) }}
            </p>
        </div>
    </div>
</div>
