@extends('layouts.app')

@section('content')


    <!-- Section 1 -->
    <section class="relative" style="background-image: url('https://cdn.devdojo.com/images/february2021/directory-bg.jpg')">
        <div class="absolute inset-0 bg-gradient-to-b from-{{ config('setting.color') }}-900 to-transparent opacity-50"></div>

        <div class="relative z-20 px-4 py-24 mx-auto text-center text-white max-w-7xl lg:py-32">
            <div class="flex flex-wrap text-white">
                <div class="relative w-full px-4 mx-auto text-center xl:flex-grow-0 xl:flex-shrink-0">

                    <h1 class="mt-0 mb-2 text-3xl font-bold text-white sm:text-5xl lg:text-7xl">Find  <x-typing-effect></x-typing-effect> </h1>
                    <p class="mt-0 mb-4 text-base text-white sm:text-lg lg:text-xl">
                        Your job search starts and ends with us.
                    </p>

                </div>
            </div>
        </div>

        <div class="relative z-30 h-48 px-10 bg-gray-50 lg:h-32">
            <form onsubmit="return false;" class="flex flex-col items-center h-auto max-w-lg p-6 mx-auto space-y-3 overflow-hidden transform -translate-y-12 bg-white rounded-lg shadow-md lg:h-24 lg:max-w-6xl lg:flex-row lg:space-y-0 lg:space-x-3">
                <div class="w-full h-12 border-2 border-gray-200 rounded-lg lg:border-0 lg:w-auto lg:flex-1">
                    <input type="text" class="w-full h-full px-4 font-medium text-gray-700 rounded-lg sm:text-lg focus:bg-gray-50 focus:outline-none" placeholder="What Are You Searching For?">
                </div>
                <div class="w-0.5 bg-gray-100 h-10 lg:block hidden"></div>
                <div class="relative flex items-center w-full h-12 border-2 border-gray-200 rounded-lg lg:w-auto lg:border-0 lg:flex-1">
                    <input type="text" class="w-full h-full px-4 font-medium text-gray-700 rounded-lg sm:text-lg focus:bg-gray-50 focus:outline-none" placeholder="Location?">
                    <svg class="absolute right-0 w-6 h-6 mr-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                </div>
                <div class="w-full h-full lg:w-auto">
                    <button type="submit" class="inline-flex items-center justify-center w-full h-full px-4 py-2 text-base font-medium leading-6 text-white whitespace-no-wrap bg-{{ config('setting.color') }}-600 border border-transparent rounded-md shadow-lg hover:bg-{{ config('setting.color') }}-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-{{ config('setting.color') }}-600 lg:w-64 transition">SEARCH</button>
                </div>
            </form>
        </div>

    </section>

    <!-- Section 2 -->
    <section class="bg-white pt-7 pb-14">
        <div class="container px-8 mx-auto sm:px-12 lg:px-20">
            <h1 class="text-sm font-bold tracking-wide text-center text-gray-800 uppercase mb-7">Trusted by top-leading companies.</h1>
            <div class="flex grid items-center justify-center grid-cols-4 grid-cols-12 gap-y-8">
                <div class="flex items-center justify-center col-span-6 sm:col-span-4 md:col-span-3 xl:col-span-2">
                    <img src="https://cdn.devdojo.com/tails/images/disney-plus.svg" alt="Disney Plus" class="block object-contain h-12">
                </div>
                <div class="flex items-center justify-center col-span-6 sm:col-span-4 md:col-span-3 xl:col-span-2">
                    <img src="https://cdn.devdojo.com/tails/images/google.svg" alt="Google" class="block object-contain h-9">
                </div>
                <div class="flex items-center justify-center col-span-6 sm:col-span-4 md:col-span-3 xl:col-span-2">
                    <img src="https://cdn.devdojo.com/tails/images/hubspot.svg" alt="Hubspot" class="block object-contain h-9">
                </div>
                <div class="flex items-center justify-center col-span-6 sm:col-span-4 md:col-span-3 xl:col-span-2">
                    <img src="https://cdn.devdojo.com/tails/images/youtube.svg" alt="Youtube" class="block object-contain h-7 lg:h-8">
                </div>
                <div class="flex items-center justify-center col-span-6 sm:col-span-4 md:col-span-6 xl:col-span-2">
                    <img src="https://cdn.devdojo.com/tails/images/slack.svg" alt="Slack" class="block object-contain h-9">
                </div>
                <div class="flex items-center justify-center col-span-6 sm:col-span-4 md:col-span-6 xl:col-span-2">
                    <img src="https://cdn.devdojo.com/tails/images/shopify.svg" alt="Shopify" class="block object-contain h-9">
                </div>
            </div>
        </div>
    </section>

    <!-- Section 3 -->
    <x-home.popular-categories></x-home.popular-categories>


    <!-- Section 1 -->
    <section class="w-full flex bg-gray-50">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
            <div class="text-center space-y-5">
                <h2 class="text-base font-semibold text-pink-400 tracking-wide uppercase">Get started today</h2>
                <div class="inline-flex items-end justify-center w-full text-center mx-auto">
                    <img src="https://cdn.devdojo.com/tails/avatars/067.jpg" class="absolute transform translate-x-24 ml-6 rounded-full w-12 h-12 md:w-16 md:h-16 border-4 border-white">
                    <img src="https://cdn.devdojo.com/tails/avatars/019.jpg" class="absolute transform -translate-x-24 -ml-6 rounded-full w-12 h-12 md:w-16 md:h-16 border-4 border-white">
                    <img src="https://cdn.devdojo.com/tails/avatars/036.jpg" class="absolute transform -translate-x-16 rounded-full w-16 h-16 md:w-20 md:h-20 border-4 border-white">
                    <img src="https://cdn.devdojo.com/tails/avatars/008.jpg" class="absolute transform translate-x-16 rounded-full w-16 h-16 md:w-20 md:h-20 border-4 border-white">
                    <img src="https://cdn.devdojo.com/tails/avatars/003.jpg" class="rounded-full w-20 h-20 md:w-24 md:h-24 border-4 border-white relative">
                </div>
                <p class="mt-1 text-4xl font-extrabold text-gray-900 sm:text-5xl sm:tracking-tight lg:text-6xl">Make a Difference with Your Online
                    <span class="px-2 py-1 relative inline-block">
                        <svg class="stroke-current bottom-0 absolute text-{{ config('setting.color') }}-400 -translate-x-2" viewBox="0 0 410 18" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 6.4c16.8 16.8 380.8-11.2 397.6 5.602" stroke-width="11.2" fill="none" fill-rule="evenodd" stroke-linecap="round"></path>
                        </svg>
                        <span class="relative">Resume!</span>
                    </span>
                </p>
                <p class="max-w-3xl mt-5 mx-auto text-xl text-gray-500">Your resume in minutes with JobHunt resume assistant is ready!</p>
                <a href="#_" class="text-white px-8 py-4 inline-block mt-5 font-medium text-lg hover:bg-{{ config('setting.color') }}-600 bg-{{ config('setting.color') }}-500 rounded">Create an Account</a>
            </div>
        </div>
    </section>


    <!-- Section 1 -->
    <x-home.latest-jobs></x-home.latest-jobs>



    <!-- Section 4 -->
    <section class="pt-16 pb-20 sm:pt-24 sm:pb-32 bg-gray-50">
        <div class="items-center max-w-6xl px-12 mx-auto sm:px-20 md:px-5">
            <div class="flex flex-wrap items-center -mx-3">
                <div class="order-1 w-full px-3 lg:w-1/2 lg:order-0">
                    <div class="w-full max-w-md xl:max-w-xl">
                        <h2 class="relative mb-6 text-3xl font-semibold leading-tight tracking-tight xl:font-bold lg:text-6xl xl:text-7xl">
                            Beautiful designs that help you look pretty.
                        </h2>
                        <ul>
                            <li class="flex items-center py-2 space-x-4 xl:py-3">
                                <img src="https://cdn.devdojo.com/images/february2021/checkmark.png" class="w-4 h-4">
                                <span class="font-medium font-bold text-gray-700">Automated Workflows</span>
                            </li>
                            <li class="flex items-center py-2 space-x-4 xl:py-3">
                                <img src="https://cdn.devdojo.com/images/february2021/checkmark.png" class="w-4 h-4">
                                <span class="font-medium font-bold text-gray-700">Drag'n Drop Interface</span>
                            </li>
                            <li class="flex items-center py-2 space-x-4 xl:py-3">
                                <img src="https://cdn.devdojo.com/images/february2021/checkmark.png" class="w-4 h-4">
                                <span class="font-medium font-bold text-gray-700">Unlimited API Calls</span>
                            </li>
                            <li class="flex items-center py-2 space-x-4 xl:py-3">
                                <img src="https://cdn.devdojo.com/images/february2021/checkmark.png" class="w-4 h-4">
                                <span class="font-medium font-bold text-gray-700">24/7 Customer Support</span>
                            </li>
                            <li class="flex items-center py-2 space-x-4 xl:py-3">
                                <img src="https://cdn.devdojo.com/images/february2021/checkmark.png" class="w-4 h-4">
                                <span class="font-medium font-bold text-gray-700">99.9% Uptime</span>
                            </li>
                            <li class="flex items-center py-2 space-x-4 xl:py-3">
                                <img src="https://cdn.devdojo.com/images/february2021/checkmark.png" class="w-4 h-4">
                                <span class="font-medium font-bold text-gray-700">Analytics Dashboard</span>
                            </li>

                            <li class="flex items-center py-2 space-x-4 xl:py-3">
                                <img src="https://cdn.devdojo.com/images/february2021/checkmark.png" class="w-4 h-4">
                                <span class="font-medium font-bold text-gray-700">Fully Customizable</span>
                            </li>

                            <li class="flex items-center py-2 space-x-4 xl:py-3">
                                <img src="https://cdn.devdojo.com/images/february2021/checkmark.png" class="w-4 h-4">
                                <span class="font-medium font-bold text-gray-700">Seamless Integrations</span>
                            </li>

                            <li class="flex items-center py-2 space-x-4 xl:py-3">
                                <img src="https://cdn.devdojo.com/images/february2021/checkmark.png" class="w-4 h-4">
                                <span class="font-medium font-bold text-gray-700">So Much More!</span>
                            </li>


                        </ul>
                    </div>
                </div>
                <div class="relative w-full px-3 mb-12 lg:-ml-20 lg:w-1/2 order-0 lg:order-1 lg:mb-0">
                    <img class="absolute top-0 right-0 z-10 hidden mx-auto -mt-32 rounded-lg shadow-2xl opacity-100 xl:-mr-12 sm:max-w-xs lg:max-w-sm lg:block" src="https://cdn.devdojo.com/images/february2021/sky-bg.jpg">
                    <img class="relative z-20 w-full mx-auto mt-3 rounded-lg shadow-2xl sm:max-w-none lg:-ml-10 lg:max-w-sm" src="https://cdn.devdojo.com/images/february2021/tesla-img.jpg" alt="feature image">
                    <img class="absolute bottom-0 right-0 z-10 hidden mx-auto -mb-48 rounded-lg shadow-2xl xl:-mr-12 sm:max-w-xs lg:max-w-sm lg:block" src="https://cdn.devdojo.com/images/february2021/bg-colorful1.jpg">
                </div>
            </div>
        </div>
    </section>


    <!-- Section 1 -->
    <section class="w-full py-12 sm:py-20" x-data="{ page: 1, total_pages: 3 }">
        <div class="flex flex-col items-center justify-center mx-auto xl:flex-row max-w-7xl">
            <div class="relative flex flex-col items-start justify-center w-full h-full max-w-2xl px-6 mx-auto xl:max-w-none xl:w-2/5">

                <h2 class="text-3xl font-normal leading-none text-gray-900 sm:w-4/5 sm:text-6xl text-3">New stories from the team.</h2>
                <div class="w-20 h-1 mt-3 ml-1 bg-{{ config(('setting.color')) }}-600 rounded-full"></div>
                <div class="relative flex mt-6 space-x-2">
                    <div @click="if(page > 1){ page-=1 }" class="flex items-center justify-center w-10 h-10 text-white bg-indigo-600 rounded cursor-pointer hover:bg-indigo-600">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                    </div>
                    <div @click="if(page < total_pages){ page+=1 }" class="flex items-center justify-center w-10 h-10 text-white bg-indigo-600 rounded cursor-pointer hover:bg-indigo-600">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </div>
                </div>
                <svg class="absolute top-0 right-0 hidden w-auto h-24 mt-20 text-indigo-600 fill-current sm:block xl:mr-5 xl:-mt-24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 180 74"><defs></defs><g fill-rule="nonzero"><path d="M43.13 71.58c.29-.025.58-.025.87 0 .3 0 .71-.14 1-.17.54 0 1.08-.19 1.62-.23l2.3-.17 4.65-.25 6.47-.26h.68c3-.15 6-.3 9-.53 1.68-.14 5.83-.49 6.21-.52.63 0 4.36-.53 5-.63.25 0 1.95-.35 3.35-.58-.09-1-.55-1.77-.62-2.71-4.33.66-8.7 1.18-13 1.51-5.34.4-10.71.66-16.08 1l-7 .39c-1.4 0-2.82-.31-4.17-.26a2 2 0 00-1 .31c-.3.21-.4.16-.5.3a1.18 1.18 0 00-.12.81c.06.84.66 2.11 1.34 1.99zM106.33 62.04l.5-.23c.31-.13.72-.33 1.16-.56.88-.46 1.94-1 2.59-1.38l.56-.31a31.87 31.87 0 002.81-1.74 48.77 48.77 0 0014-13.59 38.22 38.22 0 004.34-8.87 28.9 28.9 0 001.51-9.86 31.56 31.56 0 00-3.3-13.46 23.9 23.9 0 00-3.62-5.22 20.47 20.47 0 00-2.38-2.22c-.42-.34-.89-.63-1.33-.94a10.88 10.88 0 00-1.38-.85A18.21 18.21 0 00109.16.92c-.5.11-1 .22-1.45.33-.45.11-.88.31-1.3.47-.42.16-.86.3-1.27.49-.41.19-.8.41-1.21.61A27.71 27.71 0 0098.5 6.5l-1.51 1.42-1.59 1.84c-.51.66-1 1.36-1.44 2-.44.64-.75 1.28-1 1.78a22.66 22.66 0 00-2 5 23.44 23.44 0 00-.82 5.31 26.71 26.71 0 00.72 7c.22 1.16.65 2.26 1 3.38a33.94 33.94 0 001.41 3.21 36.93 36.93 0 008.44 10.95 47.5 47.5 0 005.77 4.43 35.5 35.5 0 0010.02 4.59 86.41 86.41 0 0010 2.09 84.59 84.59 0 0018.2.51c4.8-.31 9.33-.8 13.8-1.39 2.25-.3 4.49-.63 6.76-1l3.43-.59.83-.11a15.59 15.59 0 001.98-.25 46 46 0 014.66-.82c.69-.12 2.24-.87 2.34-1.35.06-.28-.19-.56-.15-.85.09-.65-1.16-1.47-2.06-1.25-.9.22-1.89.51-2.84.73-.95.22-2 .37-3 .62a9.82 9.82 0 00-1.16.38c-.19.06-.39.13-.58.18l-.29.08-.69.12c-3.55.62-7 1.3-10.81 1.68-5.54.53-11.42 1.31-17.15 1.37a73.61 73.61 0 01-18.84-1.81 41.54 41.54 0 01-16.81-8.06 37.32 37.32 0 01-7.9-8.78 27.1 27.1 0 01-4.12-10.8C91.25 17.6 98.76 6.5 108.89 3.76a15.83 15.83 0 0114.56 3.4 23.24 23.24 0 017.36 13.74 28.32 28.32 0 01.29 8 28.05 28.05 0 01-2.06 7.7 37.16 37.16 0 01-5 8.63 39.08 39.08 0 01-7 7l-.87.66-.14.11c-1.69 1.29-3.61 2.56-5.55 3.75a54.34 54.34 0 01-12 5.4c-.42 1-1 2.35-.6 3.17 1.18-.35 2.25-.69 3.52-1.19.8-.28 1.61-.63 2.44-1 .83-.37 1.66-.72 2.49-1.09z"></path><path d="M46.93 71a8.72 8.72 0 011.16 0c.51 0 1.48.05 2 0l8.52-.5c8.84-.54 17.78-1 26.66-2.45 2.33-.38 4.67-.8 7-1.29a56.65 56.65 0 0010.45-3.26 85.2 85.2 0 009.11-4.57 48.44 48.44 0 0014-12c.86-1 1.57-2.14 2.33-3.2s1.34-2.12 1.89-3.23a35.91 35.91 0 002.81-7.11 31.08 31.08 0 00.4-12.78 6.21 6.21 0 01-1.89 2.64 25.44 25.44 0 01-1 9.32l-.09.26a21.31 21.31 0 01-.69 2 41.94 41.94 0 01-3.72 7.43 41.78 41.78 0 01-5.3 6.63 52.72 52.72 0 01-15.45 10.61 73.71 73.71 0 01-18.17 5.41 207.23 207.23 0 01-24.09 2.59l-15.92.87a4.07 4.07 0 01-.01 2.63zM21.1 71.79a1.43 1.43 0 01-.27-1.49 2.72 2.72 0 011.81-1.54c1-.14 2.13.44 3.2.44 1.47 0 2.94-.27 4.42-.39 1-.08 1.92 0 2.86-.15a17 17 0 012.57-.11 5.7 5.7 0 001.17 0 3 3 0 011.12-.16c1 .18 1.3 2.22.71 2.91-.45.53-1.56.36-2.18.36h-2.67c-2.13.13-4.28 0-6.41.1-.91 0-1.8.24-2.7.35-.9.11-1.7.15-2.56.2a1.31 1.31 0 01-1.07-.52zM7.5 71.7a3.09 3.09 0 010-1 1.26 1.26 0 01.4-.74 2.18 2.18 0 012.16-.49 9.2 9.2 0 002.87 0 9.22 9.22 0 013.1 0 2 2 0 011.17.72c.46.6.61 1.35-.14 1.8a5.18 5.18 0 01-2.91.44c-1.34-.13-2.75.53-4.15.76a2 2 0 01-1.34-.22A2.49 2.49 0 017.5 71.7zM.01 71.57c.082-.29.2-.569.35-.83a1.91 1.91 0 013.27-.25c.54.63.61 2.26-.16 2.72a4.27 4.27 0 01-1.32.44c-1.12.1-2.05-.23-2.14-2.08z"></path></g></svg>

            </div>
            <div class="box-content relative flex items-center w-full h-auto max-w-2xl py-5 mx-auto overflow-hidden xl:w-3/5 rounded-xl bg-gradient-to-r from-transparent via-transparent to-gray-100">

                <!-- Slide Page 1 -->
                <div class="flex px-6 space-x-6 transition duration-500 ease-out transform xl:pl-6 h-94" :class="{ '-translate-x-full pr-10' : page > 1, 'relative': page == 1, 'absolute': page != 1 }">

                    <!-- story 1 -->
                    <div class="flex flex-col flex-shrink-0 w-1/2 overflow-hidden rounded-lg shadow-lg">
                        <div class="flex-shrink-0">
                            <a href="#_">
                                <img class="object-cover w-full h-32 sm:h-48" src="https://cdn.devdojo.com/images/march2021/slide-1.jpg" alt="">
                            </a>
                        </div>
                        <div class="flex flex-col justify-between flex-1 p-6 bg-white">
                            <div class="flex-1">
                                <p class="inline-block py-1 pl-10 pr-4 mb-2 -ml-10 text-xs font-medium leading-5 text-white transform -translate-y-2 bg-indigo-600 rounded">
                                    <a href="#_" class="hover:underline" rel="category">
                                        Design
                                    </a>
                                </p>
                                <a href="#_" class="block">
                                <span class="mt-2 text-base font-semibold leading-tight leading-7 text-gray-900 sm:text-xl">
                                    How to build the perfect landing page.
                                </span>
                                    <span class="block mt-3 text-xs leading-6 text-gray-500 sm:text-sm">
                                    If you want to learn the tips and tricks to building the perfect landing page you've got to follow these proven...
                                </span>
                                </a>
                            </div>
                            <div class="items-center hidden mt-6 sm:flex">
                                <div class="relative">
                                    <p class="text-xs font-medium leading-5 text-gray-500">
                                        <a href="#_" class="hover:underline">John Doe</a>
                                        <span class="mx-1">·</span><time class="ml-1">January 21, 2022</time>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- story 2 -->
                    <div class="flex flex-col flex-shrink-0 w-1/2 overflow-hidden rounded-lg shadow-lg">
                        <div class="flex-shrink-0">
                            <a href="#_">
                                <img class="object-cover w-full h-32 sm:h-48" src="https://cdn.devdojo.com/images/march2021/slide-2.jpg" alt="">
                            </a>
                        </div>
                        <div class="flex flex-col justify-between flex-1 p-6 bg-white">
                            <div class="flex-1">
                                <p class="inline-block py-1 pl-10 pr-4 mb-2 -ml-10 text-xs font-medium leading-5 text-white transform -translate-y-2 bg-indigo-600 rounded">
                                    <a href="#_" class="hover:underline" rel="category">
                                        Design
                                    </a>
                                </p>
                                <a href="#_" class="block">
                                <span class="mt-2 text-base font-semibold leading-tight leading-7 text-gray-900 sm:text-xl">
                                    How to build the perfect landing page.
                                </span>
                                    <span class="block mt-3 text-xs leading-6 text-gray-500 sm:text-sm">
                                    If you want to learn the tips and tricks to building the perfect landing page you've got to follow these proven...
                                </span>
                                </a>
                            </div>
                            <div class="items-center hidden mt-6 sm:flex">
                                <div class="relative">
                                    <p class="text-xs font-medium leading-5 text-gray-500">
                                        <a href="#_" class="hover:underline">John Doe</a>
                                        <span class="mx-1">·</span><time class="ml-1">January 21, 2022</time>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide Page 2 -->
                <div class="flex space-x-6 transition duration-500 ease-out transform h-94" :class="{ '-translate-x-full pr-10' : page > 2, 'translate-x-full' : page < 2, 'translate-x-0 ml-5' : page == 2, 'relative': page == 2, 'absolute': page != 2 }" x-cloak="">

                    <!-- story 3 -->
                    <div class="flex flex-col flex-shrink-0 w-1/2 overflow-hidden rounded-lg shadow-lg">
                        <div class="flex-shrink-0">
                            <a href="#_">
                                <img class="object-cover w-full h-32 sm:h-48" src="https://cdn.devdojo.com/images/march2021/slide-3.jpg" alt="">
                            </a>
                        </div>
                        <div class="flex flex-col justify-between flex-1 p-6 bg-white">
                            <div class="flex-1">
                                <p class="inline-block py-1 pl-10 pr-4 mb-2 -ml-10 text-xs font-medium leading-5 text-white transform -translate-y-2 bg-indigo-600 rounded">
                                    <a href="#_" class="hover:underline" rel="category">
                                        Design
                                    </a>
                                </p>
                                <a href="#_" class="block">
                                <span class="mt-2 text-base font-semibold leading-tight leading-7 text-gray-900 sm:text-xl">
                                    How to build the perfect landing page.
                                </span>
                                    <span class="block mt-3 text-xs leading-6 text-gray-500 sm:text-sm">
                                    If you want to learn the tips and tricks to building the perfect landing page you've got to follow these proven...
                                </span>
                                </a>
                            </div>
                            <div class="items-center hidden mt-6 sm:flex">
                                <div class="relative">
                                    <p class="text-xs font-medium leading-5 text-gray-500">
                                        <a href="#_" class="hover:underline">John Doe</a>
                                        <span class="mx-1">·</span><time class="ml-1">January 21, 2022</time>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- story 4 -->
                    <div class="flex flex-col flex-shrink-0 w-1/2 overflow-hidden rounded-lg shadow-lg">
                        <div class="flex-shrink-0">
                            <a href="#_">
                                <img class="object-cover w-full h-32 sm:h-48" src="https://cdn.devdojo.com/images/march2021/slide-4.jpg" alt="">
                            </a>
                        </div>
                        <div class="flex flex-col justify-between flex-1 p-6 bg-white">
                            <div class="flex-1">
                                <p class="inline-block py-1 pl-10 pr-4 mb-2 -ml-10 text-xs font-medium leading-5 text-white transform -translate-y-2 bg-indigo-600 rounded">
                                    <a href="#_" class="hover:underline" rel="category">
                                        Design
                                    </a>
                                </p>
                                <a href="#_" class="block">
                                <span class="mt-2 text-base font-semibold leading-tight leading-7 text-gray-900 sm:text-xl">
                                    How to build the perfect landing page.
                                </span>
                                    <span class="block mt-3 text-xs leading-6 text-gray-500 sm:text-sm">
                                    If you want to learn the tips and tricks to building the perfect landing page you've got to follow these proven...
                                </span>
                                </a>
                            </div>
                            <div class="items-center hidden mt-6 sm:flex">
                                <div class="relative">
                                    <p class="text-xs font-medium leading-5 text-gray-500">
                                        <a href="#_" class="hover:underline">John Doe</a>
                                        <span class="mx-1">·</span><time class="ml-1">January 21, 2022</time>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End slide page 2 -->

                <!-- Slide Page 3 -->
                <div class="flex space-x-6 transition duration-500 ease-out transform h-94" :class="{ 'translate-x-full' : page < 3, 'translate-x-0 ml-5' : page == 3, 'relative': page == 3, 'absolute': page != 3 }" x-cloak="">

                    <!-- story 5 -->
                    <div class="flex flex-col flex-shrink-0 w-1/2 overflow-hidden rounded-lg shadow-lg">
                        <div class="flex-shrink-0">
                            <a href="#_">
                                <img class="object-cover w-full h-32 sm:h-48" src="https://cdn.devdojo.com/images/march2021/slide-5.jpg" alt="">
                            </a>
                        </div>
                        <div class="flex flex-col justify-between flex-1 p-6 bg-white">
                            <div class="flex-1">
                                <p class="inline-block py-1 pl-10 pr-4 mb-2 -ml-10 text-xs font-medium leading-5 text-white transform -translate-y-2 bg-indigo-600 rounded">
                                    <a href="#_" class="hover:underline" rel="category">
                                        Design
                                    </a>
                                </p>
                                <a href="#_" class="block">
                                <span class="mt-2 text-base font-semibold leading-tight leading-7 text-gray-900 sm:text-xl">
                                    How to build the perfect landing page.
                                </span>
                                    <span class="block mt-3 text-xs leading-6 text-gray-500 sm:text-sm">
                                    If you want to learn the tips and tricks to building the perfect landing page you've got to follow these proven...
                                </span>
                                </a>
                            </div>
                            <div class="items-center hidden mt-6 sm:flex">
                                <div class="relative">
                                    <p class="text-xs font-medium leading-5 text-gray-500">
                                        <a href="#_" class="hover:underline">John Doe</a>
                                        <span class="mx-1">·</span><time class="ml-1">January 21, 2022</time>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- story 6 -->
                    <div class="flex flex-col flex-shrink-0 w-1/2 overflow-hidden rounded-lg shadow-lg">
                        <div class="flex-shrink-0">
                            <a href="#_">
                                <img class="object-cover w-full h-32 sm:h-48" src="https://cdn.devdojo.com/images/march2021/slide-6.jpg" alt="">
                            </a>
                        </div>
                        <div class="flex flex-col justify-between flex-1 p-6 bg-white">
                            <div class="flex-1">
                                <p class="inline-block py-1 pl-10 pr-4 mb-2 -ml-10 text-xs font-medium leading-5 text-white transform -translate-y-2 bg-indigo-600 rounded">
                                    <a href="#_" class="hover:underline" rel="category">
                                        Design
                                    </a>
                                </p>
                                <a href="#_" class="block">
                                <span class="mt-2 text-base font-semibold leading-tight leading-7 text-gray-900 sm:text-xl">
                                    How to build the perfect landing page.
                                </span>
                                    <span class="block mt-3 text-xs leading-6 text-gray-500 sm:text-sm">
                                    If you want to learn the tips and tricks to building the perfect landing page you've got to follow these proven...
                                </span>
                                </a>
                            </div>
                            <div class="items-center hidden mt-6 sm:flex">
                                <div class="relative">
                                    <p class="text-xs font-medium leading-5 text-gray-500">
                                        <a href="#_" class="hover:underline">John Doe</a>
                                        <span class="mx-1">·</span><time class="ml-1">January 21, 2022</time>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End slide page 3 -->

            </div>
        </div>
    </section>

    <footer class="bg-white" aria-labelledby="footer-heading">
        <h2 id="footer-heading" class="sr-only">Footer</h2>
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
            <div class="pb-8 xl:grid xl:grid-cols-5 xl:gap-8">
                <div class="grid grid-cols-2 gap-8 xl:col-span-4">
                    <div class="md:grid md:grid-cols-2 md:gap-8">
                        <div>
                            <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">Solutions</h3>
                            <ul role="list" class="mt-4 space-y-4">
                                <li>
                                    <a href="#" class="text-base text-gray-500 hover:text-gray-900"> Marketing </a>
                                </li>

                                <li>
                                    <a href="#" class="text-base text-gray-500 hover:text-gray-900"> Analytics </a>
                                </li>

                                <li>
                                    <a href="#" class="text-base text-gray-500 hover:text-gray-900"> Commerce </a>
                                </li>

                                <li>
                                    <a href="#" class="text-base text-gray-500 hover:text-gray-900"> Insights </a>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-12 md:mt-0">
                            <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">Support</h3>
                            <ul role="list" class="mt-4 space-y-4">
                                <li>
                                    <a href="#" class="text-base text-gray-500 hover:text-gray-900"> Pricing </a>
                                </li>

                                <li>
                                    <a href="#" class="text-base text-gray-500 hover:text-gray-900"> Documentation </a>
                                </li>

                                <li>
                                    <a href="#" class="text-base text-gray-500 hover:text-gray-900"> Guides </a>
                                </li>

                                <li>
                                    <a href="#" class="text-base text-gray-500 hover:text-gray-900"> API Status </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="md:grid md:grid-cols-2 md:gap-8">
                        <div>
                            <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">Company</h3>
                            <ul role="list" class="mt-4 space-y-4">
                                <li>
                                    <a href="#" class="text-base text-gray-500 hover:text-gray-900"> About </a>
                                </li>

                                <li>
                                    <a href="#" class="text-base text-gray-500 hover:text-gray-900"> Blog </a>
                                </li>

                                <li>
                                    <a href="#" class="text-base text-gray-500 hover:text-gray-900"> Jobs </a>
                                </li>

                                <li>
                                    <a href="#" class="text-base text-gray-500 hover:text-gray-900"> Press </a>
                                </li>

                                <li>
                                    <a href="#" class="text-base text-gray-500 hover:text-gray-900"> Partners </a>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-12 md:mt-0">
                            <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">Legal</h3>
                            <ul role="list" class="mt-4 space-y-4">
                                <li>
                                    <a href="#" class="text-base text-gray-500 hover:text-gray-900"> Claim </a>
                                </li>

                                <li>
                                    <a href="#" class="text-base text-gray-500 hover:text-gray-900"> Privacy </a>
                                </li>

                                <li>
                                    <a href="#" class="text-base text-gray-500 hover:text-gray-900"> Terms </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="mt-12 xl:mt-0">
                    <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">Language &amp; Currency</h3>
                    <form class="mt-4 sm:max-w-xs">
                        <fieldset class="w-full">
                            <label for="language" class="sr-only">Language</label>
                            <div class="relative">
                                <select id="language" name="language" class="appearance-none block w-full bg-none bg-white border border-gray-300 rounded-md py-2 pl-3 pr-10 text-base text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <option selected>English</option>
                                    <option>French</option>
                                    <option>German</option>
                                    <option>Japanese</option>
                                    <option>Spanish</option>
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 px-2 flex items-center">
                                    <!-- Heroicon name: solid/chevron-down -->
                                    <svg class="h-4 w-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="mt-4 w-full">
                            <label for="currency" class="sr-only">Currency</label>
                            <div class="relative">
                                <select id="currency" name="currency" class="appearance-none block w-full bg-none bg-white border border-gray-300 rounded-md py-2 pl-3 pr-10 text-base text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <option>ARS</option>
                                    <option selected>AUD</option>
                                    <option>CAD</option>
                                    <option>CHF</option>
                                    <option>EUR</option>
                                    <option>GBP</option>
                                    <option>JPY</option>
                                    <option>USD</option>
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 px-2 flex items-center">
                                    <!-- Heroicon name: solid/chevron-down -->
                                    <svg class="h-4 w-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
            <div class="border-t border-gray-200 pt-8 lg:flex lg:items-center lg:justify-between xl:mt-0">
                <div>
                    <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">Subscribe to our newsletter</h3>
                    <p class="mt-2 text-base text-gray-500">The latest news, articles, and resources, sent to your inbox weekly.</p>
                </div>
                <form class="mt-4 sm:flex sm:max-w-md lg:mt-0">
                    <label for="email-address" class="sr-only">Email address</label>
                    <input type="email" name="email-address" id="email-address" autocomplete="email" required class="appearance-none min-w-0 w-full bg-white border border-gray-300 py-2 px-4 text-base rounded-md text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:placeholder-gray-400 sm:max-w-xs" placeholder="Enter your email">
                    <div class="mt-3 rounded-md sm:mt-0 sm:ml-3 sm:flex-shrink-0">
                        <button type="submit" class="w-full bg-indigo-600 border border-transparent rounded-md py-2 px-4 flex items-center justify-center text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Subscribe</button>
                    </div>
                </form>
            </div>
            <div class="mt-8 border-t border-gray-200 pt-8 md:flex md:items-center md:justify-between">
                <div class="flex space-x-6 md:order-2">
                    <a href="#" class="text-gray-400 hover:text-gray-500">
                        <span class="sr-only">Facebook</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                        </svg>
                    </a>

                    <a href="#" class="text-gray-400 hover:text-gray-500">
                        <span class="sr-only">Instagram</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
                        </svg>
                    </a>

                    <a href="#" class="text-gray-400 hover:text-gray-500">
                        <span class="sr-only">Twitter</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                        </svg>
                    </a>

                    <a href="#" class="text-gray-400 hover:text-gray-500">
                        <span class="sr-only">GitHub</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                        </svg>
                    </a>

                    <a href="#" class="text-gray-400 hover:text-gray-500">
                        <span class="sr-only">Dribbble</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
                <p class="mt-8 text-base text-gray-400 md:mt-0 md:order-1">&copy; 2020 Workflow, Inc. All rights reserved.</p>
            </div>
        </div>
    </footer>







@endsection
