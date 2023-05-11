@extends('layout.app') @section('content')

{{-- inner --}}
<div class="max-[1280px]:px-3 xl:mx-auto xl:w-full" style="
background: url({{asset('./img/main/inner-bg.png')}});
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    height: 40vh;
">
    <div
        class="flex flex-col items-center justify-center h-full gap-6"
    >
        <h2 class="text-zinc-300 text-xl max-[500px]:text-lg max-[500px]:text-center">Társulásról</h2>
        <h1 class="text-zinc-300 text-6xl font-bold max-[900px]:text-4xl max-[500px]:text-2xl max-[500px]:text-center">Költségvetés</h1>
        <div class="flex gap-4 text-xl max-[500px]:text-lg max-[500px]:text-center">
            <a class="text-zinc-300 hover:text-zinc-100 ease-all duration-200" href="{{ url('/')}}">Kezdőlap</a>
            <p class="text-zinc-300">/</p>
            <p class="text-zinc-400">Költségvetés</p>
        </div>
    </div>
</div>

<div class="px-2 py-5 bg-zinc-200 ">
    <div class="min-h-8/12 mt-4 gap-3 max-[1280px]:mx-3 xl:mx-auto xl:w-128">
        <h1 class="font-bold text-4xl text-center">Költségvetések</h1>
        <div class="border-b border-zinc-300 w-96 mx-auto mt-4"></div>
        <div
            class="grid grid-cols-4 max-[1200px]:grid-cols-3 max-[980px]:grid-cols-2 max-[600px]:grid-cols-1 text-xl mt-10 justify-items-stretch align-center gap-12"
        >
            {{-- element 2023--}}
            <div class="container w-full">
                <div
                    class="header bg-emerald-600 hover:bg-emerald-500 cursor-pointer py-5 px-7 text-white text-center rounded-2xl ease-in duration-200"
                >
                    <span>2023. évi költségvetés</span>
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
                                    './pdf/tarsulasrol/koltsegvetes/2023/határozat.pdf'
                                )
                            }}"
                            ><li>határozat</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2023/3. napirend.pdf'
                                )
                            }}"
                            ><li>3. napirend</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2023/3. számú napirend 1. melléklet.xls'
                                )
                            }}"
                            ><li>1. melléklet</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2023/3. napirend 2. melléklet.pdf'
                                )
                            }}"
                            ><li>2. melléklet</li></a
                        >
                        <li class="text-emerald-500 font-bold">Módosítások</li>
                        <li class="text-emerald-500 font-bold ml-3">
                            1. számú módosítás
                        </li>
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2023/határozat_2.pdf'
                                )
                            }}"
                            ><li>határozat</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2023/4. napirend.pdf'
                                )
                            }}"
                            ><li>4. napirend</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2023/4. számú napirend 1. melléklete.xls'
                                )
                            }}"
                            ><li>1. melléklet</li></a
                        >
                    </ul>
                </div>
            </div>
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
                        <li class="text-emerald-500 font-bold ml-3">
                            2. számú módosítás
                        </li>
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2022/2.modositas/határozat.pdf'
                                )
                            }}"
                            ><li>határozat</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2022/2.modositas/3. napirend.pdf'
                                )
                            }}"
                            ><li>3. napirend</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2022/2.modositas/3. számú napirend 1. melléklet.xls'
                                )
                            }}"
                            ><li>3. napirend 1. melléklet</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2022/2.modositas/3. számú napirend 2. melléklet.pdf'
                                )
                            }}"
                            ><li>3. napirend 2. melléklet</li></a
                        >
                        <li class="text-emerald-500 font-bold">2022. évi zárszámadás</li>
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2022/zarszamadas/határozat.pdf'
                                )
                            }}"
                            ><li>határozat</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2022/zarszamadas/3. napirend.pdf'
                                )
                            }}"
                            ><li>3. napirend</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2022/zarszamadas/3. napirend 1. melléklete.xls'
                                )
                            }}"
                            ><li>3. napirend 1. melléklet</li></a
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

            {{-- element 2017 --}}
            <div class="container w-full">
                <div
                    class="header bg-emerald-600 hover:bg-emerald-500 cursor-pointer py-5 px-7 text-white text-center rounded-2xl ease-in duration-200"
                >
                    <span>2017. évi költségvetés</span>
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
                                    './pdf/tarsulasrol/koltsegvetes/2017/határozat.pdf'
                                )
                            }}"
                            ><li>határozat</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2017/mellekletek1.zip'
                                )
                            }}"
                            ><li class="text-white hover:text-zinc-400 font-bold text-lg ease-in duration-200 ml-3">Mellékletek</li></a
                        >
                        <li class="text-emerald-500 font-bold text-lg">Módosítások</li>
                        <li class="text-emerald-500 font-bold text-lg">1. számú módosítás</li>
                        <a
                        class="text-white hover:text-zinc-400 ease-in duration-200"
                        target="__blank"
                        href="{{
                            asset(
                                './pdf/tarsulasrol/koltsegvetes/2017/modositas1mellekletek.zip'
                            )
                        }}"
                        ><li class="text-white hover:text-zinc-400 font-bold text-lg ease-in duration-200 ml-3">Mellékletek</li></a
                        >
                        <li class="text-emerald-500 font-bold text-lg">2. számú módosítás</li>
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2017/határozatmod2.pdf'
                                )
                            }}"
                            ><li>határozat</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2017/modositas2mellekletek.zip'
                                )
                            }}"
                            ><li class="text-white hover:text-zinc-400 font-bold text-lg ease-in duration-200 ml-3">Mellékletek</li></a
                        >
                        <li class="text-emerald-500 font-bold text-lg">3. számú módosítás</li>
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2017/határozatmod3.pdf'
                                )
                            }}"
                            ><li>határozat</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2017/költségvetés.pdf'
                                )
                            }}"
                            ><li>1. számú melléklet</li></a
                        >
                        <li class="text-emerald-500 font-bold text-lg">2017. évi zárszámadás</li>
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2017/határozatzarszamadas.pdf'
                                )
                            }}"
                            ><li>határozat</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2017/zárszámadás.pdf'
                                )
                            }}"
                            ><li>1. melléklet</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2017/zárszámadás_2.pdf'
                                )
                            }}"
                            ><li>2. melléklet</li></a
                        >
                    </ul>
                </div>
            </div>

            {{-- element 2016 --}}
            <div class="container w-full">
                <div
                    class="header bg-emerald-600 hover:bg-emerald-500 cursor-pointer py-5 px-7 text-white text-center rounded-2xl ease-in duration-200"
                >
                    <span>2016. évi költségvetés</span>
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
                                    './pdf/tarsulasrol/koltsegvetes/2016/2016. évi költségvetés előterjesztés.pdf'
                                )
                            }}"
                            ><li>előterjesztés</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2016/2016. évi költségvetés határozat.pdf'
                                )
                            }}"
                            ><li>határozat</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2016/mellekletek1.zip'
                                )
                            }}"
                            ><li class="text-white hover:text-zinc-400 font-bold text-lg ease-in duration-200">Mellékletek</li></a
                        >
                        <li class="text-emerald-500 font-bold text-lg">Módosítások</li>
                        <li class="text-emerald-500 font-bold text-lg">1. számú módosítás</li>
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2016/8. számú előterjesztés.pdf'
                                )
                            }}"
                            ><li>előterjesztés</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2016/határozat.pdf'
                                )
                            }}"
                            ><li>határozat</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2016/mod1mellekletek1.zip'
                                )
                            }}"
                            ><li class="text-white hover:text-zinc-400 font-bold text-lg ease-in duration-200">Mellékletek</li></a
                        >
                        <li class="text-emerald-500 font-bold text-lg">2. számú módosítás</li>
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2016/3. napirend.pdf'
                                )
                            }}"
                            ><li>napirend</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2016/17_határozat.pdf'
                                )
                            }}"
                            ><li>határozat</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2016/mod2mellekletek.zip'
                                )
                            }}"
                            ><li class="text-white hover:text-zinc-400 font-bold text-lg ease-in duration-200">Mellékletek</li></a
                        >
                        <li class="text-emerald-500 font-bold text-lg">3. számú módosítás</li>
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2016/előterjesztés III. sz módosítás.pdf'
                                )
                            }}"
                            ><li>előterjesztés</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2016/mod3mellekletek.zip'
                                )
                            }}"
                            ><li class="text-white hover:text-zinc-400 font-bold text-lg ease-in duration-200">Mellékletek</li></a
                        >
                    </ul>
                </div>
            </div>

            {{-- element 2015 --}}
            <div class="container w-full">
                <div
                    class="header bg-emerald-600 hover:bg-emerald-500 cursor-pointer py-5 px-7 text-white text-center rounded-2xl ease-in duration-200"
                >
                    <span>2015. évi költségvetés</span>
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
                                    './pdf/tarsulasrol/koltsegvetes/2015/2015. évi költségvetés előterjesztés.pdf'
                                )
                            }}"
                            ><li>előterjesztés</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2015/2015 évi költségvetés határozat.pdf'
                                )
                            }}"
                            ><li>határozat</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2015/mellekletek1.zip'
                                )
                            }}"
                            ><li class="text-white hover:text-zinc-400 font-bold text-lg ease-in duration-200">Mellékletek</li></a
                        >
                        <li class="text-emerald-500 font-bold text-lg">Módosítások</li>
                        <li class="text-emerald-500 font-bold text-lg">1. számú módosítás</li>
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2015/2015.év költségvetés 1. módosítás előterjesztés.pdf'
                                )
                            }}"
                            ><li>előterjesztés</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2015/2015.év költségvetés I. módosítása határozat.pdf'
                                )
                            }}"
                            ><li>határozat</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2015/mod1mellekletek.zip'
                                )
                            }}"
                            ><li class="text-white hover:text-zinc-400 font-bold text-lg ease-in duration-200">Mellékletek</li></a
                        >
                        <li class="text-emerald-500 font-bold text-lg">2. számú módosítás</li>
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2015/2015. évi költségvetés 2. módosítás előterjesztés.pdf'
                                )
                            }}"
                            ><li>előterjesztés</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2015/2015. évi költségvetés 2. módosítás határozat.pdf'
                                )
                            }}"
                            ><li>határozat</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2015/mod2mellekletek.zip'
                                )
                            }}"
                            ><li class="text-white hover:text-zinc-400 font-bold text-lg ease-in duration-200">Mellékletek</li></a
                        >
                        <li class="text-emerald-500 font-bold text-lg">3. számú módosítás</li>
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2015/2015. évi költségvetés 3. módosítás előterjesztés.pdf'
                                )
                            }}"
                            ><li>előterjesztés</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2015/2015. évi költségvetés 3. módosítás határozat.pdf'
                                )
                            }}"
                            ><li>határozat</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2015/mod3mellekletek.zip'
                                )
                            }}"
                            ><li class="text-white hover:text-zinc-400 font-bold text-lg ease-in duration-200">Mellékletek</li></a
                        >
                        <li class="text-emerald-500 font-bold text-lg">4. számú módosítás</li>
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2015/2015. évi költségvetés 4. módosítás előterjesztés.pdf'
                                )
                            }}"
                            ><li>előterjesztés</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2015/2015. évi költségvetés 4. módosítás határozat.pdf'
                                )
                            }}"
                            ><li>határozat</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2015/mod4mellekletek.zip'
                                )
                            }}"
                            ><li class="text-white hover:text-zinc-400 font-bold text-lg ease-in duration-200">Mellékletek</li></a
                        >
                        <li class="text-emerald-500 font-bold text-lg">2015. évi zárszámadás</li>
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2015/3. számú előterjesztés.pdf'
                                )
                            }}"
                            ><li>előterjesztés</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2015/határozat.pdf'
                                )
                            }}"
                            ><li>határozat</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2015/zarszamadasmellekletek.zip'
                                )
                            }}"
                            ><li class="text-white hover:text-zinc-400 font-bold text-lg ease-in duration-200">Mellékletek</li></a
                        >
                    </ul>
                </div>
            </div>

            {{-- element 2014 --}}
            <div class="container w-full">
                <div
                    class="header bg-emerald-600 hover:bg-emerald-500 cursor-pointer py-5 px-7 text-white text-center rounded-2xl ease-in duration-200"
                >
                    <span>2014. évi költségvetés</span>
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
                                    './pdf/tarsulasrol/koltsegvetes/2014/2014. évi költségvetés előterjesztés.pdf'
                                )
                            }}"
                            ><li>előterjesztés</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2014/2014. évi költségvetés határozat.pdf'
                                )
                            }}"
                            ><li>határozat</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2014/mellékletek1.zip'
                                )
                            }}"
                            ><li class="text-white hover:text-zinc-400 font-bold text-lg ease-in duration-200">Mellékletek</li></a
                        >
                        <li class="text-emerald-500 font-bold text-lg">1. számú módosítás</li>
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2014/2014 évi költségvetés 1. módosítása előterjesztés.pdf'
                                )
                            }}"
                            ><li>előterjesztés</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2014/2014. évi költésgvetés 1. módosítás határozat.pdf'
                                )
                            }}"
                            ><li>határozat</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2014/mod1mellekletek.zip'
                                )
                            }}"
                            ><li class="text-white hover:text-zinc-400 font-bold text-base ease-in duration-200 ml-3">mellékletek</li></a
                        >
                        <li class="text-emerald-500 font-bold text-lg">2. számú módosítás</li>
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2014/2014. évi költségvetés 2. módosítása előterjesztés.pdf'
                                )
                            }}"
                            ><li>előterjesztés</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2014/2014 évi 2. módosítás határozat.pdf'
                                )
                            }}"
                            ><li>határozat</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2014/mod2mellekletek.zip'
                                )
                            }}"
                            ><li class="text-white hover:text-zinc-400 font-bold text-base ease-in duration-200 ml-3">mellékletek</li></a
                        >
                        <li class="text-emerald-500 font-bold text-lg">3. számú módosítás</li>
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2014/2014  évi költségvetés 3. módosítás előterjesztés.pdf'
                                )
                            }}"
                            ><li>előterjesztés</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2014/2014 évi 3. módosítás határozat.pdf'
                                )
                            }}"
                            ><li>határozat</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2014/mod3mellekletek.zip'
                                )
                            }}"
                            ><li class="text-white hover:text-zinc-400 font-bold text-base ease-in duration-200 ml-3">mellékletek</li></a
                        >
                        <li class="text-emerald-500 font-bold text-lg">2014. évi zárszámadás</li>
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2014/2014  év zárszámadás előterjesztés.pdf'
                                )
                            }}"
                            ><li>asdasdasd</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2014/2014.év zárszámadás határozat.pdf'
                                )
                            }}"
                            ><li>asdasdasd</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2014/zarszamadasmellekletek.zip'
                                )
                            }}"
                            ><li class="text-white hover:text-zinc-400 font-bold text-base ease-in duration-200 ml-3">mellékletek</li></a
                        >
                    </ul>
                </div>
            </div>

            {{-- element 2013 --}}
            <div class="container w-full">
                <div
                    class="header bg-emerald-600 hover:bg-emerald-500 cursor-pointer py-5 px-7 text-white text-center rounded-2xl ease-in duration-200"
                >
                    <span>2013. évi költségvetés</span>
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
                                    './pdf/tarsulasrol/koltsegvetes/2013/2013. évi költségvetés előterjesztés.pdf'
                                )
                            }}"
                            ><li>előterjesztés</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2013/2013. évi költségvetés határozat.pdf'
                                )
                            }}"
                            ><li>határozat</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2013/2013. évi költségvetés 1. melléklet.pdf'
                                )
                            }}"
                            ><li>1. számú melléklet</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2013/2013. évi költségvetés 2. melléklet.pdf'
                                )
                            }}"
                            ><li>2. számú melléklet</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2013/2013. évi költségvetés 3. melléklet.pdf'
                                )
                            }}"
                            ><li>3. számú melléklet</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2013/2013. évi költségvetés 4. melléklet.pdf'
                                )
                            }}"
                            ><li>4. számú melléklet</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2013/2013. évi költségvetés 5. melléklet.pdf'
                                )
                            }}"
                            ><li>5. számú melléklet</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2013/2013. évi költségvetés 6. melléklet.pdf'
                                )
                            }}"
                            ><li>6. számú melléklet</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2013/2013. évi költségvetés 7. melléklet.pdf'
                                )
                            }}"
                            ><li>7. számú melléklet</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2013/2013. évi költségvetés 8. melléklet.pdf'
                                )
                            }}"
                            ><li>8. számú melléklet</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2013/2013. évi költségvetés 9. melléklet.pdf'
                                )
                            }}"
                            ><li>9. számú melléklet</li></a
                        >
                        {{-- --------------------------------------------------- --}}
                        <li class="text-emerald-500 font-bold text-lg">Módosítások</li>
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2013/1. 2013. évi költségvetés módosítása előterjesztés.pdf'
                                )
                            }}"
                            ><li>előterjesztés</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2013/2013. évi költségvetés 1. módosítás határozat.pdf'
                                )
                            }}"
                            ><li>határozat</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2013/2013. évi költségvetés módosítás 1. melléklete.pdf'
                                )
                            }}"
                            ><li>1. számú melléklet</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2013/2013. évi költségvetés módosítás 3. melléklete.pdf'
                                )
                            }}"
                            ><li>3. számú melléklet</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2013/2013. évi költségvetés módosítás 5. melléklete.pdf'
                                )
                            }}"
                            ><li>5. számú melléklet</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2013/2013. évi költségvetés módosítás 6. melléklete.pdf'
                                )
                            }}"
                            ><li>6. számú melléklet</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2013/2013. évi költségvetés módosítás 7. melléklete.pdf'
                                )
                            }}"
                            ><li>7. számú melléklet</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2013/2013. évi költségvetés módosítás 8. melléklete.pdf'
                                )
                            }}"
                            ><li>8. számú melléklet</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2013/2013. évi költségvetés módosítás 9. melléklete.pdf'
                                )
                            }}"
                            ><li>9. számú melléklet</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2013/2013. évi költségvetés módosítás 10. melléklete.pdf'
                                )
                            }}"
                            ><li>10. számú melléklet</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2013/2013. évi költségvetés módosítás 11. melléklete.pdf'
                                )
                            }}"
                            ><li>11. számú melléklet</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2013/2013. évi költségvetés módosítás 13. melléklete.pdf'
                                )
                            }}"
                            ><li>13. számú melléklet</li></a
                        >
                        <li class="text-emerald-500 font-bold text-lg">2013. évi zárszámadás</li>
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2013/2013. évi zárszámadás előterjesztés.pdf'
                                )
                            }}"
                            ><li>előterjesztés</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2013/2013. évi zárszámadás határozat.pdf'
                                )
                            }}"
                            ><li>határozat</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2013/2013. évi zárszámadás 1. melléklet.pdf'
                                )
                            }}"
                            ><li>1. melléklet</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2013/2013. évi zárszámadás 2. melléklet.pdf'
                                )
                            }}"
                            ><li>2. melléklet</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2013/2013. évi zárszámadás 3. melléklet.pdf'
                                )
                            }}"
                            ><li>3. melléklet</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2013/2013. évi zárszámadás 4. melléklet.pdf'
                                )
                            }}"
                            ><li>4. melléklet</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2013/2013. évi zárszámadás 5. melléklet.pdf'
                                )
                            }}"
                            ><li>5. melléklet</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2013/2013. évi zárszámadás 6. melléklet.pdf'
                                )
                            }}"
                            ><li>6. melléklet</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2013/2013. évi zárszámadás 7. melléklet.pdf'
                                )
                            }}"
                            ><li>7. melléklet</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2013/2013. évi zárszámadás 8. melléklet.pdf'
                                )
                            }}"
                            ><li>8. melléklet</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2013/2013. évi zárszámadás 9. melléklet.pdf'
                                )
                            }}"
                            ><li>9. melléklet</li></a
                        >
                    </ul>
                </div>
            </div>

            {{-- element 2012 --}}
            <div class="container w-full">
                <div
                    class="header bg-emerald-600 hover:bg-emerald-500 cursor-pointer py-5 px-7 text-white text-center rounded-2xl ease-in duration-200"
                >
                    <span>2012. évi költségvetés</span>
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
                                    './pdf/tarsulasrol/koltsegvetes/2012/2012_evi_koltsegvetes.pdf'
                                )
                            }}"
                            ><li>határozat</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2012/2012_evi_koltsegvetes_mellekletek.pdf'
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
                                    './pdf/tarsulasrol/koltsegvetes/2012/2012. évi költségvetés 1. módosítás.jpg'
                                )
                            }}"
                            ><li>1. módosítás</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2012/2012. FÉLÉVI KV MÓDOSÍTÁS HULLADÉK 1  számú melléklet ( bevételek)_20120913_v.pdf'
                                )
                            }}"
                            ><li>1. számú melléklet</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2012/2012. FÉLÉVI KV MÓDOSÍTÁS HULLADÉK 2. számú melléklet ( kiadások )_20120913_v.pdf'
                                )
                            }}"
                            ><li>2. számú melléklet</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2012/2012.FÉLÉV KV MÓDOSÍTÁS HULLADÉK 3. számú melléklet ( mérleg )_20120913_v.pdf'
                                )
                            }}"
                            ><li>3. számú melléklet</li></a
                        >
                        <li class="text-emerald-500 font-bold text-lg">2012. évi zárszámadás</li>
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2012/1. 2012.évi zárszámadás előterjesztés.pdf'
                                )
                            }}"
                            ><li>előterjesztés</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2012/11. 2012. évi zárszámadás határozat.pdf'
                                )
                            }}"
                            ><li>határozat</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2012/2. 2012. évi zárszámadás _1. számú melléklet ( Kintlévőségek ).pdf'
                                )
                            }}"
                            ><li>1. melléklet</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2012/3. 2012. zárszámadás 2melléklet kiadások alakulása.pdf'
                                )
                            }}"
                            ><li>2. melléklet</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2012/4. 2012. évi zárszámadás 3  számú melléklet  bevételek.pdf'
                                )
                            }}"
                            ><li>3. melléklet</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2012/5. 2012. évi zárszámadás 4. számú melléklet ( mérleg bemutatása ).pdf'
                                )
                            }}"
                            ><li>4. melléklet</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2012/6. 2012. évi zárszámadás 5 számú melléklet (pénzmaradvány).pdf'
                                )
                            }}"
                            ><li>5. melléklet</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2012/7. 2012. évi zárszámadás 6. számú mellékle( foly. levőberuházások beszámolóhoz).pdf'
                                )
                            }}"
                            ><li>6. melléklet</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2012/8. 2012.évi zárszámadás 7. számú melléklet ( tárgyi eszközök ).pdf'
                                )
                            }}"
                            ><li>7. melléklet</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2012/9. 2012. évi zárszámadás 8 számu melléklet (mérleg).pdf'
                                )
                            }}"
                            ><li>8. melléklet</li></a
                        >
                        <a
                            class="text-white hover:text-zinc-400 ease-in duration-200 ml-3"
                            target="__blank"
                            href="{{
                                asset(
                                    './pdf/tarsulasrol/koltsegvetes/2012/10. 2012. évi zárszámadás 9. számú melléklet ( pénzeszköz változás ).pdf'
                                )
                            }}"
                            ><li>9. melléklet</li></a
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
