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
        <h2 class="text-zinc-300 text-xl max-[500px]:text-lg max-[500px]:text-center">Rólunk</h2>
        <h1 class="text-zinc-300 text-6xl font-bold max-[900px]:text-4xl max-[500px]:text-2xl max-[500px]:text-center">Társulási Tanács Ülések</h1>
        <div class="flex gap-4 text-xl max-[500px]:text-lg max-[500px]:text-center">
            <a class="text-zinc-300 hover:text-zinc-100 ease-all duration-200" href="{{ url('/')}}">Kezdőlap</a>
            <p class="text-zinc-300">/</p>
            <p class="text-zinc-400">Társulási Tanács Ülések</p>
        </div>
    </div>
</div>

<div class="px-2 py-5 bg-white bg-zinc-200">
    <div
        class="max-[1280px]:px-3 xl:mx-auto xl:w-128 min-h-8/12 mt-4 gap-3"
    >
    <h1 class="text-4xl font-bold text-emerald-500 mb-3 mt-10 text-center">Társulási Tanács Ülései</h1>
    <div class="border-b border-zinc-300 mb-5 w-64 mx-auto"></div>
    <div class="grid grid-cols-2 max-[1100px]:grid-cols-1 gap-10 justify-items-center align-center">
        {{-- 2022 --}}
        <div>
            <h1 class="text-2xl font-bold text-zinc-700 mb-3 mt-10 text-center">2022 év</h1>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg max-[1100px]:w-full w-max mx-auto">
                <table id="table" class="max-[1100px]:w-full w-max text-base text-left text-zinc-300 text-zinc-300">
                    <thead class="text-base text-emerald-500 uppercase bg-zinc-700 border-b border-zinc-800">
                    <tr>
                        <th scope="col" class="px-6 py-3 w-64">Év</th>
                        <th scope="col" class="px-6 py-3 w-72">Fájl</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="bg-white border-b bg-zinc-800 border-gray-700 hover:bg-zinc-700 ease-in duration-100">
                        <td class="px-6 py-4">2022.05.03</td>
                        <td class="px-6 py-4"><a class="text-zinc-300 hover:text-zinc-400 duration-100" href="{{asset('./pdf/tarsulasrol/tarsulasulesek/2022/20220503.zip')}}">link</a></td>
                    </tr>
                    <tr class="bg-white border-b bg-zinc-800 border-gray-700 hover:bg-zinc-600 ease-in duration-100">
                        <td class="px-6 py-4">2022.02.28</td>
                        <td class="px-6 py-4"><a class="text-zinc-300 hover:text-zinc-400 duration-100" href="{{asset('./pdf/tarsulasrol/tarsulasulesek/2022/20220228.zip')}}">link</a></td>
                    </tr>
                    <tr class="bg-white border-b bg-zinc-800 border-gray-700 hover:bg-zinc-600 ease-in duration-100">
                        <td class="px-6 py-4">2022.02.01</td>
                        <td class="px-6 py-4"><a class="text-zinc-300 hover:text-zinc-400 duration-100" href="{{asset('./pdf/tarsulasrol/tarsulasulesek/2022/20220201.zip')}}">link</a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        {{-- 2021 --}}
        <div>
            <h1 class="text-2xl font-bold text-zinc-700 mb-3 mt-10 text-center">2021 év</h1>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg max-[1100px]:w-full w-max mx-auto">
                <table id="table" class="w-max max-[1100px]:w-full text-base text-left text-zinc-300 text-zinc-300">
                    <thead class="text-base text-emerald-500 uppercase bg-zinc-700 border-b border-zinc-800">
                    <tr>
                        <th scope="col" class="px-6 py-3 w-64">Év</th>
                        <th scope="col" class="px-6 py-3 w-72">Fájl</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="bg-white border-b bg-zinc-800 border-gray-700 hover:bg-zinc-700 ease-in duration-100">
                        <td class="px-6 py-4">2021.12.15</td>
                        <td class="px-6 py-4"><a class="text-zinc-300 hover:text-zinc-400 duration-100" href="{{asset('./pdf/tarsulasrol/tarsulasulesek/2021/20211215.zip')}}">link</a></td>
                    </tr>
                    <tr class="bg-white border-b bg-zinc-800 border-gray-700 hover:bg-zinc-600 ease-in duration-100">
                        <td class="px-6 py-4">2021.10.19</td>
                        <td class="px-6 py-4"><a class="text-zinc-300 hover:text-zinc-400 duration-100" href="{{asset('./pdf/tarsulasrol/tarsulasulesek/2021/20211019.zip')}}">link</a></td>
                    </tr>
                    <tr class="bg-white border-b bg-zinc-800 border-gray-700 hover:bg-zinc-600 ease-in duration-100">
                        <td class="px-6 py-4">2021.11.06</td>
                        <td class="px-6 py-4"><a class="text-zinc-300 hover:text-zinc-400 duration-100" href="{{asset('./pdf/tarsulasrol/tarsulasulesek/2021/20211106.zip')}}">link</a></td>
                    </tr>
                    <tr class="bg-white border-b bg-zinc-800 border-gray-700 hover:bg-zinc-600 ease-in duration-100">
                        <td class="px-6 py-4">2021.05.11</td>
                        <td class="px-6 py-4"><a class="text-zinc-300 hover:text-zinc-400 duration-100" href="{{asset('./pdf/tarsulasrol/tarsulasulesek/2021/20210511.zip')}}">link</a></td>
                    </tr>
                    <tr class="bg-white border-b bg-zinc-800 border-gray-700 hover:bg-zinc-600 ease-in duration-100">
                        <td class="px-6 py-4">2021.02.15</td>
                        <td class="px-6 py-4"><a class="text-zinc-300 hover:text-zinc-400 duration-100" href="{{asset('./pdf/tarsulasrol/tarsulasulesek/2021/20210215.zip')}}">link</a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        {{-- 2020 --}}
        <div>
            <h1 class="text-2xl font-bold text-zinc-700 mb-3 mt-10 text-center">2020 év</h1>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg max-[1100px]:w-full w-max mx-auto">
                <table id="table" class="w-max max-[1100px]:w-full text-base text-left text-zinc-300 text-zinc-300">
                    <thead class="text-base text-emerald-500 uppercase bg-zinc-700 border-b border-zinc-800">
                    <tr>
                        <th scope="col" class="px-6 py-3 w-64">Év</th>
                        <th scope="col" class="px-6 py-3 w-72">Fájl</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="bg-white border-b bg-zinc-800 border-gray-700 hover:bg-zinc-700 ease-in duration-100">
                        <td class="px-6 py-4">2020.11.09</td>
                        <td class="px-6 py-4"><a class="text-zinc-300 hover:text-zinc-400 duration-100" href="{{asset('./pdf/tarsulasrol/tarsulasulesek/2020/20201109.zip')}}">link</a></td>
                    </tr>
                    <tr class="bg-white border-b bg-zinc-800 border-gray-700 hover:bg-zinc-600 ease-in duration-100">
                        <td class="px-6 py-4">2020.07.02</td>
                        <td class="px-6 py-4"><a class="text-zinc-300 hover:text-zinc-400 duration-100" href="{{asset('./pdf/tarsulasrol/tarsulasulesek/2020/20200702.zip')}}">link</a></td>
                    </tr>
                    <tr class="bg-white border-b bg-zinc-800 border-gray-700 hover:bg-zinc-600 ease-in duration-100">
                        <td class="px-6 py-4">2020.05.11</td>
                        <td class="px-6 py-4"><a class="text-zinc-300 hover:text-zinc-400 duration-100" href="{{asset('./pdf/tarsulasrol/tarsulasulesek/2020/20200511.zip')}}">link</a></td>
                    </tr>
                    <tr class="bg-white border-b bg-zinc-800 border-gray-700 hover:bg-zinc-600 ease-in duration-100">
                        <td class="px-6 py-4">2020.02.04</td>
                        <td class="px-6 py-4"><a class="text-zinc-300 hover:text-zinc-400 duration-100" href="{{asset('./pdf/tarsulasrol/tarsulasulesek/2020/20200204.zip')}}">link</a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        {{-- 2019 --}}
        <div>
            <h1 class="text-2xl font-bold text-zinc-700 mb-3 mt-10 text-center">2019 év</h1>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg max-[1100px]:w-full w-max mx-auto">
                <table id="table" class="w-max max-[1100px]:w-full text-base text-left text-zinc-300 text-zinc-300">
                    <thead class="text-base text-emerald-500 uppercase bg-zinc-700 border-b border-zinc-800">
                    <tr>
                        <th scope="col" class="px-6 py-3 w-64">Év</th>
                        <th scope="col" class="px-6 py-3 w-72">Fájl</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="bg-white border-b bg-zinc-800 border-gray-700 hover:bg-zinc-700 ease-in duration-100">
                        <td class="px-6 py-4">2019.12.16</td>
                        <td class="px-6 py-4"><a class="text-zinc-300 hover:text-zinc-400 duration-100" href="{{asset('./pdf/tarsulasrol/tarsulasulesek/2019/20191216.zip')}}">link</a></td>
                    </tr>
                    <tr class="bg-white border-b bg-zinc-800 border-gray-700 hover:bg-zinc-600 ease-in duration-100">
                        <td class="px-6 py-4">2019.11.29</td>
                        <td class="px-6 py-4"><a class="text-zinc-300 hover:text-zinc-400 duration-100" href="{{asset('./pdf/tarsulasrol/tarsulasulesek/2019/20191129.zip')}}">link</a></td>
                    </tr>
                    <tr class="bg-white border-b bg-zinc-800 border-gray-700 hover:bg-zinc-600 ease-in duration-100">
                        <td class="px-6 py-4">2019.11.14</td>
                        <td class="px-6 py-4"><a class="text-zinc-300 hover:text-zinc-400 duration-100" href="{{asset('./pdf/tarsulasrol/tarsulasulesek/2019/20191114.zip')}}">link</a></td>
                    </tr>
                    <tr class="bg-white border-b bg-zinc-800 border-gray-700 hover:bg-zinc-600 ease-in duration-100">
                        <td class="px-6 py-4">2019.09.04</td>
                        <td class="px-6 py-4"><a class="text-zinc-300 hover:text-zinc-400 duration-100" href="{{asset('./pdf/tarsulasrol/tarsulasulesek/2019/20190904.zip')}}">link</a></td>
                    </tr>
                    <tr class="bg-white border-b bg-zinc-800 border-gray-700 hover:bg-zinc-600 ease-in duration-100">
                        <td class="px-6 py-4">2019.05.22</td>
                        <td class="px-6 py-4"><a class="text-zinc-300 hover:text-zinc-400 duration-100" href="{{asset('./pdf/tarsulasrol/tarsulasulesek/2019/20190522.zip')}}">link</a></td>
                    </tr>
                    <tr class="bg-white border-b bg-zinc-800 border-gray-700 hover:bg-zinc-600 ease-in duration-100">
                        <td class="px-6 py-4">2019.02.11</td>
                        <td class="px-6 py-4"><a class="text-zinc-300 hover:text-zinc-400 duration-100" href="{{asset('./pdf/tarsulasrol/tarsulasulesek/2019/20190221.zip')}}">link</a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        {{-- 2018 --}}
        <div>
            <h1 class="text-2xl font-bold text-zinc-700 mb-3 mt-10 text-center">2018 év</h1>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg max-[1100px]:w-full w-max mx-auto">
                <table id="table" class="w-max max-[1100px]:w-full text-base text-left text-zinc-300 text-zinc-300">
                    <thead class="text-base text-emerald-500 uppercase bg-zinc-700 border-b border-zinc-800">
                    <tr>
                        <th scope="col" class="px-6 py-3 w-64">Év</th>
                        <th scope="col" class="px-6 py-3 w-72">Fájl</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="bg-white border-b bg-zinc-800 border-gray-700 hover:bg-zinc-700 ease-in duration-100">
                        <td class="px-6 py-4">2018.12.17</td>
                        <td class="px-6 py-4"><a class="text-zinc-300 hover:text-zinc-400 duration-100" href="{{asset('./pdf/tarsulasrol/tarsulasulesek/2018/20181217.zip')}}">link</a></td>
                    </tr>
                    <tr class="bg-white border-b bg-zinc-800 border-gray-700 hover:bg-zinc-600 ease-in duration-100">
                        <td class="px-6 py-4">2018.10.17</td>
                        <td class="px-6 py-4"><a class="text-zinc-300 hover:text-zinc-400 duration-100" href="{{asset('./pdf/tarsulasrol/tarsulasulesek/2018/20181017.zip')}}">link</a></td>
                    </tr>
                    <tr class="bg-white border-b bg-zinc-800 border-gray-700 hover:bg-zinc-600 ease-in duration-100">
                        <td class="px-6 py-4">2018.05.16</td>
                        <td class="px-6 py-4"><a class="text-zinc-300 hover:text-zinc-400 duration-100" href="{{asset('./pdf/tarsulasrol/tarsulasulesek/2018/20180516.zip')}}">link</a></td>
                    </tr>
                    <tr class="bg-white border-b bg-zinc-800 border-gray-700 hover:bg-zinc-600 ease-in duration-100">
                        <td class="px-6 py-4">2018.02.27</td>
                        <td class="px-6 py-4"><a class="text-zinc-300 hover:text-zinc-400 duration-100" href="{{asset('./pdf/tarsulasrol/tarsulasulesek/2018/20180227.zip')}}">link</a></td>
                    </tr>
                    <tr class="bg-white border-b bg-zinc-800 border-gray-700 hover:bg-zinc-600 ease-in duration-100">
                        <td class="px-6 py-4">2018.02.01</td>
                        <td class="px-6 py-4"><a class="text-zinc-300 hover:text-zinc-400 duration-100" href="{{asset('./pdf/tarsulasrol/tarsulasulesek/2018/20180201.zip')}}">link</a></td>
                    </tr>
                    <tr class="bg-white border-b bg-zinc-800 border-gray-700 hover:bg-zinc-600 ease-in duration-100">
                        <td class="px-6 py-4">2018.01.24</td>
                        <td class="px-6 py-4"><a class="text-zinc-300 hover:text-zinc-400 duration-100" href="{{asset('./pdf/tarsulasrol/tarsulasulesek/2018/20180124.zip')}}">link</a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        {{-- 2017 --}}
        <div>
            <h1 class="text-2xl font-bold text-zinc-700 mb-3 mt-10 text-center">2017 év</h1>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg max-[1100px]:w-full w-max mx-auto">
                <table id="table" class="w-max max-[1100px]:w-full text-base text-left text-zinc-300 text-zinc-300">
                    <thead class="text-base text-emerald-500 uppercase bg-zinc-700 border-b border-zinc-800">
                    <tr>
                        <th scope="col" class="px-6 py-3 w-64">Év</th>
                        <th scope="col" class="px-6 py-3 w-72">Fájl</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="bg-white border-b bg-zinc-800 border-gray-700 hover:bg-zinc-700 ease-in duration-100">
                        <td class="px-6 py-4">2017.12.18</td>
                        <td class="px-6 py-4"><a class="text-zinc-300 hover:text-zinc-400 duration-100" href="{{asset('./pdf/tarsulasrol/tarsulasulesek/2017/20171218.zip')}}">link</a></td>
                    </tr>
                    <tr class="bg-white border-b bg-zinc-800 border-gray-700 hover:bg-zinc-600 ease-in duration-100">
                        <td class="px-6 py-4">2017.11.21</td>
                        <td class="px-6 py-4"><a class="text-zinc-300 hover:text-zinc-400 duration-100" href="{{asset('./pdf/tarsulasrol/tarsulasulesek/2017/20171121.zip')}}">link</a></td>
                    </tr>
                    <tr class="bg-white border-b bg-zinc-800 border-gray-700 hover:bg-zinc-600 ease-in duration-100">
                        <td class="px-6 py-4">2017.05.30</td>
                        <td class="px-6 py-4"><a class="text-zinc-300 hover:text-zinc-400 duration-100" href="{{asset('./pdf/tarsulasrol/tarsulasulesek/2017/20170530.zip')}}">link</a></td>
                    </tr>
                    <tr class="bg-white border-b bg-zinc-800 border-gray-700 hover:bg-zinc-600 ease-in duration-100">
                        <td class="px-6 py-4">2017.03.29</td>
                        <td class="px-6 py-4"><a class="text-zinc-300 hover:text-zinc-400 duration-100" href="{{asset('./pdf/tarsulasrol/tarsulasulesek/2017/20170329.zip')}}">link</a></td>
                    </tr>
                    <tr class="bg-white border-b bg-zinc-800 border-gray-700 hover:bg-zinc-600 ease-in duration-100">
                        <td class="px-6 py-4">2017.03.07</td>
                        <td class="px-6 py-4"><a class="text-zinc-300 hover:text-zinc-400 duration-100" href="{{asset('./pdf/tarsulasrol/tarsulasulesek/2017/20170307.zip')}}">link</a></td>
                    </tr>
                    <tr class="bg-white border-b bg-zinc-800 border-gray-700 hover:bg-zinc-600 ease-in duration-100">
                        <td class="px-6 py-4">2017.01.31</td>
                        <td class="px-6 py-4"><a class="text-zinc-300 hover:text-zinc-400 duration-100" href="{{asset('./pdf/tarsulasrol/tarsulasulesek/2017/20170131.zip')}}">link</a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        {{-- 2016 --}}
        <div>
            <h1 class="text-2xl font-bold text-zinc-700 mb-3 mt-10 text-center">2016 év</h1>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg max-[1100px]:w-full w-max mx-auto">
                <table id="table" class="w-max max-[1100px]:w-full text-base text-left text-zinc-300 text-zinc-300">
                    <thead class="text-base text-emerald-500 uppercase bg-zinc-700 border-b border-zinc-800">
                    <tr>
                        <th scope="col" class="px-6 py-3 w-64">Év</th>
                        <th scope="col" class="px-6 py-3 w-72">Fájl</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="bg-white border-b bg-zinc-800 border-gray-700 hover:bg-zinc-700 ease-in duration-100">
                        <td class="px-6 py-4">2016.12.19</td>
                        <td class="px-6 py-4"><a class="text-zinc-300 hover:text-zinc-400 duration-100" href="{{asset('./pdf/tarsulasrol/tarsulasulesek/2016/20161219.zip')}}">link</a></td>
                    </tr>
                    <tr class="bg-white border-b bg-zinc-800 border-gray-700 hover:bg-zinc-600 ease-in duration-100">
                        <td class="px-6 py-4">2016.11.30</td>
                        <td class="px-6 py-4"><a class="text-zinc-300 hover:text-zinc-400 duration-100" href="{{asset('./pdf/tarsulasrol/tarsulasulesek/2016/20161130.zip')}}">link</a></td>
                    </tr>
                    <tr class="bg-white border-b bg-zinc-800 border-gray-700 hover:bg-zinc-600 ease-in duration-100">
                        <td class="px-6 py-4">2016.11.03</td>
                        <td class="px-6 py-4"><a class="text-zinc-300 hover:text-zinc-400 duration-100" href="{{asset('./pdf/tarsulasrol/tarsulasulesek/2016/20161103.zip')}}">link</a></td>
                    </tr>
                    <tr class="bg-white border-b bg-zinc-800 border-gray-700 hover:bg-zinc-600 ease-in duration-100">
                        <td class="px-6 py-4">2016.09.20</td>
                        <td class="px-6 py-4"><a class="text-zinc-300 hover:text-zinc-400 duration-100" href="{{asset('./pdf/tarsulasrol/tarsulasulesek/2016/20160920.zip')}}">link</a></td>
                    </tr>
                    <tr class="bg-white border-b bg-zinc-800 border-gray-700 hover:bg-zinc-600 ease-in duration-100">
                        <td class="px-6 py-4">2016.05.02</td>
                        <td class="px-6 py-4"><a class="text-zinc-300 hover:text-zinc-400 duration-100" href="{{asset('./pdf/tarsulasrol/tarsulasulesek/2016/20160502.zip')}}">link</a></td>
                    </tr>
                    <tr class="bg-white border-b bg-zinc-800 border-gray-700 hover:bg-zinc-600 ease-in duration-100">
                        <td class="px-6 py-4">2016.02.17</td>
                        <td class="px-6 py-4"><a class="text-zinc-300 hover:text-zinc-400 duration-100" href="{{asset('./pdf/tarsulasrol/tarsulasulesek/2016/20160217.zip')}}">link</a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        {{-- 2015 --}}
        <div>
            <h1 class="text-2xl font-bold text-zinc-700 mb-3 mt-10 text-center">2015 év</h1>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg max-[1100px]:w-full w-max mx-auto">
                <table id="table" class="w-max max-[1100px]:w-full text-base text-left text-zinc-300 text-zinc-300">
                    <thead class="text-base text-emerald-500 uppercase bg-zinc-700 border-b border-zinc-800">
                    <tr>
                        <th scope="col" class="px-6 py-3 w-64">Év</th>
                        <th scope="col" class="px-6 py-3 w-72">Fájl</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="bg-white border-b bg-zinc-800 border-gray-700 hover:bg-zinc-700 ease-in duration-100">
                        <td class="px-6 py-4">2015.12.17</td>
                        <td class="px-6 py-4"><a class="text-zinc-300 hover:text-zinc-400 duration-100" href="{{asset('./pdf/tarsulasrol/tarsulasulesek/2015/20151217.zip')}}">link</a></td>
                    </tr>
                    <tr class="bg-white border-b bg-zinc-800 border-gray-700 hover:bg-zinc-600 ease-in duration-100">
                        <td class="px-6 py-4">2015.11.24</td>
                        <td class="px-6 py-4"><a class="text-zinc-300 hover:text-zinc-400 duration-100" href="{{asset('./pdf/tarsulasrol/tarsulasulesek/2015/20151124.zip')}}">link</a></td>
                    </tr>
                    <tr class="bg-white border-b bg-zinc-800 border-gray-700 hover:bg-zinc-600 ease-in duration-100">
                        <td class="px-6 py-4">2015.10.01</td>
                        <td class="px-6 py-4"><a class="text-zinc-300 hover:text-zinc-400 duration-100" href="{{asset('./pdf/tarsulasrol/tarsulasulesek/2015/20151001.zip')}}">link</a></td>
                    </tr>
                    <tr class="bg-white border-b bg-zinc-800 border-gray-700 hover:bg-zinc-600 ease-in duration-100">
                        <td class="px-6 py-4">2015.05.04</td>
                        <td class="px-6 py-4"><a class="text-zinc-300 hover:text-zinc-400 duration-100" href="{{asset('./pdf/tarsulasrol/tarsulasulesek/2015/20150504.zip')}}">link</a></td>
                    </tr>
                    <tr class="bg-white border-b bg-zinc-800 border-gray-700 hover:bg-zinc-600 ease-in duration-100">
                        <td class="px-6 py-4">2015.04.23</td>
                        <td class="px-6 py-4"><a class="text-zinc-300 hover:text-zinc-400 duration-100" href="{{asset('./pdf/tarsulasrol/tarsulasulesek/2015/20150423.zip')}}">link</a></td>
                    </tr>
                    <tr class="bg-white border-b bg-zinc-800 border-gray-700 hover:bg-zinc-600 ease-in duration-100">
                        <td class="px-6 py-4">2015.02.18</td>
                        <td class="px-6 py-4"><a class="text-zinc-300 hover:text-zinc-400 duration-100" href="{{asset('./pdf/tarsulasrol/tarsulasulesek/2015/20150218.zip')}}">link</a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        {{-- 2014 --}}
        <div>
            <h1 class="text-2xl font-bold text-zinc-700 mb-3 mt-10 text-center">2014 év</h1>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg max-[1100px]:w-full w-max mx-auto">
                <table id="table" class="w-max max-[1100px]:w-full text-base text-left text-zinc-300 text-zinc-300">
                    <thead class="text-base text-emerald-500 uppercase bg-zinc-700 border-b border-zinc-800">
                    <tr>
                        <th scope="col" class="px-6 py-3 w-64">Év</th>
                        <th scope="col" class="px-6 py-3 w-72">Fájl</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="bg-white border-b bg-zinc-800 border-gray-700 hover:bg-zinc-700 ease-in duration-100">
                        <td class="px-6 py-4">2014.12.17</td>
                        <td class="px-6 py-4"><a class="text-zinc-300 hover:text-zinc-400 duration-100" href="{{asset('./pdf/tarsulasrol/tarsulasulesek/2014/20141217.zip')}}">link</a></td>
                    </tr>
                    <tr class="bg-white border-b bg-zinc-800 border-gray-700 hover:bg-zinc-600 ease-in duration-100">
                        <td class="px-6 py-4">2014.11.28</td>
                        <td class="px-6 py-4"><a class="text-zinc-300 hover:text-zinc-400 duration-100" href="{{asset('./pdf/tarsulasrol/tarsulasulesek/2014/20141128.zip')}}">link</a></td>
                    </tr>
                    <tr class="bg-white border-b bg-zinc-800 border-gray-700 hover:bg-zinc-600 ease-in duration-100">
                        <td class="px-6 py-4">2014.09.22</td>
                        <td class="px-6 py-4"><a class="text-zinc-300 hover:text-zinc-400 duration-100" href="{{asset('./pdf/tarsulasrol/tarsulasulesek/2014/20140922.zip')}}">link</a></td>
                    </tr>
                    <tr class="bg-white border-b bg-zinc-800 border-gray-700 hover:bg-zinc-600 ease-in duration-100">
                        <td class="px-6 py-4">2014.04.15</td>
                        <td class="px-6 py-4"><a class="text-zinc-300 hover:text-zinc-400 duration-100" href="{{asset('./pdf/tarsulasrol/tarsulasulesek/2014/20140415.zip')}}">link</a></td>
                    </tr>
                    <tr class="bg-white border-b bg-zinc-800 border-gray-700 hover:bg-zinc-600 ease-in duration-100">
                        <td class="px-6 py-4">2014.02.24</td>
                        <td class="px-6 py-4"><a class="text-zinc-300 hover:text-zinc-400 duration-100" href="{{asset('./pdf/tarsulasrol/tarsulasulesek/2014/20140224.zip')}}">link</a></td>
                    </tr>
                    <tr class="bg-white border-b bg-zinc-800 border-gray-700 hover:bg-zinc-600 ease-in duration-100">
                        <td class="px-6 py-4">2014.02.13</td>
                        <td class="px-6 py-4"><a class="text-zinc-300 hover:text-zinc-400 duration-100" href="{{asset('./pdf/tarsulasrol/tarsulasulesek/2014/20140213.zip')}}">link</a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        {{-- 2013 --}}
        <div>
            <h1 class="text-2xl font-bold text-zinc-700 mb-3 mt-10 text-center">2013 év</h1>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg max-[1100px]:w-full w-max mx-auto">
                <table id="table" class="w-max max-[1100px]:w-full text-base text-left text-zinc-300 text-zinc-300">
                    <thead class="text-base text-emerald-500 uppercase bg-zinc-700 border-b border-zinc-800">
                    <tr>
                        <th scope="col" class="px-6 py-3 w-64">Év</th>
                        <th scope="col" class="px-6 py-3 w-72">Fájl</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="bg-white border-b bg-zinc-800 border-gray-700 hover:bg-zinc-700 ease-in duration-100">
                        <td class="px-6 py-4">2013.12.30</td>
                        <td class="px-6 py-4"><a class="text-zinc-300 hover:text-zinc-400 duration-100" href="{{asset('./pdf/tarsulasrol/tarsulasulesek/2013/20131230.zip')}}">link</a></td>
                    </tr>
                    <tr class="bg-white border-b bg-zinc-800 border-gray-700 hover:bg-zinc-600 ease-in duration-100">
                        <td class="px-6 py-4">2013.11.22</td>
                        <td class="px-6 py-4"><a class="text-zinc-300 hover:text-zinc-400 duration-100" href="{{asset('./pdf/tarsulasrol/tarsulasulesek/2013/20131122.zip')}}">link</a></td>
                    </tr>
                    <tr class="bg-white border-b bg-zinc-800 border-gray-700 hover:bg-zinc-600 ease-in duration-100">
                        <td class="px-6 py-4">2013.11.15</td>
                        <td class="px-6 py-4"><a class="text-zinc-300 hover:text-zinc-400 duration-100" href="{{asset('./pdf/tarsulasrol/tarsulasulesek/2013/20131115.zip')}}">link</a></td>
                    </tr>
                    <tr class="bg-white border-b bg-zinc-800 border-gray-700 hover:bg-zinc-600 ease-in duration-100">
                        <td class="px-6 py-4">2013.09.18</td>
                        <td class="px-6 py-4"><a class="text-zinc-300 hover:text-zinc-400 duration-100" href="{{asset('./pdf/tarsulasrol/tarsulasulesek/2013/20130918.zip')}}">link</a></td>
                    </tr>
                    <tr class="bg-white border-b bg-zinc-800 border-gray-700 hover:bg-zinc-600 ease-in duration-100">
                        <td class="px-6 py-4">2013.04.15</td>
                        <td class="px-6 py-4"><a class="text-zinc-300 hover:text-zinc-400 duration-100" href="{{asset('./pdf/tarsulasrol/tarsulasulesek/2013/20130415.zip')}}">link</a></td>
                    </tr>
                    <tr class="bg-white border-b bg-zinc-800 border-gray-700 hover:bg-zinc-600 ease-in duration-100">
                        <td class="px-6 py-4">2013.03.07</td>
                        <td class="px-6 py-4"><a class="text-zinc-300 hover:text-zinc-400 duration-100" href="{{asset('./pdf/tarsulasrol/tarsulasulesek/2013/20130307.zip')}}">link</a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        {{-- 2012 --}}
        <div>
            <h1 class="text-2xl font-bold text-zinc-700 mb-3 mt-10 text-center">2012 év</h1>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg max-[1100px]:w-full w-max mx-auto">
                <table id="table" class="w-max max-[1100px]:w-full text-base text-left text-zinc-300 text-zinc-300">
                    <thead class="text-base text-emerald-500 uppercase bg-zinc-700 border-b border-zinc-800">
                    <tr>
                        <th scope="col" class="px-6 py-3 w-64">Év</th>
                        <th scope="col" class="px-6 py-3 w-72">Fájl</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="bg-white border-b bg-zinc-800 border-gray-700 hover:bg-zinc-700 ease-in duration-100">
                        <td class="px-6 py-4">2012.11.15</td>
                        <td class="px-6 py-4"><a class="text-zinc-300 hover:text-zinc-400 duration-100" href="{{asset('./pdf/tarsulasrol/tarsulasulesek/2012/20121115.zip')}}">link</a></td>
                    </tr>
                    <tr class="bg-white border-b bg-zinc-800 border-gray-700 hover:bg-zinc-600 ease-in duration-100">
                        <td class="px-6 py-4">2012.09.13</td>
                        <td class="px-6 py-4"><a class="text-zinc-300 hover:text-zinc-400 duration-100" href="{{asset('./pdf/tarsulasrol/tarsulasulesek/2012/20120913.zip')}}">link</a></td>
                    </tr>
                    <tr class="bg-white border-b bg-zinc-800 border-gray-700 hover:bg-zinc-600 ease-in duration-100">
                        <td class="px-6 py-4">2012.07.05</td>
                        <td class="px-6 py-4"><a class="text-zinc-300 hover:text-zinc-400 duration-100" href="{{asset('./pdf/tarsulasrol/tarsulasulesek/2012/20120705.zip')}}">link</a></td>
                    </tr>
                    <tr class="bg-white border-b bg-zinc-800 border-gray-700 hover:bg-zinc-600 ease-in duration-100">
                        <td class="px-6 py-4">2012.03.26</td>
                        <td class="px-6 py-4"><a class="text-zinc-300 hover:text-zinc-400 duration-100" href="{{asset('./pdf/tarsulasrol/tarsulasulesek/2012/20120326.zip')}}">link</a></td>
                    </tr>
                    <tr class="bg-white border-b bg-zinc-800 border-gray-700 hover:bg-zinc-600 ease-in duration-100">
                        <td class="px-6 py-4">2012.01.12</td>
                        <td class="px-6 py-4"><a class="text-zinc-300 hover:text-zinc-400 duration-100" href="{{asset('./pdf/tarsulasrol/tarsulasulesek/2012/20120112.zip')}}">link</a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        {{-- 2011 --}}
        <div>
            <h1 class="text-2xl font-bold text-zinc-700 mb-3 mt-10 text-center">2011 év</h1>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg max-[1100px]:w-full w-max mx-auto">
                <table id="table" class="w-max max-[1100px]:w-full text-base text-left text-zinc-300 text-zinc-300">
                    <thead class="text-base text-emerald-500 uppercase bg-zinc-700 border-b border-zinc-800">
                    <tr>
                        <th scope="col" class="px-6 py-3 w-64">Év</th>
                        <th scope="col" class="px-6 py-3 w-72">Fájl</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="bg-white border-b bg-zinc-800 border-gray-700 hover:bg-zinc-700 ease-in duration-100">
                        <td class="px-6 py-4">2011.11.15</td>
                        <td class="px-6 py-4"><a class="text-zinc-300 hover:text-zinc-400 duration-100" href="{{asset('./pdf/tarsulasrol/tarsulasulesek/2011/20111115.zip')}}">link</a></td>
                    </tr>
                    <tr class="bg-white border-b bg-zinc-800 border-gray-700 hover:bg-zinc-600 ease-in duration-100">
                        <td class="px-6 py-4">2011.09.08</td>
                        <td class="px-6 py-4"><a class="text-zinc-300 hover:text-zinc-400 duration-100" href="{{asset('./pdf/tarsulasrol/tarsulasulesek/2011/20110908.zip')}}">link</a></td>
                    </tr>
                    <tr class="bg-white border-b bg-zinc-800 border-gray-700 hover:bg-zinc-600 ease-in duration-100">
                        <td class="px-6 py-4">2011.06.27</td>
                        <td class="px-6 py-4"><a class="text-zinc-300 hover:text-zinc-400 duration-100" href="{{asset('./pdf/tarsulasrol/tarsulasulesek/2011/20110627.zip')}}">link</a></td>
                    </tr>
                    <tr class="bg-white border-b bg-zinc-800 border-gray-700 hover:bg-zinc-600 ease-in duration-100">
                        <td class="px-6 py-4">2011.03.30</td>
                        <td class="px-6 py-4"><a class="text-zinc-300 hover:text-zinc-400 duration-100" href="{{asset('./pdf/tarsulasrol/tarsulasulesek/2011/20110330.zip')}}">link</a></td>
                    </tr>
                    <tr class="bg-white border-b bg-zinc-800 border-gray-700 hover:bg-zinc-600 ease-in duration-100">
                        <td class="px-6 py-4">2011.02.02</td>
                        <td class="px-6 py-4"><a class="text-zinc-300 hover:text-zinc-400 duration-100" href="{{asset('./pdf/tarsulasrol/tarsulasulesek/2011/20110202.zip')}}">link</a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        {{-- 2010 --}}
        <div>
            <h1 class="text-2xl font-bold text-zinc-700 mb-3 mt-10 text-center">2010 év</h1>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg max-[1100px]:w-full w-max mx-auto">
                <table id="table" class="w-max max-[1100px]:w-full text-base text-left text-zinc-300 text-zinc-300">
                    <thead class="text-base text-emerald-500 uppercase bg-zinc-700 border-b border-zinc-800">
                    <tr>
                        <th scope="col" class="px-6 py-3 w-64">Év</th>
                        <th scope="col" class="px-6 py-3 w-72">Fájl</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="bg-white border-b bg-zinc-800 border-gray-700 hover:bg-zinc-700 ease-in duration-100">
                        <td class="px-6 py-4">2010.11.10</td>
                        <td class="px-6 py-4"><a class="text-zinc-300 hover:text-zinc-400 duration-100" href="{{asset('./pdf/tarsulasrol/tarsulasulesek/2010/20101110.zip')}}">link</a></td>
                    </tr>
                    <tr class="bg-white border-b bg-zinc-800 border-gray-700 hover:bg-zinc-600 ease-in duration-100">
                        <td class="px-6 py-4">2010.09.30</td>
                        <td class="px-6 py-4"><a class="text-zinc-300 hover:text-zinc-400 duration-100" href="{{asset('./pdf/tarsulasrol/tarsulasulesek/2010/20100930.zip')}}">link</a></td>
                    </tr>
                    <tr class="bg-white border-b bg-zinc-800 border-gray-700 hover:bg-zinc-600 ease-in duration-100">
                        <td class="px-6 py-4">2010.07.19</td>
                        <td class="px-6 py-4"><a class="text-zinc-300 hover:text-zinc-400 duration-100" href="{{asset('./pdf/tarsulasrol/tarsulasulesek/2010/20100719.zip')}}">link</a></td>
                    </tr>
                    <tr class="bg-white border-b bg-zinc-800 border-gray-700 hover:bg-zinc-600 ease-in duration-100">
                        <td class="px-6 py-4">2010.04.01</td>
                        <td class="px-6 py-4"><a class="text-zinc-300 hover:text-zinc-400 duration-100" href="{{asset('./pdf/tarsulasrol/tarsulasulesek/2010/20100401.zip')}}">link</a></td>
                    </tr>
                    <tr class="bg-white border-b bg-zinc-800 border-gray-700 hover:bg-zinc-600 ease-in duration-100">
                        <td class="px-6 py-4">2010.01.13</td>
                        <td class="px-6 py-4"><a class="text-zinc-300 hover:text-zinc-400 duration-100" href="{{asset('./pdf/tarsulasrol/tarsulasulesek/2010/20100113.zip')}}">link</a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        {{-- 2009 --}}
        <div>
            <h1 class="text-2xl font-bold text-zinc-700 mb-3 mt-10 text-center">2009 év</h1>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg max-[1100px]:w-full w-max mx-auto">
                <table id="table" class="w-max max-[1100px]:w-full text-base text-left text-zinc-300 text-zinc-300">
                    <thead class="text-base text-emerald-500 uppercase bg-zinc-700 border-b border-zinc-800">
                    <tr>
                        <th scope="col" class="px-6 py-3 w-64">Év</th>
                        <th scope="col" class="px-6 py-3 w-72">Fájl</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="bg-white border-b bg-zinc-800 border-gray-700 hover:bg-zinc-700 ease-in duration-100">
                        <td class="px-6 py-4">2009.12.14</td>
                        <td class="px-6 py-4"><a class="text-zinc-300 hover:text-zinc-400 duration-100" href="{{asset('./pdf/tarsulasrol/tarsulasulesek/2009/20091214.zip')}}">link</a></td>
                    </tr>
                    <tr class="bg-white border-b bg-zinc-800 border-gray-700 hover:bg-zinc-600 ease-in duration-100">
                        <td class="px-6 py-4">2009.11.10</td>
                        <td class="px-6 py-4"><a class="text-zinc-300 hover:text-zinc-400 duration-100" href="{{asset('./pdf/tarsulasrol/tarsulasulesek/2009/20091110.zip')}}">link</a></td>
                    </tr>
                    <tr class="bg-white border-b bg-zinc-800 border-gray-700 hover:bg-zinc-600 ease-in duration-100">
                        <td class="px-6 py-4">2009.08.11</td>
                        <td class="px-6 py-4"><a class="text-zinc-300 hover:text-zinc-400 duration-100" href="{{asset('./pdf/tarsulasrol/tarsulasulesek/2009/20090811.zip')}}">link</a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
</div>
@endsection