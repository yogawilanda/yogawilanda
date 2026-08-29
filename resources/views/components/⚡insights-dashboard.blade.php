@props([
    'username' => 'yogawilanda',
    'selectedDate' => null,
    'stats' => [
        'start_views' => 0,
        'end_views' => 0,
        'growth' => 0,
        'peak_views' => 0,
        'average_views' => 0,
        'successful_captures' => 0,
        'total_records' => 0,
    ],
    'overallStats' => [
        'total_records' => 0,
        'total_successful' => 0,
        'total_failed' => 0,
        'latest' => null,
        'max_views' => 0,
    ],
])

@php
    $selectedDate = $selectedDate ?? today()->toDateString();
    $stats = $stats ?? [
        'start_views' => 0,
        'end_views' => 0,
        'growth' => 0,
        'peak_views' => 0,
        'average_views' => 0,
        'successful_captures' => 0,
        'total_records' => 0,
    ];
    $overallStats = $overallStats ?? [
        'total_records' => 0,
        'total_successful' => 0,
        'total_failed' => 0,
        'latest' => null,
        'max_views' => 0,
    ];
@endphp

<div>
    <!-- Dashboard Header -->
    <div style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); padding: 20px; border-radius: 12px; margin-bottom: 20px; color: white;">
        <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 15px;">
            <div>
                <h2 style="margin: 0; font-size: 24px;">📊 Daily Report</h2>
                <p style="margin: 5px 0 0; opacity: 0.9;">Profile views for {{ $username }}</p>
            </div>
            <div style="display: flex; gap: 10px; align-items: center;">
                <input type="date"
                       wire:model.live="selectedDate"
                       max="{{ today()->toDateString() }}"
                       style="padding: 8px 12px; border: none; border-radius: 8px; font-size: 14px;">
                <button wire:click="$set('selectedDate', '{{ today()->toDateString() }}')"
                        style="padding: 8px 16px; background: rgba(255,255,255,0.2); border: none; border-radius: 8px; color: white; cursor: pointer; font-weight: 600;">
                    Today
                </button>
                <button wire:click="refresh"
                        style="padding: 8px 16px; background: rgba(255,255,255,0.2); border: none; border-radius: 8px; color: white; cursor: pointer; font-weight: 600;">
                    🔄 Refresh
                </button>
            </div>
        </div>

        <!-- Quick Stats -->
        <div style="display: flex; gap: 20px; margin-top: 15px; flex-wrap: wrap; background: rgba(255,255,255,0.1); padding: 15px; border-radius: 10px;">
            <div>📈 Total Records: <strong>{{ $overallStats['total_records'] }}</strong></div>
            <div>✅ Successful: <strong>{{ $overallStats['total_successful'] }}</strong></div>
            <div>❌ Failed: <strong>{{ $overallStats['total_failed'] }}</strong></div>
            <div>⭐ Max Views: <strong>{{ number_format($overallStats['max_views']) }}</strong></div>
            <div>🕐 Last: <strong>{{ $overallStats['latest']?->captured_at?->diffForHumans() ?? 'Never' }}</strong></div>
        </div>
    </div>

    <!-- Stats Grid -->
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); gap: 15px; margin-bottom: 20px;">
        <!-- Start Views -->
        <div style="background: white; padding: 20px; border-radius: 12px; border-left: 4px solid #3b82f6; box-shadow: 0 1px 3px rgba(0,0,0,0.1);">
            <div style="font-size: 14px; color: #6b7280; font-weight: 500;">Start Views</div>
            <div style="font-size: 28px; font-weight: 700; color: #1a1a2e; margin-top: 5px;">
                {{ number_format($stats['start_views']) }}
            </div>
        </div>

        <!-- End Views -->
        <div style="background: white; padding: 20px; border-radius: 12px; border-left: 4px solid #8b5cf6; box-shadow: 0 1px 3px rgba(0,0,0,0.1);">
            <div style="font-size: 14px; color: #6b7280; font-weight: 500;">End Views</div>
            <div style="font-size: 28px; font-weight: 700; color: #1a1a2e; margin-top: 5px;">
                {{ number_format($stats['end_views']) }}
            </div>
        </div>

        <!-- Growth -->
        <div style="background: white; padding: 20px; border-radius: 12px; border-left: 4px solid {{ $stats['growth'] > 0 ? '#10b981' : ($stats['growth'] < 0 ? '#ef4444' : '#6b7280') }}; box-shadow: 0 1px 3px rgba(0,0,0,0.1);">
            <div style="font-size: 14px; color: #6b7280; font-weight: 500;">Growth</div>
            <div style="font-size: 28px; font-weight: 700; color: {{ $stats['growth'] > 0 ? '#10b981' : ($stats['growth'] < 0 ? '#ef4444' : '#6b7280') }}; margin-top: 5px;">
                {{ $stats['growth'] > 0 ? '+' : '' }}{{ $stats['growth'] }}
            </div>
        </div>

        <!-- Peak Views -->
        <div style="background: white; padding: 20px; border-radius: 12px; border-left: 4px solid #f59e0b; box-shadow: 0 1px 3px rgba(0,0,0,0.1);">
            <div style="font-size: 14px; color: #6b7280; font-weight: 500;">Peak Views</div>
            <div style="font-size: 28px; font-weight: 700; color: #1a1a2e; margin-top: 5px;">
                {{ number_format($stats['peak_views']) }}
            </div>
        </div>

        <!-- Average -->
        <div style="background: white; padding: 20px; border-radius: 12px; border-left: 4px solid #ec4899; box-shadow: 0 1px 3px rgba(0,0,0,0.1);">
            <div style="font-size: 14px; color: #6b7280; font-weight: 500;">Average Views</div>
            <div style="font-size: 28px; font-weight: 700; color: #1a1a2e; margin-top: 5px;">
                {{ number_format($stats['average_views']) }}
            </div>
        </div>

        <!-- Captures -->
        <div style="background: white; padding: 20px; border-radius: 12px; border-left: 4px solid #14b8a6; box-shadow: 0 1px 3px rgba(0,0,0,0.1);">
            <div style="font-size: 14px; color: #6b7280; font-weight: 500;">Captures</div>
            <div style="font-size: 28px; font-weight: 700; color: #1a1a2e; margin-top: 5px;">
                {{ $stats['successful_captures'] }}/{{ $stats['total_records'] }}
            </div>
            <div style="font-size: 12px; color: #6b7280; margin-top: 2px;">
                ✅ {{ $stats['successful_captures'] }} successful
            </div>
        </div>
    </div>

    <!-- Detailed Report Table -->
    <div style="background: white; border-radius: 12px; padding: 20px; box-shadow: 0 1px 3px rgba(0,0,0,0.1); margin-bottom: 20px;">
        <h3 style="margin: 0 0 15px 0; color: #1a1a2e;">📋 Detailed Report - {{ \Carbon\Carbon::parse($selectedDate)->format('F d, Y') }}</h3>

        <div style="overflow-x: auto;">
            <table style="width: 100%; border-collapse: collapse;">
                <thead>
                    <tr style="background: #f9fafb; border-bottom: 2px solid #e5e7eb;">
                        <th style="padding: 12px; text-align: left; font-size: 12px; text-transform: uppercase; color: #6b7280;">Metric</th>
                        <th style="padding: 12px; text-align: right; font-size: 12px; text-transform: uppercase; color: #6b7280;">Value</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="border-bottom: 1px solid #e5e7eb;">
                        <td style="padding: 12px;">Start Views</td>
                        <td style="padding: 12px; text-align: right; font-weight: 600;">{{ number_format($stats['start_views']) }}</td>
                    </tr>
                    <tr style="border-bottom: 1px solid #e5e7eb;">
                        <td style="padding: 12px;">End Views</td>
                        <td style="padding: 12px; text-align: right; font-weight: 600;">{{ number_format($stats['end_views']) }}</td>
                    </tr>
                    <tr style="border-bottom: 1px solid #e5e7eb;">
                        <td style="padding: 12px;">Growth</td>
                        <td style="padding: 12px; text-align: right; font-weight: 600; color: {{ $stats['growth'] > 0 ? '#10b981' : ($stats['growth'] < 0 ? '#ef4444' : '#6b7280') }}">
                            {{ $stats['growth'] > 0 ? '+' : '' }}{{ $stats['growth'] }}
                        </td>
                    </tr>
                    <tr style="border-bottom: 1px solid #e5e7eb;">
                        <td style="padding: 12px;">Peak Views</td>
                        <td style="padding: 12px; text-align: right; font-weight: 600;">{{ number_format($stats['peak_views']) }}</td>
                    </tr>
                    <tr style="border-bottom: 1px solid #e5e7eb;">
                        <td style="padding: 12px;">Average Views</td>
                        <td style="padding: 12px; text-align: right; font-weight: 600;">{{ number_format($stats['average_views']) }}</td>
                    </tr>
                    <tr style="border-bottom: 1px solid #e5e7eb;">
                        <td style="padding: 12px;">Total Records</td>
                        <td style="padding: 12px; text-align: right; font-weight: 600;">{{ $stats['total_records'] }}</td>
                    </tr>
                    <tr>
                        <td style="padding: 12px;">Successful Captures</td>
                        <td style="padding: 12px; text-align: right; font-weight: 600; color: #10b981;">
                            ✅ {{ $stats['successful_captures'] }}
                            @if($stats['failed_captures'] > 0)
                                <span style="color: #ef4444; font-weight: normal;"> ({{ $stats['failed_captures'] }} failed)</span>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Hourly History -->
    <div style="background: white; border-radius: 12px; padding: 20px; box-shadow: 0 1px 3px rgba(0,0,0,0.1);">
        <h3 style="margin: 0 0 15px 0; color: #1a1a2e;">🕐 Hourly Captures</h3>

        @if($hourlyData->count() > 0)
            <div style="overflow-x: auto;">
                <table style="width: 100%; border-collapse: collapse;">
                    <thead>
                        <tr style="background: #f9fafb; border-bottom: 2px solid #e5e7eb;">
                            <th style="padding: 12px; text-align: left; font-size: 12px; text-transform: uppercase; color: #6b7280;">Time</th>
                            <th style="padding: 12px; text-align: right; font-size: 12px; text-transform: uppercase; color: #6b7280;">Views</th>
                            <th style="padding: 12px; text-align: right; font-size: 12px; text-transform: uppercase; color: #6b7280;">Change</th>
                            <th style="padding: 12px; text-align: center; font-size: 12px; text-transform: uppercase; color: #6b7280;">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($hourlyData as $index => $record)
                        <tr style="border-bottom: 1px solid #f3f4f6;">
                            <td style="padding: 12px; font-size: 14px;">{{ $record['hour'] }}</td>
                            <td style="padding: 12px; text-align: right; font-weight: 600;">{{ number_format($record['views']) }}</td>
                            <td style="padding: 12px; text-align: right;">
                                @if($index < count($hourlyData)-1)
                                    @php
                                        $next = $hourlyData[$index+1];
                                        $diff = $record['views'] - $next['views'];
                                    @endphp
                                    @if($diff > 0)
                                        <span style="color: #10b981;">+{{ $diff }}</span>
                                    @elseif($diff < 0)
                                        <span style="color: #ef4444;">{{ $diff }}</span>
                                    @else
                                        <span style="color: #9ca3af;">0</span>
                                    @endif
                                @else
                                    <span style="color: #9ca3af;">—</span>
                                @endif
                            </td>
                            <td style="padding: 12px; text-align: center;">
                                @if($record['is_successful'])
                                    <span style="background: #d1fae5; color: #065f46; padding: 2px 12px; border-radius: 20px; font-size: 12px; font-weight: 500;">✅</span>
                                @else
                                    <span style="background: #fee2e2; color: #991b1b; padding: 2px 12px; border-radius: 20px; font-size: 12px; font-weight: 500;">❌</span>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <div style="text-align: center; padding: 40px; color: #9ca3af;">
                <div style="font-size: 48px; margin-bottom: 10px;">📭</div>
                <p>No data available for {{ \Carbon\Carbon::parse($selectedDate)->format('F d, Y') }}</p>
                <p style="font-size: 14px; margin-top: 5px;">
                    Run <code style="background: #f3f4f6; padding: 2px 8px; border-radius: 4px;">php artisan insights:capture</code> to start tracking
                </p>
            </div>
        @endif
    </div>

    <!-- Summary Footer -->
    <div style="margin-top: 20px; padding: 15px; background: #f9fafb; border-radius: 12px; text-align: center; color: #6b7280; font-size: 14px;">
        📊 Report generated at {{ now()->format('Y-m-d H:i:s') }} |
        Total records: {{ $overallStats['total_records'] }}
    </div>
</div>
