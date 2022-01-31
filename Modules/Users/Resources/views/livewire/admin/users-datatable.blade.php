<div class="py-4">
    <div class="text-gray-900  bg-gray-300  text-sm">
        <nav class="text-gray-900 px-4 py-3 flex items-center justify-between">
            <div class="flex items-center space-x-4">
                <div class="relative">
                    <input type="text" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block sm:text-sm border-gray-300 rounded-md w-72" placeholder="Search Items ...">
                </div>
                <ul class="flex items-center font-demibold space-x-4">
                    <li class="block lg:hidden">
                        <a href="#" class="hover:text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </li>
                    <li class="hidden lg:block">
                        <a href="#" class="hover:text-gray-400">Advanced Search ...</a>
                    </li>
                </ul>
            </div>
            <div class="flex items-center space-x-5 text-white">
                <a href="#" class="text-gray-900 hover:text-gray-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
                <a href="#" class="text-gray-900 hover:text-gray-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z" clip-rule="evenodd" />
                    </svg>
                </a>
                <a href="#" class="text-gray-900 hover:text-gray-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                    </svg>
                </a>
                <a href="#" class="hidden lg:block text-gray-900 text-gray-600">
                    <select id="location" name="location" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                        <option>10</option>
                        <option selected>25</option>
                        <option>50</option>
                    </select>
                </a>
            </div>
        </nav>
    </div>
    <!-- Top Bar -->
    <div class="flex justify-between">
        <div class="w-2/4 flex space-x-4">
            <x-input.text wire:model="filters.search" type="text" placeholder="Search Items ..." />

            <x-button.link wire:click="toggleShowFilters">@if ($showFilters) Hide @endif Advanced Search...</x-button.link>
        </div>

        <div class="space-x-2 flex items-center">
            <x-input.group borderless paddingless for="perPage" label="Per Page">
                <x-input.select wire:model="perPage" id="perPage">
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                </x-input.select>
            </x-input.group>

            <x-dropdown label="Bulk Actions">
                <x-dropdown.item type="button" wire:click="exportSelected" class="flex items-center space-x-2">
                    <x-icon.download class="text-gray-400"/> <span>Export</span>
                </x-dropdown.item>

                <x-dropdown.item type="button" wire:click="$toggle('showDeleteModal')" class="flex items-center space-x-2">
                    <x-icon.trash class="text-gray-400"/> <span>Delete</span>
                </x-dropdown.item>
            </x-dropdown>



            <x-button.primary wire:click="create"><x-icon.plus/> New</x-button.primary>
        </div>
    </div>

    <!-- Advanced Search -->
    <div>
        @if ($showFilters)
            <div class="bg-gray-200 p-4 rounded shadow-inner flex relative">
                <div class="w-1/2 pr-2 space-y-4">
                    <x-input.group inline for="filter-status" label="Status">
                        <x-input.select wire:model="filters.status" id="filter-status">
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


    <div class="py-4 space-y-4">
        <!-- Users Table -->
        <div class="flex-col space-y-4">
            <x-table>
                <x-slot name="head">
                    <x-table.heading class="pr-0 w-8">
                        <x-input.checkbox wire:model="selectPage" />
                    </x-table.heading>
                    <x-table.heading sortable multiColumn wire:click="sortBy('id')" :direction="$sorts['id'] ?? null">Id</x-table.heading>
                    <x-table.heading sortable multiColumn wire:click="sortBy('name')" :direction="$sorts['name'] ?? null">Name</x-table.heading>
                    <x-table.heading sortable multiColumn wire:click="sortBy('email_verified_at')" :direction="$sorts['email_verified_at'] ?? null">Status</x-table.heading>
                    <x-table.heading sortable multiColumn wire:click="sortBy('status')" :direction="$sorts['status'] ?? null">Role</x-table.heading>
                    <x-table.heading sortable multiColumn wire:click="sortBy('created_at')" :direction="$sorts['created_at'] ?? null">created at</x-table.heading>
                    <x-table.heading />
                </x-slot>

                <x-slot name="body">
                    @if ($selectPage)
                        <x-table.row class="bg-gray-200" wire:key="row-message">
                            <x-table.cell colspan="6">
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
                                <x-button.link wire:click="edit({{ $item->id }})">{{ $item->id }}</x-button.link>
                            </x-table.cell>

                            <x-table.cell>
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img class="h-10 w-10 rounded-full" src=" {{ $item->avatar_url }}" alt="Avatar">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">
                                            {{ $item->name }}
                                        </div>
                                        <div class="text-sm text-gray-500">
                                            {{ $item->email }}
                                        </div>
                                    </div>
                                </div>
                            </x-table.cell>

                            <x-table.cell>
                                <div class="flex items-center flex-no-wrap">
                                    <button type="button"
                                            x-data="{ on: false }"
                                            @click="on = !on"
                                            :class="{ 'bg-indigo-600': on, 'bg-gray-200': !(on) }"
                                            class="relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" role="switch" aria-checked="false">
                                        <span class="sr-only">Use setting</span>
                                        <!-- Enabled: "translate-x-5", Not Enabled: "translate-x-0" -->
                                        <span :class="{ 'translate-x-5': on, 'translate-x-0': !(on) }" class="pointer-events-none relative inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200">
                                    <!-- Enabled: "opacity-0 ease-out duration-100", Not Enabled: "opacity-100 ease-in duration-200" -->
                                    <span :class="{ 'opacity-0 ease-out duration-100': on, 'opacity-100 ease-in duration-200': !(on) }" class="absolute inset-0 h-full w-full flex items-center justify-center transition-opacity" aria-hidden="true">
                                      <svg class="h-3 w-3 text-gray-400" fill="none" viewBox="0 0 12 12">
                                        <path d="M4 8l2-2m0 0l2-2M6 6L4 4m2 2l2 2" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                      </svg>
                                    </span>
                                            <!-- Enabled: "opacity-100 ease-in duration-200", Not Enabled: "opacity-0 ease-out duration-100" -->
                                    <span :class="{ 'opacity-100 ease-in duration-200': on, 'opacity-0 ease-out duration-100': !(on) }" class="absolute inset-0 h-full w-full flex items-center justify-center transition-opacity" aria-hidden="true">
                                      <svg class="h-3 w-3 text-indigo-600" fill="currentColor" viewBox="0 0 12 12">
                                        <path d="M3.707 5.293a1 1 0 00-1.414 1.414l1.414-1.414zM5 8l-.707.707a1 1 0 001.414 0L5 8zm4.707-3.293a1 1 0 00-1.414-1.414l1.414 1.414zm-7.414 2l2 2 1.414-1.414-2-2-1.414 1.414zm3.414 2l4-4-1.414-1.414-4 4 1.414 1.414z" />
                                      </svg>
                                    </span>
                                  </span>
                                    </button>
                                    <x-button.link class="m-2 text-sm flex-none">Re-send link</x-button.link>
                                </div>

                            </x-table.cell>

                            <x-table.cell>
                                @foreach ($item->roles as $role)

                                <a href="#" class="relative inline-flex items-center rounded-full border border-gray-300 px-3 py-0.5 m-1">
                                    <div class="absolute flex-shrink-0 flex items-center justify-center">
                                        <span class="h-1.5 w-1.5 rounded-full bg-indigo-500" aria-hidden="true"></span>
                                    </div>
                                    <div class="ml-3.5 text-sm font-medium text-gray-900">{{ $role->name }}</div>
                                </a>
                                @endforeach
                            </x-table.cell>

                            <x-table.cell>
                                <span class="text-gray-900 font-medium">{{ $item->created_at->format('d M Y H:m') }} </span>
                            </x-table.cell>

                            <x-table.cell>
                                <x-button.link wire:click="edit({{ $item->id }})">Edit</x-button.link>
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
                    <x-input.text wire:model="editing.name" id="title" placeholder="Name" />
                </x-input.group>

                <x-input.group for="email" label="Email" :error="$errors->first('editing.email')">
                    <x-input.text type="email" wire:model="editing.email" id="email" />
                </x-input.group>
            </x-slot>

            <x-slot name="footer">
                <x-button.secondary wire:click="$set('showEditModal', false)">Cancel</x-button.secondary>

                <x-button.primary type="submit">Save</x-button.primary>
            </x-slot>
        </x-modal.dialog>
    </form>
</div>
