<!DOCTYPE html>
<html
    lang="{{ str_replace('_', '-', app()->getLocale()) }}"
    class="scroll-smooth"
>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>
            Nyugat-Dunántúli Regionális Hulladékgazdálkodási Önkormányzati
            Társulás
        </title>
        <!-- tailwind -->
        <script src="https://cdn.tailwindcss.com"></script>
        @vite('resources/css/app.css')
        <!-- fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap"
            rel="stylesheet"
        />
        <!-- fontawasome -->
        <script
            src="https://kit.fontawesome.com/6febbd9845.js"
            crossorigin="anonymous"
        ></script>
        <!-- style -->
        <link rel="stylesheet" href="{{ asset('./css/style.css') }}" />
    </head>
    <body>
        <div
            class="px-2 py-3 bg-white border-zinc-400 border-b-2 dark:bg-zinc-800 dark:border-zinc-700"
        >
            <div
                class=" main-container flex flex-wrap items-center justify-between mx-auto"
            >
                <div class="flex items-center gap-5">
                    <a href="https://www.facebook.com/hulladekgazd" target="___blank" class="text-gray-300 hover:text-emerald-500">
                        <i
                            class="fa-brands fa-facebook-f fa-lg ease-in duration-200"
                        ></i>
                    </a>
                    <a href="" class="text-gray-300 hover:text-emerald-500">
                        <i
                            class="fa-brands fa-instagram fa-lg ease-in duration-200"
                        ></i>
                    </a>
                    <a href="" class="text-gray-300 hover:text-emerald-500">
                        <i
                            class="fa-brands fa-linkedin fa-lg ease-in duration-200"
                        ></i>
                    </a>
                </div>
                <div class="flex items-center gap-8">
                    <a href="" class="flex items-center">
                        <i
                            class="fa-solid fa-mobile fa-lg text-gray-400 hover:text-emerald-400 ease-in duration-200"
                        ></i>
                        <p
                            class="text-white ml-3 hover:text-emerald-400 ease-in duration-200"
                        >
                            +36/94 316 850
                        </p>
                    </a>
                    <a href="" class="flex items-center">
                        <i
                            class="fa-solid fa-envelope fa-lg text-gray-400 hover:text-emerald-400 ease-in duration-200"
                        ></i>
                        <p
                            class="text-white ml-3 hover:text-emerald-400 ease-in duration-200"
                        >
                            info@westhull.hu
                        </p>
                    </a>
                </div>
            </div>
        </div>
        <nav
            class="px-2 py-4 bg-white border-gray-200 dark:bg-zinc-800 dark:border-gray-700"
        >
            <div
                class=" main-container flex flex-wrap items-center justify-between mx-auto"
            >
                <a
                    href="{{ url('/') }}"
                    class="flex items-center ease-in duration-200"
                >
                    <span
                        class="self-center text-2xl font-medium whitespace-nowrap dark:text-white hover:text-emerald-500 ease-in duration-200"
                        >West</span
                    >
                    <span
                        class="self-center text-2xl font-medium whitespace-nowrap dark:text-emerald-500"
                        >hull</span
                    >
                </a>
                <button
                    data-collapse-toggle="navbar-dropdown"
                    type="button"
                    class="inline-flex items-center p-2 ml-3 text-lg text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-dropdown"
                    aria-expanded="false"
                >
                    <span class="sr-only">Open main menu</span>
                    <svg
                        class="w-6 h-6"
                        aria-hidden="true"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"
                        ></path>
                    </svg>
                </button>
                <div
                    class="hidden w-full md:block md:w-auto"
                    id="navbar-dropdown"
                >
                    <ul
                        class="flex flex-col py-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:dark:bg-zinc-800 md:dark:dark:bg-zinc-800 dark:border-gray-700"
                    >
                        <li>
                            <a
                                href="{{ url('/')}}"
                                class="block py-2 pl-3 pr-4 text-gray-700 text-lg rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent ease-in duration-200"
                                >Kezdőlap</a
                            >
                        </li>
                        <li>
                            <button
                                id="dropdownNavbarLink"
                                data-dropdown-toggle="dropdownNavbar"
                                class="flex items-center justify-between w-full py-2 pl-3 pr-4 font-medium text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-emerald-400 md:p-0 md:w-auto dark:text-gray-400 dark:hover:text-emerald-400 dark:focus:text-emerald-400 dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent text-lg ease-in duration-200"
                            >
                                Projektről
                                <svg
                                    class="w-5 h-5 ml-1"
                                    aria-hidden="true"
                                    fill="currentColor"
                                    viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"
                                    ></path>
                                </svg>
                            </button>
                            <!-- Dropdown menu -->
                            <div
                                id="dropdownNavbar"
                                class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-64 dark:bg-zinc-700 dark:divide-gray-600"
                            >
                                <ul
                                    class="py-2 text-sm text-gray-700 dark:text-gray-300"
                                    aria-labelledby="dropdownLargeButton"
                                >
                                    <li>
                                        <a
                                            href="{{ url('KEOP_7.1.1.1')}}"
                                            class="block px-4 py-2 hover:bg-emerald-500 dark:hover:bg-gray-600 dark:hover:text-white ease-in duration-200"
                                            >KEOP 7.1.1.1</a
                                        >
                                    </li>
                                    <li>
                                        <a
                                            href="{{ url('KEOP_1.1.1_2F_09-11-2012-0001')}}"
                                            class="block px-4 py-2 hover:bg-emerald-500 dark:hover:bg-gray-600 dark:hover:text-white ease-in duration-200"
                                            >KEOP 1.1.1/2F/09-11-2012-0001</a
                                        >
                                    </li>
                                    <li>
                                        <a
                                            href="{{ url('KEOP-2.3.0_2008-0006')}}"
                                            class="block px-4 py-2 hover:bg-emerald-500 dark:hover:bg-gray-600 dark:hover:text-white ease-in duration-200"
                                            >KEOP-2.3.0/2008-0006</a
                                        >
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="flex items-center py-2 pl-3 pr-4 text-gray-700 text-lg rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent ease-in duration-200" type="button">Társulásról<svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
                            <!-- Dropdown menu -->
                            <div id="dropdown" class="z-10 w-max hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-zinc-700 dark:divide-gray-600">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-300" aria-labelledby="dropdownDefaultButton">
                                <li>
                                    <a href="{{ url('/tarsulas') }}" class="block px-4 py-2 hover:bg-emerald-500 dark:hover:bg-gray-600 dark:hover:text-white ease-in duration-200">A Társulás</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-emerald-500 dark:hover:bg-gray-600 dark:hover:text-white ease-in duration-200">Társulási tanács ülések</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-emerald-500 dark:hover:bg-gray-600 dark:hover:text-white ease-in duration-200">Költségvetés</a>
                                </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a
                                href="{{ url('/kozbeszerzes') }}"
                                class="block py-2 pl-3 pr-4 text-gray-700 text-lg rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent ease-in duration-200"
                                >Közbeszerzés</a
                            >
                        </li>
                        <li>
                            <a
                                href="#"
                                class="block py-2 pl-3 pr-4 text-gray-700 text-lg rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent ease-in duration-200"
                                >Aktuális</a
                            >
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main>@yield('content')</main>

        <footer
            class="px-2 py-3 bg-white border-zinc-400 border-b-2 dark:bg-zinc-800 dark:border-zinc-700"
        >
            <div
                class=" main-container flex flex-col gap-4 items-center mx-auto py-16 dark:bg-zinc-800 dark:border-zinc-700"
            >
                <div class="grid grid-cols-4 gap-20 text-zinc-400">
                    <div class="flex flex-col gap-2">
                        <p class="font-bold text-2xl mb-5">Westhull</p>
                        <p>9700 Szombathely, <br> Kossuth Lajos utca 1-3.</p>
                    </div>
                    <div class="flex flex-col gap-2">
                        <p class="font-bold text-2xl mb-5">Cég</p>
                        <a href="">Általános szerződési feltételek</a>
                        <a href="">Adatvédelmi irányelvek</a>
                        <a href="">Támogatás</a>
                        <a href="">Információ</a>
                    </div>
                    <div class="flex flex-col gap-2">
                        <p class="font-bold text-2xl mb-5">Gyorslinkek</p>
                        <a href="">Kezdőlap</a>
                        <a href="">Hírek</a>
                        <a href="">Fotók - Fotótár</a>
                        <a href="">Média</a>
                    </div>
                    <div class="flex flex-col gap-2">
                        <p class="font-bold text-2xl mb-5">Kapcsolat</p>
                        <a href="">info@westhull.hu</a>
                        <a href="">+36/94 316 850</a>
                    </div>
                </div>
            </div>
            <div class="border-stone-700 border-t border-dotted">
                <div
                    class=" main-container mx-auto pt-6 pb-3 dark:bg-zinc-800 dark:border-zinc-700"
                >
                    <p class="text-gray-500 text-lg text-center">
                        2023 &copy; Copyright Készítette:
                        <span class="text-emerald-400">
                        <a href=""> webbees </span></a> 
                    </p>
                </div>
            </div>
        </footer>

        <script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>
    </body>
</html>
