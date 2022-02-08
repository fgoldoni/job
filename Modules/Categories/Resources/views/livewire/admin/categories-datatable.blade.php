@section('header')
    {{ __('labels.categories_list') }}
@endsection
<div class="py-4">
    <!-- Top Bar -->
    <x-toolbar>
        <x-slot name="search">
            <x-input.text wire:model="filters.search" placeholder="Search Items ..."></x-input.text>
        </x-slot>
        <x-slot name="advancedSearch">
            <x-button.link wire:click="toggleShowFilters">@if ($showFilters) Hide @endif Advanced Search...</x-button.link>
        </x-slot>
        <x-slot name="actions">
            <x-toolbar.actions>
                <x-toolbar.actions.item wire:click="create">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                    </svg>
                </x-toolbar.actions.item>

                <x-toolbar.actions.item wire:click="$toggle('showDeleteModal')">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                    </svg>
                </x-toolbar.actions.item>

                <x-toolbar.actions.item wire:click="exportSelected">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v3.586l-1.293-1.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V8z" clip-rule="evenodd" />
                    </svg>
                </x-toolbar.actions.item>

                <x-toolbar.actions.item>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z" clip-rule="evenodd" />
                    </svg>
                </x-toolbar.actions.item>
            </x-toolbar.actions>
        </x-slot>
        <x-slot name="perPage">
            <x-input.select wire:model="perPage" id="perPage" class="block w-full pl-3 pr-10 px-3 py-1 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="25">25</option>
                <option value="50">50</option>
            </x-input.select>
        </x-slot>
    </x-toolbar>

    <!-- Advanced Search -->
    <div>
        @if ($showFilters)
            <div class="bg-gray-200 p-4 rounded shadow-inner flex relative">
                <div class="w-1/2 pr-2 space-y-4">
                    <x-input.group inline for="filter-status" label="Status">
                        <x-input.select wire:model="filters.status" id="filter-status" class="py-2">
                            <option value="" disabled>Select Status...</option>

                            @foreach (App\Models\User::STATUSES as $value => $label)
                                <option value="{{ $value }}">{{ $label }}</option>
                            @endforeach
                        </x-input.select>
                    </x-input.group>

                    <x-input.group inline for="filter-amount-min" label="Minimum Amount">
                        <x-input.money type="text" wire:model.lazy="filters.amount-min" id="filter-amount-min" />
                    </x-input.group>

                    <x-input.group inline for="filter-amount-max" label="Maximum Amount">
                        <x-input.money type="text" wire:model.lazy="filters.amount-max" id="filter-amount-max" />
                    </x-input.group>
                </div>

                <div class="w-1/2 pl-2 space-y-4">
                    <x-input.group inline for="filter-date-min" label="Minimum Date">
                        <x-input.date wire:model="filters.date-min" id="filter-date-min" placeholder="MM/DD/YYYY" />
                    </x-input.group>

                    <x-input.group inline for="filter-date-max" label="Maximum Date">
                        <x-input.date wire:model="filters.date-max" id="filter-date-max" placeholder="MM/DD/YYYY" />
                    </x-input.group>

                    <x-button.link wire:click="resetFilters" class="absolute right-0 bottom-0 p-4">Reset Filters</x-button.link>
                </div>
            </div>
        @endif
    </div>


    <div class="space-y-4">
        <!-- Users Table -->
        <div class="flex-col space-y-4">
            <x-table>
                <x-slot name="head">
                    <x-table.heading class="pr-0 w-8">
                        <x-input.checkbox wire:model="selectPage" />
                    </x-table.heading>
                    <x-table.heading sortable multiColumn wire:click="sortBy('name')" :direction="$sorts['name'] ?? null">{{ __('tables.name') }}</x-table.heading>
                    <x-table.heading>{{ __('tables.user') }}</x-table.heading>
                    <x-table.heading sortable multiColumn wire:click="sortBy('online')" :direction="$sorts['online'] ?? null">{{ __('tables.status') }}</x-table.heading>
                    <x-table.heading sortable multiColumn wire:click="sortBy('created_at')" :direction="$sorts['created_at'] ?? null">{{ __('tables.created_at') }}</x-table.heading>
                    <x-table.heading />
                </x-slot>

                <x-slot name="body">
                    @if ($selectPage)
                        <x-table.row class="bg-gray-200" wire:key="row-message">
                            <x-table.cell colspan="8">
                                @unless ($selectAll)
                                    <div>
                                        <span>You have selected <strong>{{ $items->count() }}</strong> items, do you want to select all <strong>{{ $items->total() }}</strong>?</span>
                                        <x-button.link wire:click="selectAll" class="ml-1 text-blue-600">Select All</x-button.link>
                                    </div>
                                @else
                                    <span>You are currently selecting all <strong>{{ $items->total() }}</strong> items.</span>
                                @endif
                            </x-table.cell>
                        </x-table.row>
                    @endif

                    @forelse ($items as $item)
                        <x-table.row wire:loading.class.delay="opacity-50" wire:key="row-{{ $item->id }}">
                            <x-table.cell class="pr-0">
                                <x-input.checkbox wire:model="selected" value="{{ $item->id }}" />
                            </x-table.cell>

                            <x-table.cell>
                                <span href="#" class="inline-flex space-x-2 truncate text-sm leading-5">
                                    <x-icon.cash class="text-gray-400"/>

                                    <p class="text-gray-600 truncate">
                                        {{ $item->name }}
                                    </p>
                                </span>
                            </x-table.cell>

                            <x-table.cell>
                                <span class="text-gray-900 font-medium truncate">{{ $item->user ? $item->user->name : '' }} </span>
                            </x-table.cell>

                            <x-table.cell>
                                @livewire('button.status', ['model' => $item, 'field' => 'online'], key($item->id))
                            </x-table.cell>

                            <x-table.cell>
                                <span class="text-gray-900 font-medium truncate">{{ $item->created_at->format('d M Y') }} </span>
                            </x-table.cell>

                            <x-table.cell>
                                <x-button.link wire:click="edit({{ $item->id }})" class="hover:text-gray-400 ml-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                        <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                                    </svg>
                                </x-button.link>
                            </x-table.cell>
                        </x-table.row>
                    @empty
                        <x-table.row>
                            <x-table.cell colspan="6">
                                <div class="flex justify-center items-center space-x-2">
                                    <x-icon.inbox class="h-8 w-8 text-gray-400" />
                                    <span class="font-medium py-8 text-gray-400 text-xl">No items found...</span>
                                </div>
                            </x-table.cell>
                        </x-table.row>
                    @endforelse
                </x-slot>
            </x-table>

            <div>
                {{ $items->links() }}
            </div>
        </div>
    </div>

    <!-- Delete Users Modal -->
    <form wire:submit.prevent="deleteSelected">
        <x-modal.confirmation wire:model.defer="showDeleteModal">
            <x-slot name="title">Delete User</x-slot>

            <x-slot name="content">
                <div class="py-8 text-gray-700">Are you sure you? This action is irreversible.</div>
            </x-slot>

            <x-slot name="footer">
                <x-button.secondary wire:click="$set('showDeleteModal', false)">Cancel</x-button.secondary>

                <x-button.primary type="submit">Delete</x-button.primary>
            </x-slot>
        </x-modal.confirmation>
    </form>

    <!-- Save User Modal -->
    <form wire:submit.prevent="save">
        <x-modal.dialog wire:model.defer="showEditModal">
            <x-slot name="title">Edit Category</x-slot>

            <x-slot name="content">
                <x-input.group for="name" label="Name" :error="$errors->first('editing.name')">
                    <x-input.text wire:model="editing.name" id="name" placeholder="Name" />
                </x-input.group>

                <x-input.group for="online" label="Online" :error="$errors->first('editing.online')">
                    <x-input.checkbox wire:model="editing.online" id="online" placeholder="Online" />
                </x-input.group>

                <x-input.group for="description" label="Description" :error="$errors->first('editing.description')">
                    <x-input.textarea wire:model="editing.description" id="description" placeholder="Description" />
                </x-input.group>

                <x-input.group for="status" label="Status" :error="$errors->first('editing.status')">
                    <x-input.select wire:model="editing.status" id="status">
                        @foreach (App\Models\User::STATUSES as $value => $label)
                            <option value="{{ $value }}">{{ $label }}</option>
                        @endforeach
                    </x-input.select>
                </x-input.group>
            </x-slot>

            <x-slot name="footer">
                <x-button.secondary wire:click="$set('showEditModal', false)">Cancel</x-button.secondary>

                <x-button.primary type="submit">Save</x-button.primary>
            </x-slot>
        </x-modal.dialog>
    </form>
</div>
