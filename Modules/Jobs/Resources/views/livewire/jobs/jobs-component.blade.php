<div>
    <div class="px-10 mx-auto relative" x-data="{ sidebarOpen: false }" @keydown.window.escape="sidebarOpen = false">
    <div class="absolute inset-0 w-full h-full opacity-25 sm:opacity-50">
        <svg class="absolute top-0 right-0 w-auto h-full opacity-75" viewBox="0 0 150 350" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M0 0h50v50H0z"></path><path d="M0 0h50v50H0z"></path><path d="M0 0h150v150H0z"></path></defs><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g><g fill="#DEB9FF" fill-rule="nonzero"><path d="M25 25c13.807 0 25-11.193 25-25H0c0 13.807 11.193 25 25 25z"></path></g><g transform="translate(0 100)"><mask fill="#fff"><use xlink:href="#path-1"></use></mask><path d="M25 0c13.807 0 25 11.193 25 25S38.807 50 25 50H0V0h25z" fill="#F9C7FF" mask="url(#mask-2)"></path></g><g transform="translate(100 100)"><mask fill="#fff"><use xlink:href="#path-3"></use></mask><path d="M25 25c13.807 0 25-11.193 25-25H0c0 13.807 11.193 25 25 25z" fill="#93FFFD" fill-rule="nonzero" mask="url(#mask-4)"></path></g><g transform="translate(0 200)"><mask fill="#fff"><use xlink:href="#path-5"></use></mask><path d="M75 75c0 41.421 33.579 75 75 75V0c-41.421 0-75 33.579-75 75z" fill="#93FFFD" fill-rule="nonzero" mask="url(#mask-6)"></path></g></g></g></svg>
        <svg class="absolute top-0 left-0 w-auto h-full opacity-30" viewBox="0 0 150 150" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M0 0h50v50H0z"></path><path d="M0 0h50v50H0z"></path></defs><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="matrix(-1 0 0 1 150 0)"><g transform="translate(0 25)" fill="#93FFFD" fill-rule="nonzero"><path d="M25 0C11.193 0 0 11.193 0 25h50C50 11.193 38.807 0 25 0z"></path></g><path d="M25 50C11.193 50 0 38.807 0 25S11.193 0 25 0h25v50H25z" transform="translate(100)" fill="#DEB9FF"></path><g transform="translate(0 100)"><mask fill="#fff"><use xlink:href="#path-1"></use></mask><path d="M25 50C11.193 50 0 38.807 0 25S11.193 0 25 0h25v50H25z" fill="#B3EBFF" mask="url(#mask-2)"></path></g><g transform="translate(100 200)"><mask fill="#fff"><use xlink:href="#path-3"></use></mask><path d="M25 50C11.193 50 0 38.807 0 25S11.193 0 25 0h25v50H25z" fill="#93FFFD" mask="url(#mask-4)"></path></g></g></g></svg>
    </div>

    <!-- Off-canvas menu for mobile, show/hide based on off-canvas menu state. -->
    <div class="fixed inset-0 flex z-40" role="dialog" aria-modal="true" x-show="sidebarOpen">
        <!--
          Off-canvas menu overlay, show/hide based on off-canvas menu state.

          Entering: "transition-opacity ease-linear duration-300"
            From: "opacity-0"
            To: "opacity-100"
          Leaving: "transition-opacity ease-linear duration-300"
            From: "opacity-100"
            To: "opacity-0"
        -->
        <div x-show="sidebarOpen"
             x-transition:enter="transition-opacity ease-linear duration-300"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition-opacity ease-linear duration-300"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             class="fixed inset-0 bg-gray-600 bg-opacity-75" aria-hidden="true"></div>

        <!--
          Off-canvas menu, show/hide based on off-canvas menu state.

          Entering: "transition ease-in-out duration-300 transform"
            From: "-translate-x-full"
            To: "translate-x-0"
          Leaving: "transition ease-in-out duration-300 transform"
            From: "translate-x-0"
            To: "-translate-x-full"
        -->
        <div    x-show="sidebarOpen"
                x-transition:enter="transition ease-in-out duration-300 transform"
                x-transition:enter-start="-translate-x-full"
                x-transition:enter-end="translate-x-0"
                x-transition:leave="transition ease-in-out duration-300 transform"
                x-transition:leave-start="translate-x-0"
                x-transition:leave-end="-translate-x-full"
                class="relative flex-1 flex flex-col max-w-xs w-full pt-5 pb-4 bg-white">
            <!--
              Close button, show/hide based on off-canvas menu state.

              Entering: "ease-in-out duration-300"
                From: "opacity-0"
                To: "opacity-100"
              Leaving: "ease-in-out duration-300"
                From: "opacity-100"
                To: "opacity-0"
            -->
            <div  x-show="sidebarOpen"
                  x-transition:enter="ease-in-out duration-300"
                  x-transition:enter-start=opacity-0"
                  x-transition:enter-end="opacity-100"
                  x-transition:leave="ease-in-out duration-300"
                  x-transition:leave-start="opacity-100"
                  x-transition:leave-end="opacity-0"
                  class="absolute top-0 right-0 -mr-12 pt-2">
                <button  @click="sidebarOpen = false" type="button" class="ml-1 flex items-center justify-center h-10 w-10 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                    <span class="sr-only">Close sidebar</span>
                    <!-- Heroicon name: outline/x -->
                    <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <div class="flex-shrink-0 flex items-center px-4">
                <img class="h-8 w-auto" src="{{ Storage::disk('logos')->url(config('setting.logo')) }}" alt="Workflow">
            </div>
            <div class="mt-5 flex-1 h-0 overflow-y-auto scrollbar-thin scrollbar-thumb-{{ config('setting.color') }}-700 scrollbar-track-{{ config('setting.color') }}-300">
                <!-- Filters -->
                <form class="mt-4">
                    <div x-data="{ open: false }" class="border-t border-gray-200 px-4 py-6">
                        <h3 class="-mx-2 -my-3 flow-root" @click="open = !open">
                            <!-- Expand/collapse question button -->
                            <button type="button" class="px-2 py-3 bg-white w-full flex items-center justify-between text-sm text-gray-400" aria-controls="filter-section-0" x-bind:aria-expanded="open.toString()">
                                <span class="font-medium text-gray-900"> Category </span>
                                <span class="ml-6 flex items-center">
                                <!--
                                  Expand/collapse icon, toggle classes based on question open state.

                                  Heroicon name: solid/chevron-down

                                  Open: "-rotate-180", Closed: "rotate-0"
                                -->
                                <svg class="rotate-0 h-5 w-5 transform" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                  <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                              </span>
                            </button>
                        </h3>
                        <div x-show="open" x-cloak class="pt-6" id="filter-section-0">
                            <div class="space-y-6">
                                <div class="flex items-center">
                                    <input id="filter-mobile-category-0" name="category[]" value="tees" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                    <label for="filter-mobile-category-0" class="ml-3 text-sm text-gray-500"> Tees </label>
                                </div>

                                <div class="flex items-center">
                                    <input id="filter-mobile-category-1" name="category[]" value="crewnecks" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                    <label for="filter-mobile-category-1" class="ml-3 text-sm text-gray-500"> Crewnecks </label>
                                </div>

                                <div class="flex items-center">
                                    <input id="filter-mobile-category-2" name="category[]" value="hats" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                    <label for="filter-mobile-category-2" class="ml-3 text-sm text-gray-500"> Hats </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div x-data="{ open: false }" class="border-t border-gray-200 px-4 py-6">
                        <h3 class="-mx-2 -my-3 flow-root">
                            <!-- Expand/collapse question button -->
                            <button @click="open = !open" type="button" class="px-2 py-3 bg-white w-full flex items-center justify-between text-sm text-gray-400" aria-controls="filter-section-1" aria-expanded="false">
                                <span class="font-medium text-gray-900"> Brand </span>
                                <span class="ml-6 flex items-center">
                                <!--
                                  Expand/collapse icon, toggle classes based on question open state.

                                  Heroicon name: solid/chevron-down

                                  Open: "-rotate-180", Closed: "rotate-0"
                                -->
                                <svg class="rotate-0 h-5 w-5 transform" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                  <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                              </span>
                            </button>
                        </h3>
                        <div x-show="open" x-cloak class="pt-6" id="filter-section-1">
                            <div class="space-y-6">
                                <div class="flex items-center">
                                    <input id="filter-mobile-brand-0" name="brand[]" value="clothing-company" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                    <label for="filter-mobile-brand-0" class="ml-3 text-sm text-gray-500"> Clothing Company </label>
                                </div>

                                <div class="flex items-center">
                                    <input id="filter-mobile-brand-1" name="brand[]" value="fashion-inc" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                    <label for="filter-mobile-brand-1" class="ml-3 text-sm text-gray-500"> Fashion Inc. </label>
                                </div>

                                <div class="flex items-center">
                                    <input id="filter-mobile-brand-2" name="brand[]" value="shoes-n-more" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                    <label for="filter-mobile-brand-2" class="ml-3 text-sm text-gray-500"> Shoes &#039;n More </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="flex-shrink-0 w-14" aria-hidden="true">
            <!-- Dummy element to force sidebar to shrink to fit close icon -->
        </div>
    </div>

    <div class="flex flex-col min-w-0 flex-1 overflow-hidden">
        <div class="flex-1 relative z-0 flex overflow-hidden">
            <main class="hidden lg:block lg:flex-1 relative z-0 overflow-y-auto focus:outline-none xl:order-last">
                <!-- Breadcrumb -->
                <article>
                    <!-- Profile header -->
                    <div class="px-6 pt-6 pb-4 xl:flex xl:items-center xl:justify-between">
                        <div class="sm:flex sm:space-x-5">
                            <div class="flex-shrink-0">
                                <img class="mx-auto h-20 w-20 rounded-full" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                            </div>
                            <div class="flex-1 min-w-0 space-y-1">
                                <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate">Back End Developer</h2>
                                <p class="text-gray-500">
                                    Reinger-Feil
                                </p>
                                <div class="mt-1 flex flex-col xl:flex-row xl:flex-wrap xl:mt-0 xl:space-x-6">
                                    <div class="mt-2 flex items-center text-sm text-gray-500">
                                        <!-- Heroicon name: solid/briefcase -->
                                        <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd" />
                                            <path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z" />
                                        </svg>
                                        Full-time
                                    </div>
                                    <div class="mt-2 flex items-center text-sm text-gray-500">
                                        <!-- Heroicon name: solid/location-marker -->
                                        <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                                        </svg>
                                        Remote
                                    </div>
                                    <div class="mt-2 flex items-center text-sm text-gray-500">
                                        <!-- Heroicon name: solid/currency-dollar -->
                                        <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z" />
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd" />
                                        </svg>
                                        $120k &ndash; $140k
                                    </div>
                                    <div class="mt-2 flex items-center text-sm text-gray-500">
                                        <!-- Heroicon name: solid/calendar -->
                                        <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                                        </svg>
                                        Closing on January 9, 2020
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-5 flex xl:mt-0 xl:ml-4">
                            <span class="hidden sm:block">
                              <button type="button" class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                <!-- Heroicon name: solid/pencil -->
                                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" viewBox="0 0 20 20" fill="currentColor">
                                     <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                                  </svg>
                              </button>
                            </span>

                              <span class="hidden sm:block ml-3">
                                  <button type="button" class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    <!-- Heroicon name: solid/link -->
                                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" viewBox="0 0 20 20" fill="currentColor">
                                          <path d="M15 8a3 3 0 10-2.977-2.63l-4.94 2.47a3 3 0 100 4.319l4.94 2.47a3 3 0 10.895-1.789l-4.94-2.47a3.027 3.027 0 000-.74l4.94-2.47C13.456 7.68 14.19 8 15 8z" />
                                      </svg>
                                  </button>
                              </span>

                             <span class="sm:ml-3">
                              <button type="button" class="inline-flex items-center justify-center px-4 py-2 border-2 border-{{ config('setting.color') }}-300 shadow-lg hover:shadow-xl text-sm font-medium rounded-md text-{{ config('setting.color') }}-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-indigo-500">
                                <!-- Heroicon name: solid/check -->
                                <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                                Apply
                              </button>
                            </span>

                                                    <!-- Dropdown -->
                                                    <span class="ml-3 relative sm:hidden">
                              <button type="button" class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" id="mobile-menu-button" aria-expanded="false" aria-haspopup="true">
                                More
                                  <!-- Heroicon name: solid/chevron-down -->
                                <svg class="-mr-1 ml-2 h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                  <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                              </button>

                                                        <!--
                                                          Dropdown menu, show/hide based on menu state.

                                                          Entering: "transition ease-out duration-200"
                                                            From: "transform opacity-0 scale-95"
                                                            To: "transform opacity-100 scale-100"
                                                          Leaving: "transition ease-in duration-75"
                                                            From: "transform opacity-100 scale-100"
                                                            To: "transform opacity-0 scale-95"
                                                        -->
                              <div class="origin-top-right absolute right-0 mt-2 -mr-1 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="mobile-menu-button" tabindex="-1">
                                <!-- Active: "bg-gray-100", Not Active: "" -->
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="mobile-menu-item-0">Edit</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="mobile-menu-item-1">View</a>
                              </div>
                            </span>
                        </div>
                    </div>


                    <!-- Tabs -->
                    <div class="mt-6 sm:mt-2 2xl:mt-5">
                        <div class="border-b border-gray-200">
                            <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
                                <nav class="-mb-px flex space-x-8" aria-label="Tabs">
                                    <!-- Current: "border-pink-500 text-gray-900", Default: "border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300" -->
                                    <a href="#" class="border-pink-500 text-gray-900 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm" aria-current="page"> Profile </a>

                                    <a href="#" class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm"> Calendar </a>

                                    <a href="#" class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm"> Recognition </a>
                                </nav>
                            </div>
                        </div>
                    </div>

                    <!-- Description list -->
                    <div class="mt-6 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
                        <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">
                            <div class="sm:col-span-1">
                                <dt class="text-sm font-medium text-gray-500">Phone</dt>
                                <dd class="mt-1 text-sm text-gray-900">(555) 123-4567</dd>
                            </div>

                            <div class="sm:col-span-1">
                                <dt class="text-sm font-medium text-gray-500">Email</dt>
                                <dd class="mt-1 text-sm text-gray-900">ricardocooper@example.com</dd>
                            </div>

                            <div class="sm:col-span-1">
                                <dt class="text-sm font-medium text-gray-500">Title</dt>
                                <dd class="mt-1 text-sm text-gray-900">Senior Front-End Developer</dd>
                            </div>

                            <div class="sm:col-span-1">
                                <dt class="text-sm font-medium text-gray-500">Team</dt>
                                <dd class="mt-1 text-sm text-gray-900">Product Development</dd>
                            </div>

                            <div class="sm:col-span-1">
                                <dt class="text-sm font-medium text-gray-500">Location</dt>
                                <dd class="mt-1 text-sm text-gray-900">San Francisco</dd>
                            </div>

                            <div class="sm:col-span-1">
                                <dt class="text-sm font-medium text-gray-500">Sits</dt>
                                <dd class="mt-1 text-sm text-gray-900">Oasis, 4th floor</dd>
                            </div>

                            <div class="sm:col-span-1">
                                <dt class="text-sm font-medium text-gray-500">Salary</dt>
                                <dd class="mt-1 text-sm text-gray-900">$145,000</dd>
                            </div>

                            <div class="sm:col-span-1">
                                <dt class="text-sm font-medium text-gray-500">Birthday</dt>
                                <dd class="mt-1 text-sm text-gray-900">June 8, 1990</dd>
                            </div>

                            <div class="sm:col-span-2">
                                <dt class="text-sm font-medium text-gray-500">About</dt>
                                <dd class="mt-1 max-w-prose text-sm text-gray-900 space-y-5">
                                    <p>Tincidunt quam neque in cursus viverra orci, dapibus nec tristique. Nullam ut sit dolor consectetur urna, dui cras nec sed. Cursus risus congue arcu aenean posuere aliquam.</p>
                                    <p>Et vivamus lorem pulvinar nascetur non. Pulvinar a sed platea rhoncus ac mauris amet. Urna, sem pretium sit pretium urna, senectus vitae. Scelerisque fermentum, cursus felis dui suspendisse velit pharetra. Augue et duis cursus maecenas eget quam lectus. Accumsan vitae nascetur pharetra rhoncus praesent dictum risus suspendisse.</p>
                                </dd>
                            </div>
                        </dl>
                    </div>

                    <!-- Team member list -->
                    <div class="mt-8 max-w-5xl mx-auto px-4 pb-12 sm:px-6 lg:px-8">
                        <h2 class="text-sm font-medium text-gray-500">Team members</h2>
                        <div class="mt-1 grid grid-cols-1 gap-4 sm:grid-cols-2">
                            <div class="relative rounded-lg border border-gray-300 bg-white px-6 py-5 shadow-sm flex items-center space-x-3 hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-pink-500">
                                <div class="flex-shrink-0">
                                    <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                </div>
                                <div class="flex-1 min-w-0">
                                    <a href="#" class="focus:outline-none">
                                        <span class="absolute inset-0" aria-hidden="true"></span>
                                        <p class="text-sm font-medium text-gray-900">Leslie Alexander</p>
                                        <p class="text-sm text-gray-500 truncate">Co-Founder / CEO</p>
                                    </a>
                                </div>
                            </div>

                            <div class="relative rounded-lg border border-gray-300 bg-white px-6 py-5 shadow-sm flex items-center space-x-3 hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-pink-500">
                                <div class="flex-shrink-0">
                                    <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                </div>
                                <div class="flex-1 min-w-0">
                                    <a href="#" class="focus:outline-none">
                                        <span class="absolute inset-0" aria-hidden="true"></span>
                                        <p class="text-sm font-medium text-gray-900">Michael Foster</p>
                                        <p class="text-sm text-gray-500 truncate">Co-Founder / CTO</p>
                                    </a>
                                </div>
                            </div>

                            <div class="relative rounded-lg border border-gray-300 bg-white px-6 py-5 shadow-sm flex items-center space-x-3 hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-pink-500">
                                <div class="flex-shrink-0">
                                    <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                </div>
                                <div class="flex-1 min-w-0">
                                    <a href="#" class="focus:outline-none">
                                        <span class="absolute inset-0" aria-hidden="true"></span>
                                        <p class="text-sm font-medium text-gray-900">Dries Vincent</p>
                                        <p class="text-sm text-gray-500 truncate">Manager, Business Relations</p>
                                    </a>
                                </div>
                            </div>

                            <div class="relative rounded-lg border border-gray-300 bg-white px-6 py-5 shadow-sm flex items-center space-x-3 hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-pink-500">
                                <div class="flex-shrink-0">
                                    <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                </div>
                                <div class="flex-1 min-w-0">
                                    <a href="#" class="focus:outline-none">
                                        <span class="absolute inset-0" aria-hidden="true"></span>
                                        <p class="text-sm font-medium text-gray-900">Lindsay Walton</p>
                                        <p class="text-sm text-gray-500 truncate">Front-end Developer</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </main>
            <aside class="order-first flex flex-col flex-shrink-0 w-full lg:w-1/3 border-r border-gray-200">
                <div class="px-6 pt-6 pb-4">
                    <h2 class="text-lg font-medium text-gray-900">Directory</h2>
                    <p class="mt-1 text-sm text-gray-600">Search directory of 3,018 employees</p>
                    <form class="mt-6 flex space-x-4" action="#">
                        <div class="flex-1 min-w-0">
                            <label for="search" class="sr-only">Search</label>
                            <div class="relative rounded-md shadow-sm">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <!-- Heroicon name: solid/search -->
                                    <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <input type="text" wire:model="filters.search" class="focus:ring-{{ config('setting.color') }}-500 focus:border-{{ config('setting.color') }}-500 block w-full pl-10 sm:text-sm border-gray-300 rounded-md" placeholder="Search Items ...">
                            </div>
                        </div>
                        <button type="button" @click="sidebarOpen = true" class="inline-flex justify-center px-3.5 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-{{ config('setting.color') }}-500">
                            <!-- Heroicon name: solid/filter -->
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Search</span>
                        </button>
                    </form>
                </div>
                <!-- Directory list -->
                <nav class="overflow-x-hidden overflow-y-auto h-screen scrollbar-thin scrollbar-thumb-{{ config('setting.color') }}-700 scrollbar-track-{{ config('setting.color') }}-300" aria-label="Directory">
                    <div class="relative">
                        <div class="z-10 sticky top-0 border-t border-b border-gray-200 bg-gray-50 px-6 py-1 text-sm font-medium text-gray-500">
                            <h3>PREMIUM</h3>
                        </div>
                        <ul role="list" class="relative z-0">
                            @foreach($items as $item)
                                <a href="{{ route('jobs.job', ['slug' => $item->slug]) }}" class="block border-b-4 border-transparent hover:border-{{ config(('setting.color')) }}-900 shadow-lg hover:shadow-2xl transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-102">
                                    <div class="px-8 py-5 sm:px-6 space-y-6">
                                        <div class="space-y-1">
                                            <div class="flex items-center justify-between">
                                                <p class="text-sm font-medium text-{{ config(('setting.color')) }}-600 truncate">{{ $item->name }}</p>
                                                <div class="ml-2 flex-shrink-0 flex">
                                                    <p class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Full-time</p>
                                                </div>
                                            </div>
                                            <p class="text-gray-500">
                                                {{ $item->company->name }}
                                            </p>
                                        </div>

                                        <div class="mt-2 flex justify-between">
                                            <div class="space-y-4">
                                                <p class="flex items-center text-sm text-gray-500">
                                                    <!-- Heroicon name: solid/users -->
                                                    <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                        <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                                                    </svg>
                                                    {{ $item->company->name }}
                                                </p>
                                                <p class="mt-2 flex items-center text-sm text-gray-500">
                                                    <!-- Heroicon name: solid/location-marker -->
                                                    <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                        <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                                                    </svg>
                                                    Remote
                                                </p>
                                                <p class="mt-2 flex items-center text-sm text-gray-500">
                                                    <!-- Heroicon name: solid/location-marker -->
                                                    <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                        <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                                                    </svg>
                                                    $115,000 – $135,000 USD
                                                </p>
                                                <p class="mt-2 flex items-center text-sm text-gray-500">
                                                    <!-- Heroicon name: solid/location-marker -->
                                                    <svg viewBox="0 0 20 20" fill="currentColor" class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400">
                                                        <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                                    </svg>
                                                    <span class="text-gray-600">
                                        <span aria-hidden="true">Closed on</span>
                                        <time datetime="2020-05-27T21:00:00.0">
                                            May 27, 2020
                                        </time>
                                    </span>
                                                </p>
                                            </div>
                                            <div class="mt-2 flex items-end text-sm text-gray-500 lg:mt-0">
                                                <!-- Heroicon name: solid/calendar -->
                                                <img class="w-16 h-16 bg-gray-300 rounded-full flex-shrink-0" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </ul>
                    </div>

                    <div class="relative">
                        <div class="z-10 sticky top-0 border-t border-b border-gray-200 bg-gray-50 px-6 py-1 text-sm font-medium text-gray-500">
                            <h3>B</h3>
                        </div>
                        <ul role="list" class="relative z-0">
                            @foreach($items as $item)
                                <a href="#" class="block border-b-4 border-transparent hover:border-{{ config(('setting.color')) }}-900 shadow-lg hover:shadow-2xl transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110">
                                    <div class="px-8 py-5 sm:px-6 space-y-6">
                                        <div class="space-y-1">
                                            <div class="flex items-center justify-between">
                                                <p class="text-sm font-medium text-{{ config(('setting.color')) }}-600 truncate">{{ $item->name }}</p>
                                                <div class="ml-2 flex-shrink-0 flex">
                                                    <p class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Full-time</p>
                                                </div>
                                            </div>
                                            <p class="text-gray-500">
                                                {{ $item->company->name }}
                                            </p>
                                        </div>

                                        <div class="mt-2 flex justify-between">
                                            <div class="space-y-4">
                                                <p class="flex items-center text-sm text-gray-500">
                                                    <!-- Heroicon name: solid/users -->
                                                    <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                        <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                                                    </svg>
                                                    {{ $item->company->name }}
                                                </p>
                                                <p class="mt-2 flex items-center text-sm text-gray-500">
                                                    <!-- Heroicon name: solid/location-marker -->
                                                    <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                        <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                                                    </svg>
                                                    Remote
                                                </p>
                                                <p class="mt-2 flex items-center text-sm text-gray-500">
                                                    <!-- Heroicon name: solid/location-marker -->
                                                    <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                        <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                                                    </svg>
                                                    $115,000 – $135,000 USD
                                                </p>
                                                <p class="mt-2 flex items-center text-sm text-gray-500">
                                                    <!-- Heroicon name: solid/location-marker -->
                                                    <svg viewBox="0 0 20 20" fill="currentColor" class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400">
                                                        <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                                    </svg>
                                                    <span class="text-gray-600">
                                        <span aria-hidden="true">Closed on</span>
                                        <time datetime="2020-05-27T21:00:00.0">
                                            May 27, 2020
                                        </time>
                                    </span>
                                                </p>
                                            </div>
                                            <div class="mt-2 flex items-end text-sm text-gray-500 lg:mt-0">
                                                <!-- Heroicon name: solid/calendar -->
                                                <img class="w-16 h-16 bg-gray-300 rounded-full flex-shrink-0" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </ul>
                    </div>
                </nav>
            </aside>
        </div>
    </div>
</div>
</div>
