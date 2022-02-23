@section('header')
    {{ __('labels.users_list') }}
@endsection
<div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="overflow-hidden">
                <!-- Top Bar -->
                <x-toolbar>
                    <x-slot name="search">
                        <x-toolbar.search wire:model="filters.search" placeholder="Search Items ..."></x-toolbar.search>
                    </x-slot>
                    <x-slot name="advancedSearch">
                        <x-button.link wire:click="toggleShowFilters">@if ($showFilters) Hide @endif Advanced Search...
                        </x-button.link>
                    </x-slot>

                    <x-slot name="actions">
                        <x-toolbar.actions>
                            <x-toolbar.actions.item wire:click="create">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                                </svg>
                            </x-toolbar.actions.item>

                            <x-toolbar.actions.item wire:click="$toggle('showDeleteModal')">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                                </svg>
                            </x-toolbar.actions.item>

                            <x-toolbar.actions.item wire:click="exportSelected">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v3.586l-1.293-1.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V8z" clip-rule="evenodd" />
                                </svg>
                            </x-toolbar.actions.item>

                            <x-toolbar.actions.item wire:click="resetFilters">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z" clip-rule="evenodd" />
                                </svg>
                            </x-toolbar.actions.item>
                        </x-toolbar.actions>
                    </x-slot>

                    <x-slot name="perPage">
                        <x-input.select wire:model="perPage" id="perPage"
                                        class="block w-full pl-3 pr-10 px-3 py-1 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
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
                                    <x-input.money type="text" wire:model.lazy="filters.amount-min" id="filter-amount-min"/>
                                </x-input.group>

                                <x-input.group inline for="filter-amount-max" label="Maximum Amount">
                                    <x-input.money type="text" wire:model.lazy="filters.amount-max" id="filter-amount-max"/>
                                </x-input.group>
                            </div>

                            <div class="w-1/2 pl-2 space-y-4">
                                <x-input.group inline for="filter-date-min" label="Minimum Date">
                                    <x-input.date wire:model="filters.date-min" id="filter-date-min" placeholder="MM/DD/YYYY"/>
                                </x-input.group>

                                <x-input.group inline for="filter-date-max" label="Maximum Date">
                                    <x-input.date wire:model="filters.date-max" id="filter-date-max" placeholder="MM/DD/YYYY"/>
                                </x-input.group>

                                <x-button.link wire:click="resetFilters" class="absolute right-0 bottom-0 p-4">Reset Filters
                                </x-button.link>
                            </div>
                        </div>
                    @endif
                </div>

                <!-- Users Table -->
                <div class="flex-col space-y-4">
                    <x-table>
                        <x-slot name="head">
                            <x-table.heading class="pr-0 w-8">
                                <x-input.checkbox wire:model="selectPage"/>
                            </x-table.heading>
                            <x-table.heading sortable multiColumn wire:click="sortBy('id')" :direction="$sorts['id'] ?? null">
                                Id
                            </x-table.heading>
                            <x-table.heading sortable multiColumn wire:click="sortBy('name')"
                                             :direction="$sorts['name'] ?? null">Name
                            </x-table.heading>
                            <x-table.heading sortable multiColumn wire:click="sortBy('email_verified_at')"
                                             :direction="$sorts['email_verified_at'] ?? null">Status
                            </x-table.heading>
                            <x-table.heading sortable multiColumn wire:click="sortBy('status')"
                                             :direction="$sorts['status'] ?? null">Role
                            </x-table.heading>
                            <x-table.heading sortable multiColumn wire:click="sortBy('created_at')"
                                             :direction="$sorts['created_at'] ?? null">created at
                            </x-table.heading>
                            <x-table.heading/>
                        </x-slot>

                        <x-slot name="body">
                            @if ($selectPage)
                                <x-table.row class="bg-gray-200" wire:key="row-message">
                                    <x-table.cell colspan="6">
                                        @unless ($selectAll)
                                            <div>
                                                <span>You have selected <strong>{{ $items->count() }}</strong> items, do you want to select all <strong>{{ $items->total() }}</strong>?</span>
                                                <x-button.link wire:click="selectAll" class="ml-1 text-blue-600">Select All
                                                </x-button.link>
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
                                        <x-input.checkbox wire:model="selected" value="{{ $item->id }}"/>
                                    </x-table.cell>

                                    <x-table.cell>
                                        <x-button.link wire:click="edit({{ $item->id }})">{{ $item->id }}</x-button.link>
                                    </x-table.cell>

                                    <x-table.cell>
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10">
                                                <img class="h-10 w-10 rounded-full" src=" {{ $item->avatar_url }}" alt="Avatar">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-700">
                                                    {{ $item->name }}
                                                </div>
                                                <div class="text-sm text-gray-400">
                                                    {{ $item->email }}
                                                </div>
                                            </div>
                                        </div>
                                    </x-table.cell>

                                    <x-table.cell>
                                        @livewire('button.toggle', ['model' => $item, 'field' => 'email_verified_at'],
                                        key($item->id))
                                    </x-table.cell>

                                    <x-table.cell>
                                        @foreach ($item->roles as $role)
                                            <a href="#"
                                               class="relative inline-flex items-center rounded-full border border-gray-300 px-3 py-0.5 m-1">
                                                <div class="absolute flex-shrink-0 flex items-center justify-center">
                                            <span class="h-1.5 w-1.5 rounded-full bg-indigo-500"
                                                  aria-hidden="true"></span>
                                                </div>
                                                <div class="ml-3.5 text-sm font-medium text-gray-500">{{ $role->name }}</div>
                                            </a>
                                        @endforeach
                                    </x-table.cell>

                                    <x-table.cell>
                                <span
                                    class="text-gray-500 font-medium truncate">{{ $item->created_at->format('d M Y H:m') }} </span>
                                    </x-table.cell>

                                    <x-table.cell>
                                        <x-jet.dropdown align="right" width="w-40">
                                            <x-slot name="trigger">
                                                <button type="button" class="bg-gray-100 rounded-full flex items-center text-gray-400 hover:text-gray-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-indigo-500" id="menu-button" aria-expanded="true" aria-haspopup="true">
                                                    <span class="sr-only">Open options</span>
                                                    <!-- Heroicon name: solid/dots-vertical -->
                                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                        <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                                                    </svg>
                                                </button>
                                            </x-slot>

                                            <x-slot name="content">
                                                <x-jet.dropdown-link wire:click="edit({{ $item->id }})" class="group flex items-center cursor-pointer">
                                                    <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                        <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                                        <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                                                    </svg>
                                                    Edit
                                                </x-jet.dropdown-link>

                                                <x-jet.dropdown-link href="{{ route('impersonate', $item->id) }}" class="group flex items-center">
                                                    <!-- Heroicon name: solid/user-add -->
                                                    <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                        <path d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z" />
                                                    </svg>
                                                    {{ __('Login As') }}
                                                </x-jet.dropdown-link>
                                            </x-slot>
                                        </x-jet.dropdown>
                                    </x-table.cell>
                                </x-table.row>
                            @empty
                                <x-table.row>
                                    <x-table.cell colspan="6">
                                        <div class="flex justify-center items-center space-x-2">
                                            <x-icon.inbox class="h-8 w-8 text-gray-400"/>
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
            <x-slot name="title">Edit User</x-slot>

            <x-slot name="content">
                <x-input.group label="Photo" for="avatar" :error="$errors->first('avatar')">
                    <x-input.file-upload wire:model="avatar" id="avatar">
                    <span class="h-12 w-12 rounded-full overflow-hidden bg-gray-100">
                        @if ($avatar)
                            <img src="{{ $avatar->temporaryUrl() }}" alt="Avatar">
                        @else
                            <img src="{{ $editing->avatar_url }}" alt="Avatar">
                        @endif
                    </span>
                    </x-input.file-upload>
                </x-input.group>

                <x-input.group for="title" label="Title" :error="$errors->first('editing.title')">
                    <x-input.text wire:model="editing.name" id="title" placeholder="Name"/>
                </x-input.group>

                <x-input.group for="email" label="Email" :error="$errors->first('editing.email')">
                    <x-input.text type="email" wire:model="editing.email" id="email"/>
                </x-input.group>
            </x-slot>

            <x-slot name="footer">
                <x-button.secondary wire:click="$set('showEditModal', false)">Cancel</x-button.secondary>

                <x-button.primary type="submit">Save</x-button.primary>
            </x-slot>
        </x-modal.dialog>
    </form>
</div>
