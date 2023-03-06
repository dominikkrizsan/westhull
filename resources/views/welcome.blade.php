@extends('layout.app')

@section('content')
    {{-- main --}}
    <div id="main" class="px-2 py-3 bg-white border-zinc-400 border-b-2 dark:bg-zinc-800 dark:border-zinc-700 mb-6">
        <div class="main-container flex flex-col items-start justify-center mx-auto min-h-full gap-3">
            <p class="text-white text-2xl">Összefogás a tiszta környezetért</p>
            <h1 class="text-white text-5xl leading-snug font-bold">Nyugat-Dunántúli Regionális <br> Hulladékgazdálkodási <br> Önkormányzati Társulás</h1>
            <a class="bg-emerald-600 hover:bg-emerald-500 text-white font-bold py-5 px-7 rounded-full text-xl ease-in duration-200 mt-6" href="#us">Olvass tovább</a>
        </div>
    </div>
    {{-- rolunk --}}
    <div id="us" class="main-container mx-auto min-h-full gap-3 grid grid-cols-2 mt-10">
        <div class="flex flex-col justify-content-center gap-6">
            <div class="flex flex-col gap-2">
                <p class="uppercase text-lg">Rólunk</p>
                <h1 class="uppercase text-4xl font-bold">Ezzel foglalkozunk</h1>
                <p class="text-lg my-4">Vas megye 127 társult településén újul meg a szelektív hulladékgyűjtés rendszere a Nyugat-dunántúli Regionális Hulladékgazdálkodási Önkormányzati Társulás munkájának eredményeként.</p>
            </div>
            <div class="grid grid-cols-2 justify-items-start">
                <div class="flex items-center justify-center gap-10 mb-8">
                    <i class="fa-solid fa-recycle fa-2xl text-emerald-600 text-4xl"></i>
                    <p class="text-lg font-bold">Hulladékgazdálkodás</p>
                </div>
                <div class="flex items-center justify-center gap-10  mb-8">
                    <i class="fa-solid fa-leaf fa-2xl text-emerald-600 text-4xl"></i>
                    <p class="text-lg font-bold">Együtt a környezetért</p>
                </div>
                <div class="flex items-center justify-center gap-10">
                    <i class="fa-solid fa-users fa-2xl text-emerald-600 text-4xl"></i>
                    <p class="text-lg font-bold">Profi Csapat</p>
                </div>
                <div class="flex items-center justify-center gap-10">
                    <i class="fa-solid fa-thumbs-up fa-2xl text-emerald-600 text-4xl"></i>
                    <p class="text-lg font-bold">Elkötelezettség <br> által vezérelt</p>
                </div>
            </div>
        </div>
        <div class="flex items-center gap-10">
            <p class="text-lg mb-5">A Társulás 2009-ben alakult meg azzal a céllal, hogy hatékonyabb együttműködést, érdekérvényesítést és megfelelő pénzeszközöket biztosítson a környezetvédelmi célok megvalósításához. </p>
            <img class="w-44" src="{{ asset('./img/main/eu.png')}}" alt="">
        </div> 
    </div>
    {{-- szamlalok --}}
    <div id="counter" class="px-2 py-3 bg-white border-zinc-400 border-b-2 dark:bg-zinc-800 dark:border-zinc-700 py-6 mt-10">
        <div class=" main-container flex items-center justify-around mx-auto py-10">
            <div class="flex flex-col items-center justify-center">
                <i class="fa-solid fa-building-user text-7xl text-emerald-500"></i>
                <p class="text-4xl text-white font-bold mt-5">177<span class="text-2xl">+</span></p>
                <p class="text-2xl mt-3 text-emerald-400 uppercase font-bold">Projektek</p>
            </div>
            <div class="flex flex-col items-center justify-center">
                <i class="fa-solid fa-user-group text-7xl text-emerald-500"></i>
                <p class="text-4xl text-white font-bold mt-5">152<span class="text-2xl">+</span></p>
                <p class="text-2xl mt-3 text-emerald-400 uppercase font-bold">Ügyfelek</p>
            </div>
            <div class="flex flex-col items-center justify-center">
                <i class="fa-solid fa-award text-7xl text-emerald-500"></i>
                <p class="text-4xl text-white font-bold mt-5">26</p>
                <p class="text-2xl mt-3 text-emerald-400 uppercase font-bold">Díjnyertes</p>
            </div>
            <div class="flex flex-col items-center justify-center">
                <i class="fa-solid fa-layer-group text-7xl text-emerald-500"></i>
                <p class="text-4xl text-white font-bold mt-5">20<span class="text-2xl">+</span> év</p>
                <p class="text-2xl mt-3 text-emerald-400 uppercase font-bold">Tapasztalat</p>
            </div>
        </div>
    </div>
    {{-- paragraph --}}
    <div id="paragraph" class=" main-container flex flex-col gap-4 items-center justify-around mx-auto py-10">
        <p class="text-lg ">A Társulás sikeres pályázatot nyújtott be az Új Magyarország Fejlesztési Terv KEOP-7.1.1.1/09/2009-0009 majd a KEOP-1.1.1/2F/09-11-2012-0001 keretében.</p>
        <p class="text-lg">Az 1. fordulós pályázat során megkezdődött a program teljes körű műszaki, pénzügyi, jogi előkészítése. Az előkészítő munka eredményeként a Társulás rendelkezésére állt minden olyan szükséges engedély, tanulmány, amelyek a kivitelezés elindításához szükségesek. A sikeres 2. fordulós pályázatot követően a több milliárdos beruházás eredményeként felépült a szombathelyi hulladékválogató mű, 7db hulladékudvar (Bük, Körmend, Pankasz, Rábahídvég, Répcelak, Szentgotthárd, Szombathely településeken), elkészült 80 db hulladékgyűjtő sziget, leszállítottak 497 db 1100 literes lapos fedelű szelektív hulladékgyűjtő konténert is, valamint a begyűjtéshez szükséges géppark is beszerzésre került. Mindezek mellett pedig 27 500 db házi komposztáló edényzet kiosztása is folyamatban van.</p>
        <p class="text-lg">A projekt során kiemelt figyelmet fordítunk arra, hogy a lakosság és a sajtó képviselői minden szükséges információt megkapjanak. A folyamatos tájékoztatás következő lépéseként 2015 nyarán nyílt napot szervezünk a lakosság, valamint a sajtó képviselői számára, melynek során az érdeklődők testközelből is megismerkedhetnek a hulladékudvarok működésével és a projekt eredményeivel. Ezt követően pedig lakossági fórumot tartunk, ahol az érdeklődők tájékozódhatnak az új hulladékgazdálkodási rendszerrel kapcsolatos legfontosabb tudnivalókról.</p>
        <p class="text-lg">A program életre hívásával elsődleges célunk az, hogy megvalósítsuk a szilárdhulladék szelektív hulladékgazdálkodási rendszer fenntartását és üzemeltetését, valamint a társult önkormányzatok területén a bezárt települési szilárdhulladék lerakók rekultivációját.</p>
        <p class="text-lg">A projekt indulásakor a program által érintett területen évente mintegy 3,2 ezer tonna hulladékot gyűjtöttek szelektíven. Az új hulladékgazdálkodási rendszer elindulását követő harmadik évre ez a mennyiség előreláthatóan megduplázódik, sőt, további folyamatos bővülés is várható.</p>
        <p class="text-lg">Az üzemeltetés elindulásával éves szinten többszörösére fog növekedni az anyagában hasznosított települési szilárd hulladék mennyisége, valamint lényegesen csökken a lerakott települési szilárd hulladék.</p>
        <p class="text-lg">A program nemcsak a hulladékgazdálkodás területén hoz eredményeket, hiszen az elkészült, bővített szolgáltató és feldolgozó egységekben, több társult településen is új munkahelyek jönnek létre.</p>
        <p class="text-lg">A program megvalósítása során fontosnak tartjuk a lakossági szemléletformálást is. Tárgyi és eszközbeli sikereink mellett az emberek gondolkodásában is változásokat idéztünk elő. A több mint 27 ezer házi komposztáló láda kiosztásával a helyi lakosok számára járulunk hozzá a környezettudatosabb hulladékgazdálkodás, a tudatos együttgondolkodás, a közös cselekvés, valamint a fenntartható hulladékgazdálkodás gyakorlatának terjesztéséhez.</p>
        <p class="text-lg">Mivel a környezettudatos életmódra nevelést nem lehet elég korán elkezdeni, ezért a projekt során a legkisebbeket is bevontuk a hulladék-újrahasznosítás gyakorlatának elsajátításába. Szombathelyen, Körmenden, Répcelakon és Szentgotthárdon a gyermekek osztályfőnöki óra keretén belül, szellemi és gyakorlati feladatok által ismerkedhettek meg játékos formában a szelektív hulladékgyűjtés módszerével, a komposztálás folyamatával.</p>
        <p class="text-lg">Mind felelősek vagyunk otthonunk fenntartható fejlődéséért, azért hogy környezetünket megóvjuk úgy, hogy közben településeink tisztábbak legyenek, és a térség hulladékterhelését csökkentsük.</p>
        <p class="text-lg">Tegyük ezt önmagunkért és utódainkért! <br>

            dr. Horváth Attila
            <br>
            a Társulási Tanács Elnöke
    </div>
    {{-- team --}}
    <div class="px-2 py-3 bg-white dark:bg-zinc-200 pb-20">
        <div class=" main-container flex flex-col gap-4 items-center justify-around mx-auto py-10 bg-zinc-200">
            <p class="mt-5 text-xl text-emerald-500">Csapatunk</p>
            <p class="text-4xl font-bold mb-5">Ismerd meg összetartó csapatunkat</p>
            <div class="grid grid-cols-4 gap-20">
                <div class="flex flex-col gap-4">
                    <img class="rounded-lg w-96" src="{{ asset('./img/team-1.jpg') }}" alt="">
                    <div class="flex flex-col">
                        <p class="text-lg text-center">Beosztás</p>
                        <p class="text-4xl font-bold text-center mt-2"> Kovács István</p>
                        <div class="flex items-center justify-center gap-5 mt-4">
                            <a href="" class="text-2xl text-zinc-700 hover:text-emerald-700 ease-in duration-200"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="" class="text-2xl text-zinc-700 hover:text-emerald-700 ease-in duration-200"><i class="fa-brands fa-linkedin"></i></i></a>
                            <a href="" class="text-2xl text-zinc-700 hover:text-emerald-700 ease-in duration-200"><i class="fa-solid fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col gap-4">
                    <img class="rounded-lg w-96" src="{{ asset('./img/team-1.jpg') }}" alt="">
                    <div class="flex flex-col">
                        <p class="text-lg text-center">Beosztás</p>
                        <p class="text-4xl font-bold text-center mt-2"> Kovács István</p>
                        <div class="flex items-center justify-center gap-5 mt-4">
                            <a href="" class="text-2xl text-zinc-700 hover:text-emerald-700 ease-in duration-200"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="" class="text-2xl text-zinc-700 hover:text-emerald-700 ease-in duration-200"><i class="fa-brands fa-linkedin"></i></i></a>
                            <a href="" class="text-2xl text-zinc-700 hover:text-emerald-700 ease-in duration-200"><i class="fa-solid fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col gap-4">
                    <img class="rounded-lg w-96" src="{{ asset('./img/team-1.jpg') }}" alt="">
                    <div class="flex flex-col">
                        <p class="text-lg text-center">Beosztás</p>
                        <p class="text-4xl font-bold text-center mt-2"> Kovács István</p>
                        <div class="flex items-center justify-center gap-5 mt-4">
                            <a href="" class="text-2xl text-zinc-700 hover:text-emerald-700 ease-in duration-200"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="" class="text-2xl text-zinc-700 hover:text-emerald-700 ease-in duration-200"><i class="fa-brands fa-linkedin"></i></i></a>
                            <a href="" class="text-2xl text-zinc-700 hover:text-emerald-700 ease-in duration-200"><i class="fa-solid fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col gap-4">
                    <img class="rounded-lg w-96" src="{{ asset('./img/team-1.jpg') }}" alt="">
                    <div class="flex flex-col">
                        <p class="text-lg text-center">Beosztás</p>
                        <p class="text-4xl font-bold text-center mt-2"> Kovács István</p>
                        <div class="flex items-center justify-center gap-5 mt-4">
                            <a href="" class="text-2xl text-zinc-700 hover:text-emerald-700 ease-in duration-200"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="" class="text-2xl text-zinc-700 hover:text-emerald-700 ease-in duration-200"><i class="fa-brands fa-linkedin"></i></i></a>
                            <a href="" class="text-2xl text-zinc-700 hover:text-emerald-700 ease-in duration-200"><i class="fa-solid fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- hirek --}}
    <div class="news px-2 py-5">
        <div
                class=" w-4/5 flex flex-col items-center justify-center mx-auto mt-20 gap-3"
            >
                <div class="flex flex-col gap-6">
                    <h3 class="text-xl text-center text-emerald-500">Legfrissebb</h3>
                    <h3 class="text-6xl font-bold text-center text-zinc-100 mb-20">Hírek</h3>
                </div>
                <div class="grid grid-cols-3 gap-28 justify-items-center items-start text-lg text-zinc-100">
                    <div class="flex flex-col justify-center gap-4">
                        <img class="w-max rounded-xl" src="{{asset('./img/news/news-1.jpg')}}" alt="">
                        <div class="flex items-center gap-6">
                            <p class="text-zinc-400 text-lg">2015.12.09.</p>
                            <p class="text-zinc-400 text-lg">/</p>
                            <p class="text-zinc-400 text-lg">Sajtóközlemény</p>
                        </div>
                        <p class="text-2xl font-bold">Ünnepélyes keretek között zárult a Nyugat-dunántúli Regionális Hulladékgazdálkodási Program</p>
                    </div>
                    <div class="flex flex-col justify-center gap-4">
                        <img class="w-max rounded-xl" src="{{asset('./img/news/news-2.jpg')}}" alt="">
                        <div class="flex items-center gap-6">
                            <p class="text-zinc-400 text-lg">2015.08.24.</p>
                            <p class="text-zinc-400 text-lg">/</p>
                            <p class="text-zinc-400 text-lg">Sajtóközlemény</p>
                        </div>
                        <p class="text-2xl font-bold">Egyedülálló projektbemutató nyílt napot tartottak Vas megyében</p>
                    </div>
                    <div class="flex flex-col justify-center gap-4">
                        <img class="w-max rounded-xl" src="{{asset('./img/news/news-3.jpg')}}" alt="">
                        <div class="flex items-center gap-6">
                            <p class="text-zinc-400 text-lg">2015.08.07.</p>
                            <p class="text-zinc-400 text-lg">/</p>
                            <p class="text-zinc-400 text-lg">Sajtóközlemény</p>
                        </div>
                        <p class="text-2xl font-bold">Egyre népszerűbb a szelektív hulladékgyűjtés az Európai Unióban és Magyarországon</p>
                    </div>
                </div>
                <a class="border-2 border-emerald-500 hover:bg-emerald-500 text-white font-bold py-4 px-5 rounded-full text-lg ease-in duration-200 my-16" href="{{ url('/aktualis') }}">További Hírek</a>
        </div>
    </div>
    {{-- kapcsolat / szekhely --}}

    <div class="bg-white dark:bg-zinc-200 pt-20">
        <h2 class="text-xl text-center text-emerald-500 mb-3">Keress minket</h2>
        <h1 class="text-6xl font-bold text-center mb-8">Kapcsolat</h1>
        {{-- <div class="border-2 border-emerald-500 w-80 mx-auto"></div> --}}
        <div class="px-2 py-3 bg-white border-zinc-200 border-b-2 py-6 mt-10 dark:bg-zinc-200">
            <div class=" main-container flex items-center justify-around mx-auto py-10">
                <a class="hover:bg-emerald-100 rounded-2xl ease-in duration-200" href="">         
                    <div class="flex flex-col items-center justify-center py-8 px-10 rounded-xl">
                        <i class="fa-solid fa-map-location-dot text-6xl"></i>
                        <p class="text-xl text-emerald-500 font-bold mt-5 mb-3">Székhely</p>
                        <p class="text-2xl text-center">Kossuth Lajos utca 1-3.</p>
                    </div>
                </a>  
                <a class="hover:bg-emerald-100 rounded-2xl ease-in duration-200" href="">
                    <div class="flex flex-col items-center justify-center  py-8 px-10">
                        <i class="fa-solid fa-envelope-circle-check text-6xl"></i>
                        <p class="text-xl text-emerald-500 font-bold mt-5 mb-3">Email</p>
                        <p class="text-2xl text-center">info@westhull.hu</p>
                    </div>
                </a>
                <a class="hover:bg-emerald-100 rounded-2xl ease-in duration-200" href="">
                    <div class="flex flex-col items-center justify-center  py-8 px-10">
                        <i class="fa-solid fa-mobile text-6xl"></i>
                        <p class="text-xl text-emerald-500 font-bold mt-5 mb-3">Telefon</p>
                        <p class="text-2xl text-center">+36/94 316 850</p>
                    </div>
                </a>
                <a class="hover:bg-emerald-100 rounded-2xl ease-in duration-200" href="">
                    <div class="flex flex-col items-center justify-center  py-8 px-10">
                        <i class="fa-brands fa-facebook-f text-6xl"></i>
                        <p class="text-xl text-emerald-500 font-bold mt-5 mb-3">Facebook</p>
                        <p class="text-2xl text-center">Hulladekgazdalkod</p>
                    </div>
                </a>
            </div>
        </div>
        
        <iframe id="iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2709.315871148547!2d16.619175315617458!3d47.2299669791615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476eb9b7c9497755%3A0xf7980fd3d9ff4b2a!2sSzombathely%2C%20Kossuth%20Lajos%20u.%201%2C%209700!5e0!3m2!1shu!2shu!4v1677451039395!5m2!1shu!2shu" class="w-full" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
@endsection