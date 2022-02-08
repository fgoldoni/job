<section class="py-12 sm:py-16">
    <div class="max-w-7xl px-10 mx-auto sm:text-center">
        <h2 class="font-bold text-3xl sm:text-4xl lg:text-5xl mt-3">Popular Categories</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10 my-12 sm:my-16">
            @foreach($items as $item)
                <a href="{{ route('jobs') }}">
                    <div class="cursor-pointer rounded-lg py-10 flex flex-col items-center justify-center group shadow-md hover:shadow-2xl border border-gray-100 transition-all duration-1000 delay-50 ease-in-out transform hover:-translate-y-2 hover:scale-110">
                        <span class="flex p-2 rounded-full bg-{{ config('setting.color') }}-200">
                             <svg xmlns="http://www.w3.org/2000/svg" class="h-auto w-16 text-black hover:text-{{ config('setting.color') }}-900" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M12 14l9-5-9-5-9 5 9 5z" />
                                <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                            </svg>
                        </span>

                        <p class="font-bold mt-4">{{ $item->name }}</p>
                        <p class="mt-2 text-sm text-{{ config('setting.color') }}-500">({{ $item->jobs->count() }} open positions)</p>
                    </div>
                </a>
            @endforeach
        </div>
        <a href="#_" class="px-8 py-4 sm:w-auto w-full text-center text-base font-medium inline-block rounded text-white hover:bg-{{ config('setting.color') }}-600 bg-{{ config('setting.color') }}-500">View All Integrations</a>
    </div>
</section>
