<form wire:submit.prevent="saveSes">
    <section aria-labelledby="payment-details-heading">
        <div class="w-full bg-white rounded-lg mx-auto mt-8 flex overflow-hidden rounded-b-none">
            <div class="w-1/3 bg-gray-50 p-8 hidden lg:inline-block">
                <h2 class="font-medium text-md text-gray-700 mb-4 tracking-wide">Amazon SES Setting</h2>
                <p class="text-xs text-gray-500">Update your site setting information such as Logo, Favicon, and Title.</p>
            </div>
            <div class="lg:w-2/3 w-full">
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                    <div class="bg-white py-6 px-4 sm:p-6">
                        <div>
                            <h2 id="payment-details-heading" class="text-lg leading-6 font-medium text-gray-900">Amazon SES Setting</h2>
                            <p class="mt-1 text-sm text-gray-500">Update your site setting information such as Logo, Favicon, and Title.</p>
                        </div>

                        <x-input.group for="ses_key" label="Amazon SES Key" :error="$errors->first('ses_key')">
                            <x-input.text wire:model="ses_key" id="ses_key" placeholder="Amazon SES Key"/>
                        </x-input.group>

                        <x-input.group for="ses_secret" label="Amazon SES Secret" :error="$errors->first('ses_secret')">
                            <x-input.text wire:model="ses_secret" id="ses_secret" placeholder="Amazon SES Secret"/>
                        </x-input.group>


                        <x-input.group for="ses_region" label="Amazon SES Region" :error="$errors->first('ses_region')">
                            <x-input.text wire:model="ses_region" id="ses_region" placeholder="Amazon SES Region"/>
                        </x-input.group>

                        <div class="rounded-md bg-yellow-50 p-4">
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <!-- Heroicon name: solid/exclamation -->
                                    <svg class="h-5 w-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <h3 class="text-sm font-medium text-yellow-800">Attention needed</h3>
                                    <div class="mt-2 text-sm text-yellow-700">
                                        <p>To utilize AWS temporary credentials via a session token, you may add a token key to your application's SES configuration:
                                            <code class="text-{{ config('setting.color') }}-600 hover:text-{{ config('setting.color') }}-500">'token' => env('AWS_SESSION_TOKEN')</code>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
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






