@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block pl-3 pr-4 py-2 border-l-4 border-' . config('setting.color') . '-400 text-base font-medium text-' . config('setting.color') . '-700 bg-' . config('setting.color') . '-50 focus:outline-none focus:text-' . config('setting.color') . '-800 focus:bg-' . config('setting.color') . '-100 focus:border-' . config('setting.color') . '-700 transition'
            : 'block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
