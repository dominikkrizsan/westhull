@extends('layout.app') @section('content')

{{-- inner --}}
<div class="inner">
    <div class="flex flex-col items-center justify-center h-full gap-6">
        <h2 class="text-zinc-300 text-xl">Rólunk</h2>
        <h1 class="text-zinc-300 text-6xl font-bold">A Társulás</h1>
        <div class="flex gap-4 text-xl">
            <a
                class="text-zinc-300 hover:text-zinc-100 ease-all duration-200"
                href="{{ url('/') }}"
                >Kezdőlap</a
            >
            <p class="text-zinc-300">/</p>
            <p class="text-zinc-400">Költségvetés</p>
        </div>
    </div>
</div>

<div class="px-2 py-5 bg-white dark:bg-zinc-200">
    <div class="main-container mx-auto min-h-8/12 mt-4 gap-3">
        <h1 class="font-bold text-4xl text-center">Költségvetések</h1>
        <div class="border-b border-zinc-300 w-96 mx-auto mt-4"></div>
        <div
            class="grid grid-cols-4 text-xl mt-10 justify-items-stretch align-center gap-12"
        >
            {{-- element 2022--}}
            <div class="container w-full">
                <div
                    class="header bg-emerald-600 hover:bg-emerald-500 cursor-pointer py-5 px-7 text-white text-center rounded-2xl ease-in duration-200"
                >
                    <span>2022. évi költségvetés</span>
                </div>
                <div class="content">
                    <ul
                        class="text-base flex flex-col bg-zinc-700 rounded-xl py-3 pl-5"
                    >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2022/határozat.pdf'
                                )
                            }}"
                            ><li>határozat</li></a
                        >
                        <li class="text-emerald-500 font-bold">Mellékletek</li>
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2022/3. napirend.pdf'
                                )
                            }}"
                            ><li>Napirend</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2022/3. napirend melléklete.xls'
                                )
                            }}"
                            ><li>3. napirend melléklete</li></a
                        >
                        <li class="text-emerald-500 font-bold">Módosítások</li>
                        <li class="text-emerald-500 font-bold ml-3">
                            1. számú módosítás
                        </li>
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-5"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2022/határozat_2.pdf'
                                )
                            }}"
                            ><li>határozat</li></a
                        >
                        <li class="text-emerald-500 font-bold">Mellékletek</li>
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2022/4. napirend.pdf'
                                )
                            }}"
                            ><li>4. napirend</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2022/4. napirend 1. melléklete.xls'
                                )
                            }}"
                            ><li>napirend 1. melléklete</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2022/4. napirend 2. melléklete.pdf'
                                )
                            }}"
                            ><li>napirend 2. melléklete</li></a
                        >
                    </ul>
                </div>
            </div>

            {{-- element 2021 --}}
            <div class="container w-full">
                <div
                    class="header bg-emerald-600 hover:bg-emerald-500 cursor-pointer py-5 px-7 text-white text-center rounded-2xl ease-in duration-200"
                >
                    <span>2021. évi költségvetés</span>
                </div>
                <div class="content">
                    <ul
                        class="text-base flex flex-col bg-zinc-700 rounded-xl py-3 pl-5"
                    >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2021/határozat.pdf'
                                )
                            }}"
                            ><li>határozat</li></a
                        >
                        <li class="text-emerald-500 font-bold">Mellékletek</li>
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2021/3. napirend.pdf'
                                )
                            }}"
                            ><li>Napirend</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2021/3. napirend melléklete.pdf'
                                )
                            }}"
                            ><li>3. napirend melléklete</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2021/3. napirend 1. melléklete_1.pdf'
                                )
                            }}"
                            ><li>3. napirend 1. melléklete (1)</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2021/3. napirend 1. melléklete_2.pdf'
                                )
                            }}"
                            ><li>3. napirend 1. melléklete (2)</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2021/3. napirend 1. melléklete_3.pdf'
                                )
                            }}"
                            ><li>3. napirend 1. melléklete (3)</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2021/3. napirend 1. melléklete_4.pdf'
                                )
                            }}"
                            ><li>3. napirend 1. melléklete (4)</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2021/3. napirend 1. melléklete_5.pdf'
                                )
                            }}"
                            ><li>3. napirend 1. melléklete (5)</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2021/3. napirend 1. melléklete_6.pdf'
                                )
                            }}"
                            ><li>3. napirend 1. melléklete (6)</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2021/3. napirend 1. melléklete_7.pdf'
                                )
                            }}"
                            ><li>3. napirend 1. melléklete (7)</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2021/3. napirend 1. melléklete_8.pdf'
                                )
                            }}"
                            ><li>3. napirend 1. melléklete (8)</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2021/3. napirend 1. melléklete_9.pdf'
                                )
                            }}"
                            ><li>3. napirend 1. melléklete (9)</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2021/3. napirend 1. melléklete_10.pdf'
                                )
                            }}"
                            ><li>3. napirend 1. melléklete (10)</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2021/3. napirend 1. melléklete_11.pdf'
                                )
                            }}"
                            ><li>3. napirend 1. melléklete (11)</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2021/3. napirend 1. melléklete_12.pdf'
                                )
                            }}"
                            ><li>3. napirend 1. melléklete (12)</li></a
                        >
                        <li class="text-emerald-500 font-bold">Módosítások</li>
                        <li class="text-white font-bold">1. számú módosítás</li>
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2021/határozat (1).pdf'
                                )
                            }}"
                            ><li>határozat</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2021/4. napirend.pdf'
                                )
                            }}"
                            ><li>4. napirend</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2021/napirend melléklete.pdf'
                                )
                            }}"
                            ><li>napirend melléklete</li></a
                        >
                        <li class="text-white font-bold">2. számú módosítás</li>
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2021/határozat (2).pdf'
                                )
                            }}"
                            ><li>határozat</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2021/1. napirend.pdf'
                                )
                            }}"
                            ><li>1. napirend</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2021/1. napirend 1. melléklet.pdf'
                                )
                            }}"
                            ><li>1. napirend 1. melléklete</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2021/1. napirend 2. melléklet.pdf'
                                )
                            }}"
                            ><li>1. napirend 2. melléklete</li></a
                        >
                        <li class="text-emerald-500 font-bold">2021. évi zárszámadás</li>
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2021/határozat (3).pdf'
                                )
                            }}"
                            ><li>határozat</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2021/3. napirend (1).pdf'
                                )
                            }}"
                            ><li>3. napirend</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2021/3. napirend 1. melléklet.xls'
                                )
                            }}"
                            ><li>3. napirend 1. melléklete</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2021/3. napirend 2. melléklet.pdf'
                                )
                            }}"
                            ><li>3. napirend 2. melléklete</li></a
                        >
                        
                    </ul>
                </div>
            </div>

            {{-- element 2020--}}
            <div class="container w-full">
                <div
                    class="header bg-emerald-600 hover:bg-emerald-500 cursor-pointer py-5 px-7 text-white text-center rounded-2xl ease-in duration-200"
                >
                    <span>2020. évi költségvetés</span>
                </div>
                <div class="content">
                    <ul
                        class="text-base flex flex-col bg-zinc-700 rounded-xl py-3 pl-5"
                    >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2020/határozat.pdf'
                                )
                            }}"
                            ><li>határozat</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2020/költségvetés.pdf'
                                )
                            }}"
                            ><li>1. számú melléklet</li></a
                        >
                        <li class="text-emerald-500 font-bold text-lg">Módosítások</li>
                        <li class="text-white font-bold">1. számú módosítás</li>
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2020/határozat (1).pdf'
                                )
                            }}"
                            ><li>határozat</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2020/melléklet.pdf'
                                )
                            }}"
                            ><li>1. számú melléklet</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2020/3. előterjesztés.pdf'
                                )
                            }}"
                            ><li>3. előterjesztés</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2020/3. előterjesztés melléklete.pdf'
                                )
                            }}"
                            ><li>3. előterjesztés melléklete</li></a
                        >
                        <li class="text-white font-bold">2. számú módosítás</li>
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2020/határozat (2).pdf'
                                )
                            }}"
                            ><li>határozat</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2020/1. melléklete_1.pdf'
                                )
                            }}"
                            ><li>1. számú melléklet (1)</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2020/1. melléklete_2.pdf'
                                )
                            }}"
                            ><li>1. számú melléklet (2)</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2020/1. melléklete_3.pdf'
                                )
                            }}"
                            ><li>1. számú melléklet (3)</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2020/1. melléklete_4.pdf'
                                )
                            }}"
                            ><li>1. számú melléklet (4)</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2020/1. melléklete_5.pdf'
                                )
                            }}"
                            ><li>1. számú melléklet (5)</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2020/1. melléklete_6.pdf'
                                )
                            }}"
                            ><li>1. számú melléklet (6)</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2020/1. melléklete_7.pdf'
                                )
                            }}"
                            ><li>1. számú melléklet (7)</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2020/1. melléklete_8.pdf'
                                )
                            }}"
                            ><li>1. számú melléklet (8)</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2020/1. melléklete_9.pdf'
                                )
                            }}"
                            ><li>1. számú melléklet (9)</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2020/1. melléklete_10.pdf'
                                )
                            }}"
                            ><li>1. számú melléklet (10)</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2020/1. melléklete_11.pdf'
                                )
                            }}"
                            ><li>1. számú melléklet (11)</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2020/1. melléklete_12.pdf'
                                )
                            }}"
                            ><li>1. számú melléklet (12)</li></a
                        >
                        <li class="text-white font-bold">3. számú módosítás</li>
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2020/határozat (3).pdf'
                                )
                            }}"
                            ><li>határozat</li></a
                        >
                        <li class="text-emerald-500 font-bold">Mellékletek</li>
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2020/1. melléklet_1.pdf'
                                )
                            }}"
                            ><li>1. számú melléklet (1)</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2020/1. melléklet_2.pdf'
                                )
                            }}"
                            ><li>1. számú melléklet (2)</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2020/1. melléklet_3.pdf'
                                )
                            }}"
                            ><li>1. számú melléklet (3)</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2020/1. melléklet_4.pdf'
                                )
                            }}"
                            ><li>1. számú melléklet (4)</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2020/1. melléklet_5.pdf'
                                )
                            }}"
                            ><li>1. számú melléklet (5)</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2020/1. melléklet_6.pdf'
                                )
                            }}"
                            ><li>1. számú melléklet (6)</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2020/1. melléklet_7.pdf'
                                )
                            }}"
                            ><li>1. számú melléklet (7)</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2020/1. melléklet_8.pdf'
                                )
                            }}"
                            ><li>1. számú melléklet (8)</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2020/1. melléklet_9.pdf'
                                )
                            }}"
                            ><li>1. számú melléklet (9)</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2020/1. melléklet_10.pdf'
                                )
                            }}"
                            ><li>1. számú melléklet (10)</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2020/1. melléklet_11.pdf'
                                )
                            }}"
                            ><li>1. számú melléklet (11)</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2020/1. melléklet_12.pdf'
                                )
                            }}"
                            ><li>1. számú melléklet (12)</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2020/2. melléklet.pdf'
                                )
                            }}"
                            ><li>2. számú melléklet
                            </li></a
                        >
                    </ul>
                </div>
            </div>

            {{-- element 2019 --}}
            <div class="container w-full">
                <div
                    class="header bg-emerald-600 hover:bg-emerald-500 cursor-pointer py-5 px-7 text-white text-center rounded-2xl ease-in duration-200"
                >
                    <span>2019. évi költségvetés</span>
                </div>
                <div class="content">
                    <ul
                        class="text-base flex flex-col bg-zinc-700 rounded-xl py-3 pl-5"
                    >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2019/határozat.pdf'
                                )
                            }}"
                            ><li>határozat</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2019/költségvetés.pdf'
                                )
                            }}"
                            ><li>1. számú melléklet</li></a
                        >
                        <li class="text-emerald-500 font-bold text-lg">Módosítások</li>
                        <li class="text-white font-bold">1. számú módosítás</li>
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2019/határozat (1).pdf'
                                )
                            }}"
                            ><li>határozat</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2019/költségvetés (1).pdf'
                                )
                            }}"
                            ><li>1. számú melléklet</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2019/5. napirend melléklete_1.pdf'
                                )
                            }}"
                            ><li>5. napirend melléklete (1)</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2019/5. napirend melléklete_2.pdf'
                                )
                            }}"
                            ><li>5. napirend melléklete (2)</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2019/5. napirend melléklete_3.pdf'
                                )
                            }}"
                            ><li>5. napirend melléklete (3)</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2019/5. napirend melléklete_4.pdf'
                                )
                            }}"
                            ><li>5. napirend melléklete (4)</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2019/5. napirend melléklete_5.pdf'
                                )
                            }}"
                            ><li>5. napirend melléklete (5)</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2019/5. napirend melléklete_6.pdf'
                                )
                            }}"
                            ><li>5. napirend melléklete (6)</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2019/5. napirend melléklete_7.pdf'
                                )
                            }}"
                            ><li>5. napirend melléklete (7)</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2019/5. napirend melléklete_8.pdf'
                                )
                            }}"
                            ><li>5. napirend melléklete (8)</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2019/5. napirend melléklete_9.pdf'
                                )
                            }}"
                            ><li>5. napirend melléklete (9)</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2019/5. napirend melléklete_10.pdf'
                                )
                            }}"
                            ><li>5. napirend melléklete (10)</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2019/5. napirend melléklete_11.pdf'
                                )
                            }}"
                            ><li>5. napirend melléklete (11)</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2019/5. napirend melléklete_12.pdf'
                                )
                            }}"
                            ><li>5. napirend melléklete (12)</li></a
                        >
                        <li class="text-white font-bold">2. számú módosítás</li>
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2019/határozat (2).pdf'
                                )
                            }}"
                            ><li>határozat</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2019/mellékletek.pdf'
                                )
                            }}"
                            ><li>Mellékletek</li></a
                        >
                        <li class="text-emerald-500 font-bold text-lg">2019. évi zárszámadás</li>
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2019/határozat (3).pdf'
                                )
                            }}"
                            ><li>határozat</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2019/zárszámadás.pdf'
                                )
                            }}"
                            ><li>1. melléklet</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2019/zárszámadás melléklete.pdf'
                                )
                            }}"
                            ><li>Zárszámadás melléklete</li></a
                        >
                    </ul>
                </div>
            </div>

            {{-- element 2018 --}}
            <div class="container w-full">
                <div
                    class="header bg-emerald-600 hover:bg-emerald-500 cursor-pointer py-5 px-7 text-white text-center rounded-2xl ease-in duration-200"
                >
                    <span>2018. évi költségvetés</span>
                </div>
                <div class="content">
                    <ul
                        class="text-base flex flex-col bg-zinc-700 rounded-xl py-3 pl-5"
                    >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2018/határozat.pdf'
                                )
                            }}"
                            ><li>határozat</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2018/költségvetés_1.pdf'
                                )
                            }}"
                            ><li>1. számú melléklet</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2018/költségvetés_2.pdf'
                                )
                            }}"
                            ><li>2. számú melléklet</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2018/költségvetés_3.pdf'
                                )
                            }}"
                            ><li>3. számú melléklet</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2018/költségvetés_4.pdf'
                                )
                            }}"
                            ><li>4. számú melléklet</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2018/költségvetés_5.pdf'
                                )
                            }}"
                            ><li>5. számú melléklet</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2018/költségvetés_6.pdf'
                                )
                            }}"
                            ><li>6. számú melléklet</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2018/költségvetés_7.pdf'
                                )
                            }}"
                            ><li>7. számú melléklet</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2018/költségvetés_8.pdf'
                                )
                            }}"
                            ><li>8. számú melléklet</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2018/költségvetés_9.pdf'
                                )
                            }}"
                            ><li>9. számú melléklet</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2018/költségvetés_10.pdf'
                                )
                            }}"
                            ><li>10. számú melléklet</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2018/költségvetés_11.pdf'
                                )
                            }}"
                            ><li>11. számú melléklet</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2018/költségvetés_12.pdf'
                                )
                            }}"
                            ><li>12. számú melléklet</li></a
                        >
                        <li class="text-emerald-500 font-bold text-lg">Módosítások</li>
                        <li class="text-white font-bold">1. számú módosítás</li>
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2018/határozat (1).pdf'
                                )
                            }}"
                            ><li>határozat</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2018/költségvetés.pdf'
                                )
                            }}"
                            ><li>1. számú melléklet</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2018/költségvetés_2 (1).pdf'
                                )
                            }}"
                            ><li>2. számú melléklet</li></a
                        >
                        <li class="text-white font-bold">2. számú módosítás</li>
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2018/határozat (2).pdf'
                                )
                            }}"
                            ><li>határozat</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2018/költségvetés (1).pdf'
                                )
                            }}"
                            ><li>1. számú melléklet</li></a
                        >
                        <li class="text-emerald-500 font-bold text-lg">2018. évi zárszámadás</li>
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2018/határozat (3).pdf'
                                )
                            }}"
                            ><li>határozat</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2018/zárszámadás.pdf'
                                )
                            }}"
                            ><li>1. melléklet</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2018/4. napirend 1. melléklete_1.pdf'
                                )
                            }}"
                            ><li>4. napirend melléklete (1)</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2018/4. napirend 1. melléklete_2.pdf'
                                )
                            }}"
                            ><li>4. napirend melléklete (2)</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2018/4. napirend 1. melléklete_3.pdf'
                                )
                            }}"
                            ><li>4. napirend melléklete (3)</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2018/4. napirend 1. melléklete_4.pdf'
                                )
                            }}"
                            ><li>4. napirend melléklete (4)</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2018/4. napirend 1. melléklete_5.pdf'
                                )
                            }}"
                            ><li>4. napirend melléklete (5)</li></a
                        >
                    </ul>
                </div>
            </div>

            {{-- element 2011 --}}
            <div class="container w-full">
                <div
                    class="header bg-emerald-600 hover:bg-emerald-500 cursor-pointer py-5 px-7 text-white text-center rounded-2xl ease-in duration-200"
                >
                    <span>2011. évi költségvetés</span>
                </div>
                <div class="content">
                    <ul
                        class="text-base flex flex-col bg-zinc-700 rounded-xl py-3 pl-5"
                    >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2011/2011_evi_koltsegvetes.pdf'
                                )
                            }}"
                            ><li>határozat</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2011/2011_evi_koltsegvetes_mellekletek.pdf'
                                )
                            }}"
                            ><li>1. számú melléklet</li></a
                        >
                        <li class="text-emerald-500 font-bold text-lg">Módosítások</li>
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2011/2011_evi költségvetés_modositas_1.pdf'
                                )
                            }}"
                            ><li>1. módosítás</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2011/2011_evi_költségvetés_modositas_2.pdf'
                                )
                            }}"
                            ><li>2. módosítás</li></a
                        >
                        <li class="text-emerald-500 font-bold text-lg">2011. évi zárszámadás</li>
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2011/1. 2011 évi zárszámadás előterjesztés.pdf'
                                )
                            }}"
                            ><li>előterjesztés</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2011/10.2011_zarszamadas_hatarozat.pdf'
                                )
                            }}"
                            ><li>határozat</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2011/2. 2011 évi zárszámadás 1 melléklet.pdf'
                                )
                            }}"
                            ><li>1. melléklet</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2011/2.2011.évi zárszámadás 2._szamu_melleklet_(kiadasok).pdf'
                                )
                            }}"
                            ><li>2. melléklet</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2011/3.2011 évi zárszámadás 3._szamu_melleklet_(bevetelek).pdf'
                                )
                            }}"
                            ><li>3. melléklet</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2011/4. 2011 évi zárszámadás 4._szamu_melleklet_(merlegkimutatas).pdf'
                                )
                            }}"
                            ><li>4. melléklet</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2011/5. 2011 évi zárszámadás 5._szamu_melleklet_(penzmaradvany).pdf'
                                )
                            }}"
                            ><li>5. melléklet</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2011/6.2011 évi zárszámadás 6._szamu_melleklet_(foly._beruh.).pdf'
                                )
                            }}"
                            ><li>6. melléklet</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2011/7. 2011 évi zárszámadás 7._szamu_melleklet_(targyi_eszkozok).pdf'
                                )
                            }}"
                            ><li>7. melléklet</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2011/8. 2011 évi zárszámadás 8._szamu_melleklet_(merleg).pdf'
                                )
                            }}"
                            ><li>8. melléklet</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2011/9.2011 évi zárszámadás 9._szamu_melleklet_(penzeszkoz_valtozas).pdf'
                                )
                            }}"
                            ><li>9. melléklet</li></a
                        >
                    </ul>
                </div>
            </div>


            {{-- element 2010 --}}
            <div class="container w-full">
                <div
                    class="header bg-emerald-600 hover:bg-emerald-500 cursor-pointer py-5 px-7 text-white text-center rounded-2xl ease-in duration-200"
                >
                    <span>2010. évi költségvetés</span>
                </div>
                <div class="content">
                    <ul
                        class="text-base flex flex-col bg-zinc-700 rounded-xl py-3 pl-5"
                    >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2010/2010_evi_koltsegvetes.pdf'
                                )
                            }}"
                            ><li>határozat</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2010/2010_evi_koltsegvetes_mellekletek.pdf'
                                )
                            }}"
                            ><li>1. számú melléklet</li></a
                        >
                        <li class="text-emerald-500 font-bold text-lg">2010. évi zárszámadás</li>
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2010/2010_evi_zarszamadas.pdf'
                                )
                            }}"
                            ><li>zárszámadás</li></a
                        >
                    </ul>
                </div>
            </div>

            {{-- element 2009--}}
            <div class="container w-full">
                <div
                    class="header bg-emerald-600 hover:bg-emerald-500 cursor-pointer py-5 px-7 text-white text-center rounded-2xl ease-in duration-200"
                >
                    <span>2009. évi költségvetés</span>
                </div>
                <div class="content">
                    <ul
                        class="text-base flex flex-col bg-zinc-700 rounded-xl py-3 pl-5"
                    >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2009/2009. évi költségvetés 1. módosítás előterjesztés.pdf'
                                )
                            }}"
                            ><li>előterjesztés</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2009/2009. évi költségvetés 1. módosítás határozat.jpg'
                                )
                            }}"
                            ><li>határozat</li></a
                        >
                        <li class="text-emerald-500 font-bold text-lg">2009. évi zárszámadás</li>
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2009/2009_evi_zarszamadas.pdf'
                                )
                            }}"
                            ><li>zárszámadás</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2009/2009_evi_zarszamadas_mellekletek.pdf'
                                )
                            }}"
                            ><li>1. számú melléklet</li></a
                        >
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
