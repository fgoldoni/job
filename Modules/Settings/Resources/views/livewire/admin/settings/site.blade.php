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
        <form wire:submit.prevent="save">
            <section aria-labelledby="payment-details-heading">
                <div class="w-full bg-white rounded-lg mx-auto mt-8 flex overflow-hidden rounded-b-none">
                    <div class="w-1/3 bg-gray-50 p-8 hidden lg:inline-block">
                        <h2 class="font-medium text-md text-gray-700 mb-4 tracking-wide">Site Setting</h2>
                        <p class="text-xs text-gray-500">Update your site setting information such as Logo, Favicon, and Title.</p>
                    </div>
                    <div class="lg:w-2/3 w-full">
                        <div class="shadow sm:rounded-md sm:overflow-hidden">
                            <div class="bg-white py-6 px-4 sm:p-6">
                                <div>
                                    <h2 id="payment-details-heading" class="text-lg leading-6 font-medium text-gray-900">Site Setting</h2>
                                    <p class="mt-1 text-sm text-gray-500">Update your site setting information such as Logo, Favicon, and Title.</p>
                                </div>
                                <x-input.group label="Logo" for="logo" :error="$errors->first('logo')">
                                    <x-input.file-upload wire:model="logo" id="logo">
                                             <span class="h-12 w-12 rounded-full overflow-hidden bg-gray-100">
                                                  @if ($logo)
                                                     <img src="{{ $logo->temporaryUrl() }}" alt="Avatar">
                                                 @else
                                                     <img src="{{ $this->logo() }}" alt="Avatar">
                                                 @endif
                                             </span>
                                    </x-input.file-upload>
                                </x-input.group>
                                <x-input.group label="Favicon" for="favicon" :error="$errors->first('favicon')">
                                    <x-input.file-upload wire:model="favicon" id="favicon">
                                            <span class="h-12 w-12 rounded-full overflow-hidden bg-gray-100">
                                                @if ($favicon)
                                                    @php
                                                        try {
                                                           $url = $favicon->temporaryUrl();
                                                           $photoStatus = true;
                                                        } catch (RuntimeException $exception){
                                                            $photoStatus =  false;
                                                        }
                                                    @endphp
                                                    @if($photoStatus)
                                                        <img src="{{ $url }}" alt="Favicon">
                                                    @else
                                                        <img src=" https://ui-avatars.com/api/?name=Farleton+Iffertz&color=7F9CF5&background=EBF4FF" alt="Favicon">
                                                    @endif
                                                @else
                                                    <img src="{{ $this->favicon() }}" alt="Avatar">
                                                @endif
                                             </span>
                                    </x-input.file-upload>
                                </x-input.group>
                                <x-input.group for="color" label="Color" :error="$errors->first('color')">
                                    <x-input.text wire:model="color" id="color" placeholder="Color" />
                                </x-input.group>

                                <x-input.group for="title" label="Title" :error="$errors->first('title')">
                                    <x-input.text wire:model="title" id="title" placeholder="Title" />
                                </x-input.group>
                                <x-input.group for="description" label="Description" :error="$errors->first('description')">
                                    <x-input.text wire:model="description" id="description" placeholder="Description" />
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
                        <x-jet.button type="submit" wire:loading.attr="disabled" wire:target="photo">
                            {{ __('Save') }}
                        </x-jet.button>
                    </div>
                </div>
            </section>
        </form>
    </div>
    <div class="hidden sm:block">
        <div class="py-4">
            <div class="border-t border-gray-200"></div>
        </div>
    </div>
    <div class="space-y-6 sm:px-6 lg:px-0 lg:col-span-9">
        <form action="#" method="POST">
            <section aria-labelledby="payment-details-heading">
                <div class="w-full bg-white rounded-lg mx-auto mt-8 flex overflow-hidden rounded-b-none">
                    <div class="w-1/3 bg-gray-50 p-8 hidden lg:inline-block">
                        <h2 class="font-medium text-md text-gray-700 mb-4 tracking-wide">Profile Info</h2>
                        <p class="text-xs text-gray-500">Update your basic profile information such as Email Address, Name, and Image.</p>
                    </div>
                    <div class="lg:w-2/3 w-full">
                        <div class="shadow sm:rounded-md sm:overflow-hidden">
                            <div class="bg-white py-6 px-4 sm:p-6">
                                <div>
                                    <h2 id="payment-details-heading" class="text-lg leading-6 font-medium text-gray-900">Payment details</h2>
                                    <p class="mt-1 text-sm text-gray-500">Update your billing information. Please note that updating your location could affect your tax rates.</p>
                                </div>

                                <div class="mt-6 grid grid-cols-4 gap-6">
                                    <div class="col-span-4 sm:col-span-2">
                                        <label for="first-name" class="block text-sm font-medium text-gray-700">First name</label>
                                        <input type="text" name="first-name" id="first-name" autocomplete="cc-given-name" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-900 focus:border-gray-900 sm:text-sm">
                                    </div>

                                    <div class="col-span-4 sm:col-span-2">
                                        <label for="last-name" class="block text-sm font-medium text-gray-700">Last name</label>
                                        <input type="text" name="last-name" id="last-name" autocomplete="cc-family-name" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-900 focus:border-gray-900 sm:text-sm">
                                    </div>

                                    <div class="col-span-4 sm:col-span-2">
                                        <label for="email-address" class="block text-sm font-medium text-gray-700">Email address</label>
                                        <input type="text" name="email-address" id="email-address" autocomplete="email" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-900 focus:border-gray-900 sm:text-sm">
                                    </div>

                                    <div class="col-span-4 sm:col-span-1">
                                        <label for="expiration-date" class="block text-sm font-medium text-gray-700">Expration date</label>
                                        <input type="text" name="expiration-date" id="expiration-date" autocomplete="cc-exp" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-900 focus:border-gray-900 sm:text-sm" placeholder="MM / YY">
                                    </div>

                                    <div class="col-span-4 sm:col-span-1">
                                        <label for="security-code" class="flex items-center text-sm font-medium text-gray-700">
                                            <span>Security code</span>
                                            <!-- Heroicon name: solid/question-mark-circle -->
                                            <svg class="ml-1 flex-shrink-0 h-5 w-5 text-gray-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                                            </svg>
                                        </label>
                                        <input type="text" name="security-code" id="security-code" autocomplete="cc-csc" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-900 focus:border-gray-900 sm:text-sm">
                                    </div>

                                    <div class="col-span-4 sm:col-span-2">
                                        <label for="country" class="block text-sm font-medium text-gray-700">Country</label>
                                        <select id="country" name="country" autocomplete="country-name" class="mt-1 block w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-900 focus:border-gray-900 sm:text-sm">
                                            <option>United States</option>
                                            <option>Canada</option>
                                            <option>Mexico</option>
                                        </select>
                                    </div>

                                    <div class="col-span-4 sm:col-span-2">
                                        <label for="postal-code" class="block text-sm font-medium text-gray-700">ZIP / Postal code</label>
                                        <input type="text" name="postal-code" id="postal-code" autocomplete="postal-code" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-900 focus:border-gray-900 sm:text-sm">
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
                        <button type="submit" class="bg-gray-800 border border-transparent rounded-md shadow-sm py-2 px-6 inline-flex justify-center text-sm font-medium text-white hover:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900">
                            Save
                        </button>
                    </div>
                </div>
            </section>
        </form>
    </div>
</div>
