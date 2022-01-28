@section('content')
    <!-- Replace with your content -->
    <div class="py-4">
        <div class="py-4 space-y-4">
            <!-- Transactions Table -->
            <div class="flex-col space-y-4">
                <x-table>
                    <x-slot name="head">
                        <x-table.heading class="pr-0 w-8">
                            <x-input.checkbox wire:model="selectPage" />
                        </x-table.heading>
                        <x-table.heading sortable multi-column wire:click="sortBy('title')" :direction="$sorts['title'] ?? null" class="w-full">Title</x-table.heading>
                        <x-table.heading sortable multi-column wire:click="sortBy('amount')" :direction="$sorts['amount'] ?? null">Amount</x-table.heading>
                        <x-table.heading sortable multi-column wire:click="sortBy('status')" :direction="$sorts['status'] ?? null">Status</x-table.heading>
                        <x-table.heading sortable multi-column wire:click="sortBy('date')" :direction="$sorts['date'] ?? null">Date</x-table.heading>
                        <x-table.heading />
                    </x-slot>

                    <x-slot name="body">
                        @if ($selectPage)
                            <x-table.row class="bg-cool-gray-200" wire:key="row-message">
                                <x-table.cell colspan="6">
                                    @unless ($selectAll)
                                        <div>
                                            <span>You have selected <strong>{{ $transactions->count() }}</strong> transactions, do you want to select all <strong>{{ $transactions->total() }}</strong>?</span>
                                            <x-button.link wire:click="selectAll" class="ml-1 text-blue-600">Select All</x-button.link>
                                        </div>
                                    @else
                                        <span>You are currently selecting all <strong>{{ $transactions->total() }}</strong> transactions.</span>
                                    @endif
                                </x-table.cell>
                            </x-table.row>
                        @endif

                        @forelse ($transactions as $transaction)
                            <x-table.row wire:loading.class.delay="opacity-50" wire:key="row-{{ $transaction->id }}">
                                <x-table.cell class="pr-0">
                                    <x-input.checkbox wire:model="selected" value="{{ $transaction->id }}" />
                                </x-table.cell>

                                <x-table.cell>
                            <span href="#" class="inline-flex space-x-2 truncate text-sm leading-5">
                                <x-icon.cash class="text-cool-gray-400"/>

                                <p class="text-cool-gray-600 truncate">
                                    {{ $transaction->title }}
                                </p>
                            </span>
                                </x-table.cell>

                                <x-table.cell>
                                    <span class="text-cool-gray-900 font-medium">${{ $transaction->amount }} </span> USD
                                </x-table.cell>

                                <x-table.cell>
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium leading-4 bg-{{ $transaction->status_color }}-100 text-{{ $transaction->status_color }}-800 capitalize">
                                {{ $transaction->status }}
                            </span>
                                </x-table.cell>

                                <x-table.cell>
                                    {{ $transaction->date_for_humans }}
                                </x-table.cell>

                                <x-table.cell>
                                    <x-button.link wire:click="edit({{ $transaction->id }})">Edit</x-button.link>
                                </x-table.cell>
                            </x-table.row>
                        @empty
                            <x-table.row>
                                <x-table.cell colspan="6">
                                    <div class="flex justify-center items-center space-x-2">
                                        <x-icon.inbox class="h-8 w-8 text-cool-gray-400" />
                                        <span class="font-medium py-8 text-cool-gray-400 text-xl">No transactions found...</span>
                                    </div>
                                </x-table.cell>
                            </x-table.row>
                        @endforelse
                    </x-slot>
                </x-table>

                <div>
                    {{ $transactions->links() }}
                </div>
            </div>
        </div>
    </div>
    <!-- /End replace -->
@endsection
