<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>laravel_tailwindcss</title>
</head>

<body>
    <header>
        <nav class="bg-white shadow dark:bg-gray-800">
            <div class="container px-6 py-4 mx-auto">
                <div class="md:flex md:items-center md:justify-between">
                    <div class="flex items-center justify-between">
                        <div class="text-xl font-semibold text-gray-700">
                            <a class="text-2xl font-bold text-gray-800 transition-colors duration-200 transform dark:text-white lg:text-3xl hover:text-gray-700 dark:hover:text-gray-300"
                                href="#">Brand</a>
                        </div>

                        <!-- Mobile menu button -->
                        <div class="flex md:hidden">
                            <button type="button"
                                class="text-gray-500 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none focus:text-gray-600 dark:focus:text-gray-400"
                                aria-label="toggle menu">
                                <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                                    <path fill-rule="evenodd"
                                        d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z">
                                    </path>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
                    <div class="flex-1 md:flex md:items-center md:justify-between">
                        <div class="flex flex-col -mx-4 md:flex-row md:items-center md:mx-8">
                            <a href="#"
                                class="px-2 py-1 mx-2 mt-2 text-sm font-medium text-gray-700 transition-colors duration-200 transform rounded-md md:mt-0 dark:text-gray-200 hover:bg-gray-300 dark:hover:bg-gray-700">Join
                                Slack</a>
                            <a href="#"
                                class="px-2 py-1 mx-2 mt-2 text-sm font-medium text-gray-700 transition-colors duration-200 transform rounded-md md:mt-0 dark:text-gray-200 hover:bg-gray-300 dark:hover:bg-gray-700">Browse
                                Topics</a>
                            <a href="#"
                                class="px-2 py-1 mx-2 mt-2 text-sm font-medium text-gray-700 transition-colors duration-200 transform rounded-md md:mt-0 dark:text-gray-200 hover:bg-gray-300 dark:hover:bg-gray-700">Random
                                Item</a>
                            <a href="#"
                                class="px-2 py-1 mx-2 mt-2 text-sm font-medium text-gray-700 transition-colors duration-200 transform rounded-md md:mt-0 dark:text-gray-200 hover:bg-gray-300 dark:hover:bg-gray-700">Experts</a>
                        </div>

                        <div class="flex items-center mt-4 md:mt-0">
                            <button
                                class="hidden mx-4 text-gray-600 transition-colors duration-200 transform md:block dark:text-gray-200 hover:text-gray-700 dark:hover:text-gray-400 focus:text-gray-700 dark:focus:text-gray-400 focus:outline-none"
                                aria-label="show notifications">
                                <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M15 17H20L18.5951 15.5951C18.2141 15.2141 18 14.6973 18 14.1585V11C18 8.38757 16.3304 6.16509 14 5.34142V5C14 3.89543 13.1046 3 12 3C10.8954 3 10 3.89543 10 5V5.34142C7.66962 6.16509 6 8.38757 6 11V14.1585C6 14.6973 5.78595 15.2141 5.40493 15.5951L4 17H9M15 17V18C15 19.6569 13.6569 21 12 21C10.3431 21 9 19.6569 9 18V17M15 17H9"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </button>

                            <button type="button" class="flex items-center focus:outline-none"
                                aria-label="toggle profile dropdown">
                                <div class="w-8 h-8 overflow-hidden border-2 border-gray-400 rounded-full">
                                    <img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80"
                                        class="object-cover w-full h-full" alt="avatar">
                                </div>

                                <h3 class="mx-2 text-sm font-medium text-gray-700 dark:text-gray-200 md:hidden">Khatab
                                    wedaa</h3>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>

        <div class="bg-white dark:bg-gray-900">
            <div class="container px-6 py-8 mx-auto">
                <h1 class="text-3xl font-semibold text-center text-gray-800 capitalize lg:text-4xl dark:text-white">Pricing Plan</h1>

                <p class="max-w-2xl mx-auto mt-4 text-center text-gray-500 xl:mt-6 dark:text-gray-300">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias quas magni libero consequuntur voluptatum velit amet id repudiandae ea, deleniti laborum in neque eveniet.
                </p>

                <div class="grid grid-cols-1 gap-8 mt-6 xl:mt-12 xl:gap-12 md:grid-cols-2 lg:grid-cols-3">
                    <div class="w-full p-8 space-y-8 text-center border border-gray-200 rounded-lg dark:border-gray-700">
                        <p class="font-medium text-gray-500 uppercase dark:text-gray-300">Free</p>

                        <h2 class="text-5xl font-bold text-gray-800 uppercase dark:text-gray-100">
                            $0
                        </h2>

                        <p class="font-medium text-gray-500 dark:text-gray-300">Life time</p>

                        <button class="w-full px-4 py-2 mt-10 tracking-wide text-white capitalize transition-colors duration-200 transform bg-blue-600 rounded-md hover:bg-blue-500 focus:outline-none focus:bg-blue-500 focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                            Start Now
                        </button>
                    </div>

                        <div class="w-full p-8 space-y-8 text-center bg-blue-600 rounded-lg">
                        <p class="font-medium text-gray-200 uppercase">Premium</p>

                        <h2 class="text-5xl font-bold text-white uppercase dark:text-gray-100">
                            $40
                        </h2>

                        <p class="font-medium text-gray-200">Per month</p>

                        <button class="w-full px-4 py-2 mt-10 tracking-wide text-blue-500 capitalize transition-colors duration-200 transform bg-white rounded-md hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:ring focus:ring-gray-200 focus:ring-opacity-80">
                            Start Now
                        </button>
                    </div>

                        <div class="w-full p-8 space-y-8 text-center border border-gray-200 rounded-lg dark:border-gray-700">
                        <p class="font-medium text-gray-500 uppercase dark:text-gray-300">Enterprise</p>

                        <h2 class="text-5xl font-bold text-gray-800 uppercase dark:text-gray-100">
                            $100
                        </h2>

                        <p class="font-medium text-gray-500 dark:text-gray-300">Life time</p>

                        <button class="w-full px-4 py-2 mt-10 tracking-wide text-white capitalize transition-colors duration-200 transform bg-blue-600 rounded-md hover:bg-blue-500 focus:outline-none focus:bg-blue-500 focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                            Start Now
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <footer class="bg-white dark:bg-gray-800">
        <div class="container px-6 py-4 mx-auto">
            <div class="lg:flex">
                <div class="w-full -mx-6 lg:w-2/5">
                    <div class="px-6">
                        <div>
                            <a href="#"
                                class="text-xl font-bold text-gray-800 dark:text-white hover:text-gray-700 dark:hover:text-gray-300">Brand</a>
                        </div>

                        <p class="max-w-md mt-2 text-gray-500 dark:text-gray-400">Join 31,000+ other and never miss out
                            on new tips, tutorials, and more.</p>

                        <div class="flex mt-4 -mx-2">
                            <a href="#"
                                class="mx-2 text-gray-700 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400"
                                aria-label="Linkden">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 512 512">
                                    <path
                                        d="M444.17,32H70.28C49.85,32,32,46.7,32,66.89V441.61C32,461.91,49.85,480,70.28,480H444.06C464.6,480,480,461.79,480,441.61V66.89C480.12,46.7,464.6,32,444.17,32ZM170.87,405.43H106.69V205.88h64.18ZM141,175.54h-.46c-20.54,0-33.84-15.29-33.84-34.43,0-19.49,13.65-34.42,34.65-34.42s33.85,14.82,34.31,34.42C175.65,160.25,162.35,175.54,141,175.54ZM405.43,405.43H341.25V296.32c0-26.14-9.34-44-32.56-44-17.74,0-28.24,12-32.91,23.69-1.75,4.2-2.22,9.92-2.22,15.76V405.43H209.38V205.88h64.18v27.77c9.34-13.3,23.93-32.44,57.88-32.44,42.13,0,74,27.77,74,87.64Z" />
                                </svg>
                            </a>

                            <a href="#"
                                class="mx-2 text-gray-700 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400"
                                aria-label="Facebook">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 512 512">
                                    <path
                                        d="M455.27,32H56.73A24.74,24.74,0,0,0,32,56.73V455.27A24.74,24.74,0,0,0,56.73,480H256V304H202.45V240H256V189c0-57.86,40.13-89.36,91.82-89.36,24.73,0,51.33,1.86,57.51,2.68v60.43H364.15c-28.12,0-33.48,13.3-33.48,32.9V240h67l-8.75,64H330.67V480h124.6A24.74,24.74,0,0,0,480,455.27V56.73A24.74,24.74,0,0,0,455.27,32Z" />
                                </svg>
                            </a>

                            <a href="#"
                                class="mx-2 text-gray-700 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400"
                                aria-label="Twitter">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 512 512">
                                    <path
                                        d="M496,109.5a201.8,201.8,0,0,1-56.55,15.3,97.51,97.51,0,0,0,43.33-53.6,197.74,197.74,0,0,1-62.56,23.5A99.14,99.14,0,0,0,348.31,64c-54.42,0-98.46,43.4-98.46,96.9a93.21,93.21,0,0,0,2.54,22.1,280.7,280.7,0,0,1-203-101.3A95.69,95.69,0,0,0,36,130.4C36,164,53.53,193.7,80,211.1A97.5,97.5,0,0,1,35.22,199v1.2c0,47,34,86.1,79,95a100.76,100.76,0,0,1-25.94,3.4,94.38,94.38,0,0,1-18.51-1.8c12.51,38.5,48.92,66.5,92.05,67.3A199.59,199.59,0,0,1,39.5,405.6,203,203,0,0,1,16,404.2,278.68,278.68,0,0,0,166.74,448c181.36,0,280.44-147.7,280.44-275.8,0-4.2-.11-8.4-.31-12.5A198.48,198.48,0,0,0,496,109.5Z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="mt-6 lg:mt-0 lg:flex-1">
                    <div class="grid grid-cols-2 gap-6 sm:grid-cols-3 md:grid-cols-4">
                        <div>
                            <h3 class="text-gray-700 uppercase dark:text-white">About</h3>
                            <a href="#"
                                class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">Company</a>
                            <a href="#"
                                class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">community</a>
                            <a href="#"
                                class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">Careers</a>
                        </div>

                        <div>
                            <h3 class="text-gray-700 uppercase dark:text-white">Blog</h3>
                            <a href="#"
                                class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">Tec</a>
                            <a href="#"
                                class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">Music</a>
                            <a href="#"
                                class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">Videos</a>
                        </div>

                        <div>
                            <h3 class="text-gray-700 uppercase dark:text-white">Products</h3>
                            <a href="#"
                                class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">Mega
                                cloud</a>
                            <a href="#"
                                class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">Aperion
                                UI</a>
                            <a href="#"
                                class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">Meraki
                                UI</a>
                        </div>

                        <div>
                            <h3 class="text-gray-700 uppercase dark:text-white">Contact</h3>
                            <span class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">+1 526
                                654
                                8965</span>
                            <span
                                class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">example@email.com</span>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="h-px my-6 bg-gray-300 border-none dark:bg-gray-700">

            <div>
                <p class="text-center text-gray-800 dark:text-white">© Brand 2020 - All rights reserved</p>
            </div>
        </div>
    </footer>
    {{-- @vite('resources/js/app.js') --}}
</body>

</html>
