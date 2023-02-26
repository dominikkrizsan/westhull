@extends('layout.app') @section('content')
<div class="px-2 py-5 bg-white dark:bg-zinc-200">
    <div
        class="container w-4/5 flex flex-col items-start justify-center mx-auto min-h-8/12 mt-4 gap-3"
    >
    <!-- rekultivacio 2015 -->
    <div class="grid grid-cols-2 justify-items-stretch items-center gap-10">
        <div>
            <h1 class="text-2xl font-bold text-emerald-600 mb-5">Rekultiváció 2015.</h1>
            <h2 class="text-xl font-bold my-3">A projekt neve:</h2>
            <p class="text-lg">Sopron térségi települési szilárdhulladék-lerakók rekultivációja” Sopron – Vas Konzorcium 2015.</p>
            <h2 class="text-xl font-bold my-3">A projekt célja:</h2>
            <p class="text-lg">A 100%-os támogatottságú, az Európai Kohéziós Alapból finanszírozott beruházás során 10 bevont település régen felhagyott hulladéklerakója egy tényleges lezárást kap, melynek legfelső rétege humuszban gazdag termőtalaj lesz. További egy településen teljes hulladéklerakó felszámolása, egy településen talajvíz – figyelő kutak felállítása a cél. A soproni lerakó rekultiválása a projektben a legnagyobb feladat. A 60 000 m2-es terület ideiglenes zárást kap ebben a pályázatban, ugyanis a lerakó még a közelmúltban fogadott be hulladékot és a lerakott hulladékban zajló biológiai folyamatok miatt a fedőrétegek mozoghatnak.</p>
            <h2 class="text-xl font-bold my-3">A projekt helyszínei:</h2>
            <p class="text-lg">A beruházási helyszínek: Sopron, Alsóújlak, Bozzai, Duka, Harasztifalu, Kisrákos, Kemenespálfa, Ölbő, Pankasz, Rum, Sajtoskál, Szentgotthárd, Torony</p>
            <h2 class="text-xl font-bold my-3">Sajtóanyagok:</h2>
            <h3 class="text-lg my-2">Sopron:</h3>
            <div class="flex flex-col gap-2">
                <a class="text-lg text-emerald-500 hover:text-emerald-400 ease-in duration-200" target="__blank" href="https://www.kisalfold.hu/soproni_hirek/ujabb_13_telepules_hulladekkezelese_valik_biztonsagosabba/2451546/">Kisalföld.hu - Soproni hírek</a>
                <a class="text-lg text-emerald-500 hover:text-emerald-400 ease-in duration-200" target="__blank" href="https://www.sopronitema.hu/zold-sopron/5044-13-hulladeklerakot-rekultivalnak.html">Sopronitéma.hu - zöld-sopron</a>
                <a class="text-lg text-emerald-500 hover:text-emerald-400 ease-in duration-200" target="__blank" href="http://www.corvinusradio.hu/hu/hirek/13501/ujabb_13_telepules_hulladekkezelese_valik_biiztonsagosabba.html">CorvinusRádió.hu</a>
                <a class="text-lg text-emerald-500 hover:text-emerald-400 ease-in duration-200" target="__blank" href="http://www.sopron-blog.hu/visszaadtak-a-termeszetnek-sopronban-a-harkai-uti-a-lerakot-sopron">Sopron-Blog.hu</a>
                <a class="text-lg text-emerald-500 hover:text-emerald-400 ease-in duration-200" target="__blank" href="">Soproni hírek</a>
            </div>
            <h3 class="text-lg my-2">Szombathely:</h3>
            <div class="flex flex-col gap-2">
                <a class="text-lg text-emerald-500 hover:text-emerald-400 ease-in duration-200" target="__blank" href="https://www.youtube.com/watch?v=yOYQosvBmGI">Szombathely Televízió</a>
                <a class="text-lg text-emerald-500 hover:text-emerald-400 ease-in duration-200" target="__blank" href="https://www.facebook.com/Regio1.hu/?ref=bookmarks">Facebook</a>
                <a class="text-lg text-emerald-500 hover:text-emerald-400 ease-in duration-200" target="__blank" href="https://frissvideok.hu/regionalis/694046-video-sopron-vas-2015-konzorcium-rekultivacios-hulladekgazdalkodasi-projekt">Frissvideók.hu</a>
                <a class="text-lg text-emerald-500 hover:text-emerald-400 ease-in duration-200" target="__blank" href="https://www.vaol.hu/hirek/2015/11/12-vasi-telepules-hulladeklerakoja-ujul-meg">Vaol.hu</a>
                <a class="text-lg text-emerald-500 hover:text-emerald-400 ease-in duration-200" target="__blank" href="{{asset('./pdf/keop230/rekultivacio/szombathelyi7_2015_44.pdf')}}">Szombathelyi 7</a>
            </div>
            <h2 class="text-xl font-bold my-3">Sajtóközlemények:</h2>
            <div class="flex flex-col gap-2">
                <a class="text-lg text-emerald-500 hover:text-emerald-400 ease-in duration-200" target="__blank" href="{{asset('./pdf/keop230/rekultivacio/sajtokozlemeny_KEOP_2_3_0_2F_2008_0006_1.pdf')}}">Sajtóközlemény - 2015 december 02.</a>
                <a class="text-lg text-emerald-500 hover:text-emerald-400 ease-in duration-200" target="__blank" href="{{asset('./pdf/keop230/rekultivacio/sajtokozlemeny_20151202_2.pdf')}}">Sajtóközlemény - 2015 október 26.</a>
            </div>
        </div>
        <img class="w-max rounded-2xl border-2 border-zinc-400" src="{{ asset('./pdf/keop230/rekultivacio/main.jpg')}}" alt="">
    </div>
    <div class="border-b border-zinc-300 w-9/12 mt-4"></div>
    <!-- galeria -->
        <div class="text-lg">
            <h1 class="text-center text-emerald-600 text-4xl my-5 font-bold">Galéria</h1>
            <div class="border-b border-emerald-300 w-64 mt-4 mb-10 mx-auto"></div>
            <h2 class="text-lg font-bold my-3 ml-3">2015.10.20 - Projektnyitas</h2>
            <div class="grid grid-cols-4 justify-content-stretch items-center gap-6">
                <img class="rounded-2xl" src="{{asset('./img/keop230/projektnyitas/1.jpg')}}" alt="">
                <img class="rounded-2xl" src="{{asset('./img/keop230/projektnyitas/2.jpg')}}" alt="">
                <img class="rounded-2xl" src="{{asset('./img/keop230/projektnyitas/3.jpg')}}" alt="">
                <img class="rounded-2xl" src="{{asset('./img/keop230/projektnyitas/4.jpg')}}" alt="">
                <img class="rounded-2xl" src="{{asset('./img/keop230/projektnyitas/5.jpg')}}" alt="">
                <img class="rounded-2xl" src="{{asset('./img/keop230/projektnyitas/6.jpg')}}" alt="">
                <img class="rounded-2xl" src="{{asset('./img/keop230/projektnyitas/7.jpg')}}" alt="">
                <img class="rounded-2xl" src="{{asset('./img/keop230/projektnyitas/8.jpg')}}" alt="">
                <img class="rounded-2xl" src="{{asset('./img/keop230/projektnyitas/9.jpg')}}" alt="">
                <img class="rounded-2xl" src="{{asset('./img/keop230/projektnyitas/10.jpg')}}" alt="">
            </div>
            <div class="border-b border-zinc-300 mb-10 w-9/12 mt-4"></div>
            <h2 class="text-lg font-bold my-3 ml-3">2015.11.18 - Sajtótájékozató</h2>
            <div class="grid grid-cols-4 justify-content-stretch items-center gap-6">
                <img class="rounded-2xl" src="{{asset('./img/keop230/sajtotajek/sajto1.jpg')}}" alt="">
                <img class="rounded-2xl" src="{{asset('./img/keop230/sajtotajek/sajto2.jpg')}}" alt="">
                <img class="rounded-2xl" src="{{asset('./img/keop230/sajtotajek/sajto3.jpg')}}" alt="">
                <img class="rounded-2xl" src="{{asset('./img/keop230/sajtotajek/sajto4.jpg')}}" alt="">
                <img class="rounded-2xl" src="{{asset('./img/keop230/sajtotajek/sajto5.jpg')}}" alt="">
                <img class="rounded-2xl" src="{{asset('./img/keop230/sajtotajek/sajto6.jpg')}}" alt="">
                <img class="rounded-2xl" src="{{asset('./img/keop230/sajtotajek/sajto7.jpg')}}" alt="">
                <img class="rounded-2xl" src="{{asset('./img/keop230/sajtotajek/sajto8.jpg')}}" alt="">
                <img class="rounded-2xl" src="{{asset('./img/keop230/sajtotajek/sajto9.jpg')}}" alt="">
                <img class="rounded-2xl" src="{{asset('./img/keop230/sajtotajek/sajto10.jpg')}}" alt="">
            </div>
            <div class="border-b border-zinc-300 mb-10 w-9/12 mt-4"></div>
            <h2 class="text-lg font-bold my-3 ml-3">2015.11.26 - Telepbejárás</h2>
            <div class="grid grid-cols-4 justify-content-stretch items-center gap-6">
                <img class="rounded-2xl" src="{{asset('./img/keop230/telepbejaras/telep1.jpg')}}" alt="">
                <img class="rounded-2xl" src="{{asset('./img/keop230/telepbejaras/telep2.jpg')}}" alt="">
                <img class="rounded-2xl" src="{{asset('./img/keop230/telepbejaras/telep3.jpg')}}" alt="">
                <img class="rounded-2xl" src="{{asset('./img/keop230/telepbejaras/telep4.jpg')}}" alt="">
                <img class="rounded-2xl" src="{{asset('./img/keop230/telepbejaras/telep5.jpg')}}" alt="">
                <img class="rounded-2xl" src="{{asset('./img/keop230/telepbejaras/telep6.jpg')}}" alt="">
                <img class="rounded-2xl" src="{{asset('./img/keop230/telepbejaras/telep7.jpg')}}" alt="">
                <img class="rounded-2xl" src="{{asset('./img/keop230/telepbejaras/telep8.jpg')}}" alt="">
                <img class="rounded-2xl" src="{{asset('./img/keop230/telepbejaras/telep9.jpg')}}" alt="">
                <img class="rounded-2xl" src="{{asset('./img/keop230/telepbejaras/telep10.jpg')}}" alt="">
            </div>
            <div class="border-b border-zinc-300 mb-10 w-9/12 mt-4"></div>
            <h2 class="text-lg font-bold my-3 ml-3">2015.12.02 - Projektzárás</h2>
            <div class="grid grid-cols-4 justify-content-stretch items-center gap-6 mb-5">
                <img class="rounded-2xl" src="{{asset('./img/keop230/projektzaras/zar1.jpg')}}" alt="">
                <img class="rounded-2xl" src="{{asset('./img/keop230/projektzaras/zar2.jpg')}}" alt="">
                <img class="rounded-2xl" src="{{asset('./img/keop230/projektzaras/zar3.jpg')}}" alt="">
                <img class="rounded-2xl" src="{{asset('./img/keop230/projektzaras/zar4.jpg')}}" alt="">
                <img class="rounded-2xl" src="{{asset('./img/keop230/projektzaras/zar5.jpg')}}" alt="">
                <img class="rounded-2xl" src="{{asset('./img/keop230/projektzaras/zar6.jpg')}}" alt="">
                <img class="rounded-2xl" src="{{asset('./img/keop230/projektzaras/zar7.jpg')}}" alt="">
                <img class="rounded-2xl" src="{{asset('./img/keop230/projektzaras/zar8.jpg')}}" alt="">
                <img class="rounded-2xl" src="{{asset('./img/keop230/projektzaras/zar9.jpg')}}" alt="">
                <img class="rounded-2xl" src="{{asset('./img/keop230/projektzaras/zar10.jpg')}}" alt="">
            </div>
        </div>
    </div>
</div>
@endsection