@props([
    'search',
    'advancedSearch',
    'actions',
    'perPage',
])

<div class="text-gray-900  bg-gray-200  text-sm shadow">
    <nav class="text-gray-900 px-4 py-2 flex items-center justify-between">
        <div class="flex items-center space-x-4">
            {{ $search }}
            <ul class="items-center font-demibold space-x-4">
                <li>
                    {{ $advancedSearch }}
                </li>
            </ul>
        </div>
        <div class="flex items-center space-x-5 text-white">
            {{ $actions }}

            <div class="text-gray-900 text-gray-600">
                {{ $perPage }}
            </div>
        </div>
    </nav>
</div>
