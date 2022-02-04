<form wire:submit.prevent="saveSendmail">
    <section aria-labelledby="payment-details-heading">
        <div class="w-full bg-white rounded-lg mx-auto mt-8 flex overflow-hidden rounded-b-none">
            <div class="w-1/3 bg-gray-50 p-8 hidden lg:inline-block">
                <h2 class="font-medium text-md text-gray-700 mb-4 tracking-wide">Mail Setting</h2>
                <p class="text-xs text-gray-500">Update your site setting information such as Logo, Favicon, and Title.</p>
            </div>
            <div class="lg:w-2/3 w-full">
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                    <div class="bg-white py-6 px-4 sm:p-6">
                        <div>
                            <h2 id="payment-details-heading" class="text-lg leading-6 font-medium text-gray-900">Mail Setting</h2>
                            <p class="mt-1 text-sm text-gray-500">Update your site setting information such as Logo, Favicon, and Title.</p>
                        </div>

                        <x-input.group for="sendmail_path" label="Sendmail Path" :error="$errors->first('sendmail_path')">
                            <x-input.text wire:model="sendmail_path" id="sendmail_path" placeholder="Sendmail Path"/>
                        </x-input.group>

                    </div>
                </div>
            </div>
        </div>
        <div class="px-4 py-3 bg-gray-300 sm:px-6 items-center flex justify-between mb-8">
            <div class="flex-1 text-xs text-gray-500 tracking-tight">
                Click on Save to update your Profile Info
            </div>
            <div class="flex-1 text-right">
                <x-jet.button type="submit" wire:loading.attr="disabled">
                    {{ __('Save') }}
                </x-jet.button>
            </div>
        </div>
    </section>
</form>

