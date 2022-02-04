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
                        <x-jet.button type="submit" wire:loading.attr="disabled">
                            {{ __('Save') }}
                        </x-jet.button>
                    </div>
                </div>
            </section>
        </form>
    </div>
</div>
