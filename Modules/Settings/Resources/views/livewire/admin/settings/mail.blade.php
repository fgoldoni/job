<div>
    <div class="sm:hidden">
        <label for="tabs" class="sr-only">Select a tab</label>
        <!-- Use an "onChange" listener to redirect the user to the selected tab URL. -->
        <select id="tabs" name="tabs" class="block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
            <option>My Account</option>

            <option>Company</option>

            <option selected>Team Members</option>

            <option>Billing</option>
        </select>
    </div>
    <div class="hidden sm:block">
        <div class="border-b border-gray-200">
            @include('settings::includes.nav')
        </div>
    </div>
    <div class="space-y-6 sm:px-6 lg:px-0 lg:col-span-9">
        <form wire:submit.prevent="saveMail">
            <section aria-labelledby="payment-details-heading">
                <div class="w-full bg-white rounded-lg mx-auto mt-8 flex overflow-hidden rounded-b-none">
                    <div class="w-1/3 bg-gray-50 p-8 hidden lg:inline-block">
                        <h2 class="font-medium text-md text-gray-700 mb-4 tracking-wide">Mail Setting</h2>
                        <p class="text-xs text-gray-500">Update your site settings information, such as sending and receiving emails and name.</p>
                    </div>
                    <div class="lg:w-2/3 w-full">
                        <div class="shadow sm:rounded-md sm:overflow-hidden">
                            <div class="bg-white py-6 px-4 sm:p-6">
                                <div>
                                    <h2 id="payment-details-heading" class="text-lg leading-6 font-medium text-gray-900">Mail Setting</h2>
                                    <p class="mt-1 text-sm text-gray-500">Update your site settings information, such as sending and receiving emails and name.</p>
                                </div>

                                <x-input.group for="mail_from" label="Mail From" :error="$errors->first('mail_from')">
                                    <x-input.text wire:model="mail_from" id="title" placeholder="Mail From" />
                                </x-input.group>

                                <x-input.group for="mail_reply_to" label="Mail Reply" :error="$errors->first('mail_reply_to')">
                                    <x-input.text wire:model="mail_reply_to" id="title" placeholder="Mail Reply" />
                                </x-input.group>

                                <x-input.group for="mail_name" label="Mail Name" :error="$errors->first('mail_name')">
                                    <x-input.text wire:model="mail_name" id="description" placeholder="Mail Name" />
                                </x-input.group>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="px-4 py-3 bg-gray-300 sm:px-6 items-center flex justify-between mb-8">
                    <div class="flex-1 text-xs text-gray-500 tracking-tight">
                        Click on Save to update your Mail configuration
                    </div>
                    <div class="flex-1 text-right">
                        <x-jet.button type="submit" wire:loading.attr="disabled">
                            {{ __('Save') }}
                        </x-jet.button>
                    </div>
                </div>
            </section>
        </form>
    </div>
    <div class="space-y-6 sm:px-6 lg:px-0 lg:col-span-9">
        @livewire('input.mails', ['mailDriver' => $mail_driver])

        @if ($mail_driver === 'smtp')
            @include('settings::includes.smtp')
        @endif

        @if ($mail_driver === 'mailgun')
            @include('settings::includes.mailgun')
        @endif

        @if ($mail_driver === 'ses')
            @include('settings::includes.ses')
        @endif

        @if ($mail_driver === 'postmark')
            @include('settings::includes.postmark')
        @endif

        @if ($mail_driver === 'sendmail')
            @include('settings::includes.sendmail')
        @endif

        @if ($mail_driver === 'log')
            @include('settings::includes.log')
        @endif
    </div>
</div>
