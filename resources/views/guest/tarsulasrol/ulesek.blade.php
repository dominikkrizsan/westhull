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
    <h1 class="text-2xl font-bold text-zinc-700 mb-3 mt-10 text-center">2022 év</h1>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg w-max mx-auto">
        <table id="table" class="w-max text-base text-left text-zinc-300 text-zinc-300">
            <thead class="text-base text-emerald-500 uppercase bg-zinc-700">
            <tr>
                <th scope="col" class="px-6 py-3 w-64">Év</th>
                <th scope="col" class="px-6 py-3 w-72">Fájl</th>
            </tr>
            </thead>
            <tbody>
            <tr class="bg-white border-b bg-zinc-800 border-gray-700 hover:bg-zinc-700 hover:bg-zinc-700 ease-in duration-100">
                <td class="px-6 py-4">2022.05.03</td>
                <td class="px-6 py-4">link</td>
            </tr>
            <tr class="bg-white border-b bg-zinc-800 border-gray-700 hover:bg-zinc-700 hover:bg-zinc-700 ease-in duration-100">
                <td class="px-6 py-4">2022.02.28</td>
                <td class="px-6 py-4">link</td>
            </tr>
            <tr class="bg-white border-b bg-zinc-800 border-gray-700 hover:bg-zinc-700 hover:bg-zinc-700 ease-in duration-100">
                <td class="px-6 py-4">2022.02.01</td>
                <td class="px-6 py-4">link</td>
            </tr>
            </tbody>
        </table>
    </div>
    </div>
</div>
@endsection