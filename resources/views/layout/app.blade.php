<!DOCTYPE html>
<html
    lang="{{ str_replace('_', '-', app()->getLocale()) }}"
    class="scroll-smooth"
>
    <head>
        {{-- meta tagek --}}
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="keywords" content="hulladékgazdálkodás, önkormányzati, társulás, Nyugat-Dunántúli Regionális Hulladékgazdálkodási Önkormányzati Társulás">
        <meta name="Description" content="hulladékgazdálkodás, önkormányzati, társulás, Nyugat-Dunántúli Regionális Hulladékgazdálkodási Önkormányzati Társulás">
        {{-- title --}}
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
            class="px-2 py-3 bg-white border-zinc-400 border-b-2 bg-zinc-800 border-zinc-700 w-full"
        >
            <div
                class="xl:w-128 gap-4 flex flex-wrap items-center justify-between max-[1280px]:mx-3 xl:mx-auto"
            >
                <div class="flex items-center gap-5">
                    <a href="https://www.facebook.com/hulladekgazd" target="___blank" class="text-gray-300 hover:text-emerald-500">
                        <i
                            class="fa-brands fa-facebook-f fa-lg ease-in duration-200"
                        ></i>
                    </a>
                    <a href="" class="text-gray-300 hover:text-emerald-500">
                        <i
                            class="fa-brands fa-linkedin fa-lg ease-in duration-200"
                        ></i>
                    </a>
                </div>
                <div class="flex items-center gap-8 max-[440px]:gap-4">
                    <a href="tel:+3694316850" class="flex items-center">
                        <i
                            class="fa-solid fa-mobile fa-lg text-gray-300 hover:text-emerald-400 ease-in duration-200"
                        ></i>
                        <p
                            class="text-white ml-3 hover:text-emerald-400 ease-in duration-200 max-[500px]:hidden"
                        >
                            +36/94 316 850
                        </p>
                    </a>
                    <a href="mailto: info@westhull.hu" class="flex items-center">
                        <i
                            class="fa-solid fa-envelope fa-lg text-gray-300 hover:text-emerald-400 ease-in duration-200"
                        ></i>
                        <p
                            class="text-white ml-3 hover:text-emerald-400 ease-in duration-200 max-[500px]:hidden"
                        >
                            info@westhull.hu
                        </p>
                    </a>
                </div>
            </div>
        </div>
        
        <div
        class="px-2 py-3 bg-white border-zinc-400 border-b-2 bg-zinc-800 border-zinc-700 w-full"
    >
        <nav class="border-zinc-400 bg-zinc-800 border-gray-700 xl:mx-auto xl:w-128 max-[1280px]:mx-3">
            <div class="container flex flex-wrap items-center justify-between">
              <a href="{{ url('/') }}" class="flex items-center">
                  <img class="w-20" src="{{asset('./img/main/logo-main.png')}}" alt="">
              </a>
              <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 text-sm text-zinc-500 rounded-lg md:hidden hover:bg-zinc-600 focus:outline-none focus:ring-2 focus:ring-zinc-600" aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
              </button>
              <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul class="flex flex-col text-lg py-4 mt-4 border border-zinc-600 rounded-lg bg-zinc-800 md:flex-row md:space-x-8 md:mt-0 md:font-medium md:border-0">
                    <li>
                        <a
                            href="{{ url('/') }}"
                            class="block py-2 pl-3 pr-4 text-lg rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 text-gray-300 md:hover:text-emerald-500 hover:bg-gray-700 hover:text-emerald-500 md:hover:bg-transparent ease-in duration-200"
                            >Kezdőlap</a
                        >
                    </li>
                    <li>
                        <button
                            id="dropdownNavbarLink"
                            data-dropdown-toggle="dropdownNavbar"
                            class="flex items-center justify-between w-full py-2 pl-3 pr-4 font-medium rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-emerald-400 md:p-0 md:w-auto text-gray-300 hover:text-emerald-400 focus:text-emerald-400 border-gray-700 hover:bg-gray-700 md:hover:bg-transparent text-lg ease-in duration-200"
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
                            class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-64 bg-zinc-700 divide-gray-600"
                        >
                            <ul
                                class="py-2 text-sm text-gray-300"
                                aria-labelledby="dropdownLargeButton"
                            >
                                <li>
                                    <a
                                        href="{{ url('KEOP_7.1.1.1')}}"
                                        class="block px-4 py-2 hover:bg-emerald-500 hover:bg-gray-600 hover:text-emerald-500 ease-in duration-200"
                                        >KEOP 7.1.1.1</a
                                    >
                                </li>
                                <li>
                                    <a
                                        href="{{ url('KEOP_1.1.1_2F_09-11-2012-0001')}}"
                                        class="block px-4 py-2 hover:bg-emerald-500 hover:bg-gray-600 hover:text-emerald-500 ease-in duration-200"
                                        >KEOP 1.1.1/2F/09-11-2012-0001</a
                                    >
                                </li>
                                <li>
                                    <a
                                        href="{{ url('KEOP-2.3.0_2008-0006')}}"
                                        class="block px-4 py-2 hover:bg-emerald-500 hover:bg-gray-600 hover:text-emerald-500 ease-in duration-200"
                                        >KEOP-2.3.0/2008-0006</a
                                    >
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="flex items-center justify-between w-full py-2 pl-3 pr-4 font-medium rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-emerald-400 md:p-0 md:w-auto text-gray-300 hover:text-emerald-400 focus:text-emerald-400 border-gray-700 hover:bg-gray-700 md:hover:bg-transparent text-lg ease-in duration-200" type="button">Társulásról<svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
                        <!-- Dropdown menu -->
                        <div id="dropdown" class="z-10 w-max hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 bg-zinc-700 divide-gray-600">
                            <ul class="py-2 text-sm text-gray-300" aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="{{ url('/tarsulas') }}" class="block px-4 py-2 hover:bg-emerald-500 hover:bg-gray-600 hover:text-emerald-500 ease-in duration-200">A Társulás</a>
                            </li>
                            <li>
                                <a href="{{ url('/tanacs-ulesek') }}" class="block px-4 py-2 hover:bg-emerald-500 hover:bg-gray-600 hover:text-emerald-500 ease-in duration-200">Társulási tanács ülések</a>
                            </li>
                            <li>
                                <a href="{{ url('/tarsulas-koltsegvetes') }}" class="block px-4 py-2 hover:bg-emerald-500 hover:bg-gray-600 hover:text-emerald-500 ease-in duration-200">Költségvetés</a>
                            </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a
                            href="{{ url('/kozbeszerzes') }}"
                            class="block py-2 pl-3 pr-4 text-lg rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 text-gray-300 md:hover:text-emerald-500 hover:bg-gray-700 hover:text-emerald-500 md:hover:bg-transparent ease-in duration-200"
                            >Közbeszerzés</a
                        >
                    </li>
                    <li>
                        <a
                            href="{{ url('/aktualis') }}"
                            class="block py-2 pl-3 pr-4 text-lg rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 text-gray-300 md:hover:text-emerald-500 hover:bg-gray-700 hover:text-emerald-500 md:hover:bg-transparent ease-in duration-200"
                            >Aktuális</a
                        >
                    </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>

        <main>@yield('content')</main>

        <footer
            class="px-2 py-3 bg-white border-zinc-400 border-b-2 bg-zinc-800 border-zinc-700"
        >
            <div
                class="xl:w-128 mx-auto py-16 bg-zinc-800 xl:pl-0 border-zinc-700 grid grid-cols-4 text-zinc-400 gap-0 max-[1000px]:gap-10 max-[1000px]:grid-cols-2 max-[550px]:grid-cols-1 max-[550px]:text-center"
            >
                    <div class="flex flex-col gap-2">
                        <p class="font-bold text-2xl mb-5">Westhull</p>
                        <p>9700 Szombathely, <br> Kossuth Lajos utca 1-3.</p>
                    </div>
                    <div class="flex flex-col gap-2">
                        <p class="font-bold text-2xl mb-5">Kapcsolat</p>
                        <a href="mailto: info@westhull.hu" class="hover:text-zinc-300">info@westhull.hu</a>
                        <a href="tel:+3694316850" class="hover:text-zinc-300">+36/94 316 850</a>
                    </div>
                    
                        <div class="flex flex-col gap-2">
                            <p class="font-bold text-2xl mb-5">Gyorslinkek</p>
                            <a href="{{ url('/') }}" class="hover:text-zinc-300">Kezdőlap</a>
                            <a href="{{ url('/tarsulas') }}" class="hover:text-zinc-300">A Társulás</a>
                            <a href="{{ url('/kozbeszerzes') }}" class="hover:text-zinc-300">Közbeszerzés</a>
                            <a href="{{ url('/aktualis') }}" class="hover:text-zinc-300">Média</a>
                        </div>
                    
                    <div class="flex flex-col gap-2 pr-10 max-[550px]:px-2">
                    <a class="font-bold text-2xl mb-5" href="{{ url('/aktualis') }}">Fotók</a>
                        <div class="grid grid-cols-2 gap-5">
                            <a href="{{ url('/aktualis') }}"><img class="rounded-xl shadow-xl" src="{{asset('./img/fototar/fototar-6.jpg')}}" alt=""></a>
                            <a href="{{ url('/aktualis') }}"><img class="rounded-xl shadow-xl" src="{{asset('./img/fototar/fototar-5.jpg')}}" alt=""></a>
                            <a href="{{ url('/aktualis') }}"><img class="rounded-xl shadow-xl" src="{{asset('./img/fototar/fototar-2.jpg')}}" alt=""></a>
                            <a href="{{ url('/aktualis') }}"><img class="rounded-xl shadow-xl" src="{{asset('./img/fototar/fototar-3.jpg')}}" alt=""></a>
                        </div>
                    </div>
                    
            </div>
            <div class="border-stone-700 border-t border-dotted">
                <div
                    class="mx-auto pt-6 pb-3 bg-zinc-800 border-zinc-700"
                >
                    <p class="text-gray-500 text-lg text-center">
                        2023 &copy; Copyright Készítette:
                        <span class="text-emerald-400">
                        <a href="https://webbees.hu" target="__blank" class="hover:text-emerald-300"> webbees </span></a> 
                    </p>
                </div>
            </div>
        </footer> 

        <button onclick="topFunction()" id="myBtn"><i class="fa-solid fa-circle-chevron-up text-6xl max-[700px]:text-4xl text-emerald-400 hover:text-emerald-300 ease-in duration-100"></i></button>

        {{-- flowbite --}}
        <script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>
        {{-- jquery --}}
        <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
        <script src="{{asset('./js/dropdown.js')}}"></script>
        <script src="{{asset('./js/top.js')}}"></script>
    </body>
</html>
