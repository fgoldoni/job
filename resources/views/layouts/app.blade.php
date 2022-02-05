@extends('layouts.base')

@section('body')
    <div class="min-h-full">
        <x-navigation-menu></x-navigation-menu>

        <div>
            @hasSection('header')
                <header>
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        @yield('header')
                    </div>
                </header>
            @endif

            <main>
                <div class="mx-auto">
                    <!-- Replace with your content -->
                    @yield('content')

                    @isset($slot)
                        {{ $slot }}
                    @endisset
                <!-- /End replace -->
                </div>
            </main>
        </div>
    </div>
@endsection
