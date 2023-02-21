@extends('layout.app')

@section('content')
    <div id="main" class="px-2 py-3 bg-white border-zinc-400 border-b-2 dark:bg-zinc-800 dark:border-zinc-700 mb-6">
        <div class="container w-4/6 flex flex-col items-start justify-center mx-auto min-h-full gap-3">
            <p class="text-white text-2xl">Összefogás a tiszta környezetért</p>
            <h1 class="text-white text-6xl leading-snug font-bold">Nyugat-Dunántúli Regionális <br> Hulladékgazdálkodási <br> Önkormányzati Társulás</h1>
            <a class="bg-emerald-600 hover:bg-emerald-500 text-white font-bold py-5 px-7 rounded-full text-xl ease-in duration-200 mt-6" href="#us">Olvass tovább</a>
        </div>
    </div>
    <div id="us" class="container w-4/6 mx-auto min-h-full gap-3 grid grid-cols-2 mt-10">
        <div class="flex flex-col justify-content-center gap-6">
            <div class="flex flex-col gap-2">
                <p class="uppercase text-lg">Rólunk</p>
                <h1 class="uppercase text-4xl font-bold">Ezzel foglalkozunk Lorem <br> ipsum dolor sit amet.</h1>
                <p class="text-lg my-4">Vas megye 127 társult településén újul meg a szelektív hulladékgyűjtés rendszere a Nyugat-dunántúli Regionális Hulladékgazdálkodási Önkormányzati Társulás munkájának eredményeként.</p>
            </div>
            <div class="grid grid-cols-2 justify-items-start">
                <div class="flex items-center justify-center gap-10 mb-8">
                    <i class="fa-solid fa-recycle fa-2xl text-emerald-600 text-4xl"></i>
                    <p class="text-lg font-bold">Lorem ipsum <br> dolor sit amet.</p>
                </div>
                <div class="flex items-center justify-center gap-10 mb-8">
                    <i class="fa-solid fa-users fa-2xl text-emerald-600 text-4xl"></i>
                    <p class="text-lg font-bold">Lorem ipsum <br> dolor sit amet.</p>
                </div>
                <div class="flex items-center justify-center gap-10">
                    <i class="fa-solid fa-trophy fa-2xl text-emerald-600 text-4xl"></i>
                    <p class="text-lg font-bold">Lorem ipsum <br> dolor sit amet.</p>
                </div>
                <div class="flex items-center justify-center gap-10">
                    <i class="fa-solid fa-thumbs-up fa-2xl text-emerald-600 text-4xl"></i>
                    <p class="text-lg font-bold">Lorem ipsum <br> dolor sit amet.</p>
                </div>
            </div>
        </div>
        <div>
            <p class="text-lg mb-5">A Társulás 2009-ben alakult meg azzal a céllal, hogy hatékonyabb együttműködést, érdekérvényesítést és megfelelő pénzeszközöket biztosítson a környezetvédelmi célok megvalósításához. A Társulás sikeres pályázatot nyújtott be az Új Magyarország Fejlesztési Terv KEOP-7.1.1.1/09/2009-0009 majd a KEOP-1.1.1/2F/09-11-2012-0001 keretében.</p>
            <p class="text-lg">Az 1. fordulós pályázat során megkezdődött a program teljes körű műszaki, pénzügyi, jogi előkészítése. Az előkészítő munka eredményeként a Társulás rendelkezésére állt minden olyan szükséges engedély, tanulmány, amelyek a kivitelezés elindításához szükségesek. A sikeres 2. fordulós pályázatot követően a több milliárdos beruházás eredményeként felépült a szombathelyi hulladékválogató mű, 7db hulladékudvar (Bük, Körmend, Pankasz, Rábahídvég, Répcelak, Szentgotthárd, Szombathely településeken), elkészült 80 db hulladékgyűjtő sziget, leszállítottak 497 db 1100 literes lapos fedelű szelektív hulladékgyűjtő konténert is, valamint a begyűjtéshez szükséges géppark is beszerzésre került. Mindezek mellett pedig 27 500 db házi komposztáló edényzet kiosztása is folyamatban van.</p>
        </div> 
    </div>
    <div id="counter" class="px-2 py-3 bg-white border-zinc-400 border-b-2 dark:bg-zinc-800 dark:border-zinc-700 py-6 mt-10">
        <div class="container w-4/6 flex items-center justify-around mx-auto py-10">
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
    <div id="paragraph" class="container w-4/6 flex items-center justify-around mx-auto py-10">
        <p class="text-lg">A projekt során kiemelt figyelmet fordítunk arra, hogy a lakosság és a sajtó képviselői minden szükséges információt megkapjanak. A folyamatos tájékoztatás következő lépéseként 2015 nyarán nyílt napot szervezünk a lakosság, valamint a sajtó képviselői számára, melynek során az érdeklődők testközelből is megismerkedhetnek a hulladékudvarok működésével és a projekt eredményeivel. Ezt követően pedig lakossági fórumot tartunk, ahol az érdeklődők tájékozódhatnak az új hulladékgazdálkodási rendszerrel kapcsolatos legfontosabb tudnivalókról.</p>
    </div>
@endsection