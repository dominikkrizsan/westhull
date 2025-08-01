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
        <h2 class="text-zinc-300 text-xl max-[500px]:text-lg max-[500px]:text-center">Projektről</h2>
        <h1 class="text-zinc-300 text-6xl font-bold max-[900px]:text-4xl max-[500px]:text-2xl max-[500px]:text-center">Projekt Előkészítés</h1>
        <div class="flex gap-4 text-xl max-[500px]:text-lg max-[500px]:text-center">
            <a class="text-zinc-300 hover:text-zinc-100 ease-all duration-200" href="{{ url('/')}}">Kezdőlap</a>
            <p class="text-zinc-300">/</p>
            <p class="text-zinc-400">Projekt Előkészítés</p>
        </div>
    </div>
</div>
<div class="px-2 py-5 bg-zinc-200">
    <div
        class="max-[1280px]:px-3 xl:mx-auto xl:w-128 flex flex-col items-start justify-center mx-auto min-h-8/12 mt-4 gap-3"
    >
        <!-- rovid bemutatas -->
        
        <p class="text-lg">
        Az államháztartás pénzeszközeinek felhasználásával, az államháztartáshoz tartozó vagyonnal történő gazdálkodással összefüggő, nettó ötmillió forintot elérő, vagy azt meghaladó értékű árubeszerzésre, építési beruházásra, szolgáltatás megrendelésére vonatkozó szerződések adatai.
        </p>  
        <a class="mt-5" href="{{ asset('./img/keopxyxy/üvegzseb_250730.xlsx') }}">
                <img class=""
                src="{{ asset('./img/keopxyxy/ujproj_uj.png') }}"
                alt="">
        </a>
    </div>
    @endsection
</div>
