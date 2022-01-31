<div class="py-4">
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
                    <x-icon.download class="text-cool-gray-400"/> <span>Export</span>
                </x-dropdown.item>

                <x-dropdown.item type="button" wire:click="$toggle('showDeleteModal')" class="flex items-center space-x-2">
                    <x-icon.trash class="text-cool-gray-400"/> <span>Delete</span>
                </x-dropdown.item>
            </x-dropdown>



            <x-button.primary wire:click="create"><x-icon.plus/> New</x-button.primary>
        </div>
    </div>

    <!-- Advanced Search -->
    <div>
        @if ($showFilters)
            <div class="bg-cool-gray-200 p-4 rounded shadow-inner flex relative">
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
                    <x-table.heading sortable wire:click="sortBy('name')" :direction="$sorts['name'] ?? null">Name</x-table.heading>
                    <x-table.heading sortable wire:click="sortBy('amount')" :direction="$sorts['amount'] ?? null">Status</x-table.heading>
                    <x-table.heading sortable wire:click="sortBy('status')" :direction="$sorts['status'] ?? null">Role</x-table.heading>
                    <x-table.heading sortable wire:click="sortBy('date')" :direction="$sorts['date'] ?? null">Verified Email</x-table.heading>
                    <x-table.heading />
                </x-slot>

                <x-slot name="body">
                    @if ($selectPage)
                        <x-table.row class="bg-cool-gray-200" wire:key="row-message">
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
                                <span class="text-cool-gray-900 font-medium">{{ $item->name }} </span>
                            </x-table.cell>

                            <x-table.cell>
                                <span class="text-cool-gray-900 font-medium">{{ $item->name }} </span>
                            </x-table.cell>

                            <x-table.cell>
                                <span class="text-cool-gray-900 font-medium">{{ $item->name }} </span>
                            </x-table.cell>

                            <x-table.cell>
                                <x-button.link wire:click="edit({{ $item->id }})">Edit</x-button.link>
                            </x-table.cell>
                        </x-table.row>
                    @empty
                        <x-table.row>
                            <x-table.cell colspan="6">
                                <div class="flex justify-center items-center space-x-2">
                                    <x-icon.inbox class="h-8 w-8 text-cool-gray-400" />
                                    <span class="font-medium py-8 text-cool-gray-400 text-xl">No items found...</span>
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
                <div class="py-8 text-cool-gray-700">Are you sure you? This action is irreversible.</div>
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
                            <img src="{{ auth()->user()->avatar_url }}" alt="Avatar">
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
