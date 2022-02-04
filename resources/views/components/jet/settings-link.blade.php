@props(['active'])

@php
    $classes = ($active ?? false)
                ? 'border-' .  config('setting.color') . '-500 text-' .  config('setting.color') . '-600 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm'
                : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }} wire:ignore>
    {{ $slot }}
</a>
