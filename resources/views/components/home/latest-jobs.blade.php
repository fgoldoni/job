<section class="relative w-full bg-white">
    <div class="absolute inset-0 w-full h-full opacity-25 sm:opacity-50">
        <svg class="absolute top-0 right-0 w-auto h-full opacity-75" viewBox="0 0 150 350" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M0 0h50v50H0z"></path><path d="M0 0h50v50H0z"></path><path d="M0 0h150v150H0z"></path></defs><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g><g fill="#DEB9FF" fill-rule="nonzero"><path d="M25 25c13.807 0 25-11.193 25-25H0c0 13.807 11.193 25 25 25z"></path></g><g transform="translate(0 100)"><mask fill="#fff"><use xlink:href="#path-1"></use></mask><path d="M25 0c13.807 0 25 11.193 25 25S38.807 50 25 50H0V0h25z" fill="#F9C7FF" mask="url(#mask-2)"></path></g><g transform="translate(100 100)"><mask fill="#fff"><use xlink:href="#path-3"></use></mask><path d="M25 25c13.807 0 25-11.193 25-25H0c0 13.807 11.193 25 25 25z" fill="#93FFFD" fill-rule="nonzero" mask="url(#mask-4)"></path></g><g transform="translate(0 200)"><mask fill="#fff"><use xlink:href="#path-5"></use></mask><path d="M75 75c0 41.421 33.579 75 75 75V0c-41.421 0-75 33.579-75 75z" fill="#93FFFD" fill-rule="nonzero" mask="url(#mask-6)"></path></g></g></g></svg>
        <svg class="absolute top-0 left-0 w-auto h-full opacity-30" viewBox="0 0 150 150" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M0 0h50v50H0z"></path><path d="M0 0h50v50H0z"></path></defs><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="matrix(-1 0 0 1 150 0)"><g transform="translate(0 25)" fill="#93FFFD" fill-rule="nonzero"><path d="M25 0C11.193 0 0 11.193 0 25h50C50 11.193 38.807 0 25 0z"></path></g><path d="M25 50C11.193 50 0 38.807 0 25S11.193 0 25 0h25v50H25z" transform="translate(100)" fill="#DEB9FF"></path><g transform="translate(0 100)"><mask fill="#fff"><use xlink:href="#path-1"></use></mask><path d="M25 50C11.193 50 0 38.807 0 25S11.193 0 25 0h25v50H25z" fill="#B3EBFF" mask="url(#mask-2)"></path></g><g transform="translate(100 200)"><mask fill="#fff"><use xlink:href="#path-3"></use></mask><path d="M25 50C11.193 50 0 38.807 0 25S11.193 0 25 0h25v50H25z" fill="#93FFFD" mask="url(#mask-4)"></path></g></g></g></svg>
    </div>
    <div class="relative w-full px-8 pt-16 pb-16 ml-auto mr-auto bg-top bg-cover sm:max-w-xl md:max-w-full md:px-24 lg:px-8 lg:py-24 lg:pb-32">
        <div class="max-w-xl mb-10 ml-auto mr-auto bg-top bg-cover md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
            <p class="inline-block px-3 py-1 mb-4 text-xs font-semibold tracking-wider uppercase bg-{{ config('setting.color') }}-600 rounded-full text-{{ config('setting.color') }}-50">Featured Jobs</p>
            <div class="max-w-2xl mb-6 ml-auto mr-auto font-sans tracking-tight text-gray-900 bg-top bg-cover sm:text-4xl md:mx-auto">
                <p class="inline max-w-lg font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">Leading Employers already using job and talent.</p>
            </div>
        </div>
        <div class="grid gap-10 row-gap-8 ml-auto mr-auto sm:row-gap-10 lg:max-w-screen-lg sm:grid-cols-1 lg:grid-cols-1">
            @foreach($items as $item)
                <a href="{{ route('jobs.job', ['slug' => $item->slug]) }}" class="block border-l-4 border-transparent hover:border-{{ config(('setting.color')) }}-900 shadow-lg hover:shadow-2xl transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110">
                    <div class="px-4 py-4 sm:px-6 space-y-6">
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

                        <div class="mt-2 lg:flex lg:justify-between">
                            <div class="space-y-4 lg:flex lg:space-y-0 lg:space-x-6">
                                <p class="flex items-center text-sm text-gray-500">
                                    <!-- Heroicon name: solid/users -->
                                    <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                                    </svg>
                                    {{ $item->company->name }}
                                </p>
                                <p class="mt-2 flex items-center text-sm text-gray-500 lg:mt-0 lg:ml-6">
                                    <!-- Heroicon name: solid/location-marker -->
                                    <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                                    </svg>
                                    Remote
                                </p>
                                <p class="mt-2 flex items-center text-sm text-gray-500 lg:mt-0 lg:ml-6">
                                    <!-- Heroicon name: solid/location-marker -->
                                    <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                                    </svg>
                                    $115,000 – $135,000 USD
                                </p>
                                <p class="mt-2 flex items-center text-sm text-gray-500 lg:mt-0 lg:ml-6">
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
                            <div class="mt-2 hidden lg:flex items-center text-sm text-gray-500 lg:mt-0">
                                <!-- Heroicon name: solid/calendar -->
                                <img class="w-10 h-10 bg-gray-300 rounded-full flex-shrink-0" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>
