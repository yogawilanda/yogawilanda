@props([
    'id' => uniqid(),
])

<svg {{ $attributes }} fill="none">
    <defs>
        <pattern id="pattern-{{ $id }}" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
            <circle cx="2" cy="2" r="0.75" fill="currentColor"></circle>
        </pattern>
    </defs>
    <rect stroke="none" fill="url(#pattern-{{ $id }})" width="100%" height="100%"></rect>
</svg>
