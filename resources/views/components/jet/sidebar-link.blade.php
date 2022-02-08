@props(['active'])

@php
$classes = ($active ?? false)
            ? 'groupb bg-' . config('setting.color') . '-50 border-' . config('setting.color') . '-600 text-' . config('setting.color') . '-600 group border-l-4 py-2 px-3 flex items-center text-sm font-medium transition'
            : 'group border-transparent text-gray-600 hover:text-gray-900 hover:bg-gray-50 group border-l-4 py-2 px-3 flex items-center text-sm font-medium transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>


