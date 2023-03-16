@extends('layout.app')

@section('content')
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
        <h2 class="text-zinc-300 text-xl max-[500px]:text-lg max-[500px]:text-center">Aktuális</h2>
        <h1 class="text-zinc-300 text-6xl font-bold max-[900px]:text-4xl max-[500px]:text-2xl max-[500px]:text-center">Fotók <span class="font-normal">/</span> Hírek <span class="font-normal">/</span> Média</h1></h1>
        <div class="flex gap-4 text-xl max-[500px]:text-lg max-[500px]:text-center">
            <a class="text-zinc-300 hover:text-zinc-100 ease-all duration-200" href="{{ url('/')}}">Kezdőlap</a>
            <p class="text-zinc-300">/</p>
            <p class="text-zinc-400">Aktuális</p>
        </div>
    </div>
</div>
<div class="px-2 py-5 bg-zinc-200">
    <div
        class="max-[1280px]:mx-3 xl:mx-auto xl:w-128 min-h-8/12 mt-4 gap-3"
    >
    {{-- fotok --}}
    <h1 id="media-header" class="text-4xl font-bold text-center text-emerald-600 mb-5 mt-20">Fotók</h1>
    <div class="border-b border-zinc-300 w-48 mx-auto mb-10"></div>
    <div class="grid grid-cols-2 max-[800px]:grid-cols-1 justify-items-center items-start gap-10">
        <img class="rounded-xl shadow-xl" src="{{asset('./img/fototar/fototar-7.jpg')}}" alt="">
        <img class="rounded-xl shadow-xl" src="{{asset('./img/fototar/fototar-6.jpg')}}" alt="">
        <img class="rounded-xl shadow-xl" src="{{asset('./img/fototar/fototar-5.jpg')}}" alt="">
        <img class="rounded-xl shadow-xl" src="{{asset('./img/fototar/fototar-3.jpg')}}" alt="">
        <img class="rounded-xl shadow-xl" src="{{asset('./img/fototar/fototar-2.jpg')}}" alt="">
        <img class="rounded-xl shadow-xl" src="{{asset('./img/fototar/fototar-1.jpg')}}" alt="">
    </div>
    <div class="border-b border-zinc-300 w-full my-5"></div>
    <h2 class="text-xl text-emerald-500 font-semibold ml-3 mb-3 mt-10">Nyílt Nap</h2>
    <div class="border-b border-zinc-300 w-32 mb-5"></div>
    <div class="grid grid-cols-4 max-[1200px]:grid-cols-3 max-[950px]:grid-cols-2 max-[700px]:grid-cols-1 justify-items-center items-start gap-10">
        <img class="rounded-xl shadow-xl" src="{{asset('./img/fototar/nyiltnap1.jpg')}}" alt="">
        <img class="rounded-xl shadow-xl" src="{{asset('./img/fototar/nyiltnap2.jpg')}}" alt="">
        <img class="rounded-xl shadow-xl" src="{{asset('./img/fototar/nyiltnap3.jpg')}}" alt="">
        <img class="rounded-xl shadow-xl" src="{{asset('./img/fototar/nyiltnap4.jpg')}}" alt="">
        <img class="rounded-xl shadow-xl" src="{{asset('./img/fototar/nyiltnap5.jpg')}}" alt="">
        <img class="rounded-xl shadow-xl" src="{{asset('./img/fototar/nyiltnap6.jpg')}}" alt="">
        <img class="rounded-xl shadow-xl" src="{{asset('./img/fototar/nyiltnap7.jfif')}}" alt="">
    </div>
    <div class="border-b border-zinc-300 w-full my-5"></div>
    <h2 class="text-xl text-emerald-500 font-semibold ml-3 mb-3 mt-10">Lakossági fórum</h2>
    <div class="border-b border-zinc-300 w-32 mb-3"></div>
    <div class="grid grid-cols-4 max-[1200px]:grid-cols-3 max-[950px]:grid-cols-2 max-[700px]:grid-cols-1 justify-items-center items-start gap-10">
        <img class="rounded-xl shadow-xl" src="{{asset('./img/fototar/lakossági_fórum1.jfif')}}" alt="">
        <img class="rounded-xl shadow-xl" src="{{asset('./img/fototar/lakossági_fórum2.jfif')}}" alt="">
        <img class="rounded-xl shadow-xl" src="{{asset('./img/fototar/lakossági_fórum5.jfif')}}" alt="">
        <img class="rounded-xl shadow-xl" src="{{asset('./img/fototar/lakossági_fórum6.jfif')}}" alt="">
        <img class="rounded-xl shadow-xl" src="{{asset('./img/fototar/lakossági_fórum3.jfif')}}" alt="">
        <img class="rounded-xl shadow-xl" src="{{asset('./img/fototar/lakossági_fórum4.jfif')}}" alt="">
    </div>
    <div class="border-b border-zinc-300 w-full my-5"></div>
    <h2 class="text-xl text-emerald-500 font-semibold ml-3 mb-3 mt-10">Zárórendezvény</h2>
    <div class="border-b border-zinc-300 w-32 mb-3"></div>
    <div class="grid grid-cols-4 max-[1200px]:grid-cols-3 max-[950px]:grid-cols-2 max-[700px]:grid-cols-1 justify-items-center items-start gap-10">
        <img class="rounded-xl shadow-xl" src="{{asset('./img/fototar/zárórendezvény1.jfif')}}" alt="">
        <img class="rounded-xl shadow-xl" src="{{asset('./img/fototar/zárórendezvény2.jfif')}}" alt="">
        <img class="rounded-xl shadow-xl" src="{{asset('./img/fototar/zárórendezvény3.jfif')}}" alt="">
        <img class="rounded-xl shadow-xl" src="{{asset('./img/fototar/zárórendezvény4.jfif')}}" alt="">
        <img class="rounded-xl shadow-xl" src="{{asset('./img/fototar/zárórendezvény5.jfif')}}" alt="">
        <img class="rounded-xl shadow-xl" src="{{asset('./img/fototar/zárórendezvény6.jfif')}}" alt="">
        <img class="rounded-xl shadow-xl" src="{{asset('./img/fototar/zárórendezvény7.jfif')}}" alt="">
        <img class="rounded-xl shadow-xl" src="{{asset('./img/fototar/zárórendezvény8.jfif')}}" alt="">
        <img class="rounded-xl shadow-xl" src="{{asset('./img/fototar/zárórendezvény9.jfif')}}" alt="">
    </div>
    {{-- hirek --}}
    <h1 id="hir-header" class="text-4xl font-bold text-center text-emerald-600 mb-5 mt-10">Hírek</h1>
    <div class="border-b border-zinc-300 w-48 mx-auto mb-10"></div>
    
    <div class="grid grid-cols-2 max-[900px]:grid-cols-1 justify-items-center items-start gap-10">
        {{-- hir-item --}}
        <div class="flex flex-col bg-zinc-100 shadow-xl align-center justify-center gap-4 border p-6 hover:bg-emerald-100 rounded-xl cursor-default ease-in duration-200">
            <img class="w-max rounded-xl" src="{{asset('./img/news/news-1.jpg')}}" alt="">
            <h3 class="text-lg text-zinc-500">Sajtóközlemény / <span class="text-emerald-500">2015.12.09.</span></h3>
            <h2 class="text-xl font-bold">Ünnepélyes keretek között zárult a Nyugat-dunántúli Regionális Hulladékgazdálkodási Program</h2>
            <p class="text-lg">A Nyugat-dunántúli Regionális Hulladékgazdálkodási Társulás 2009-ben alapult meg azzal a céllal, hogy megújuljon Vas megye 127 településén a szelektív hulladékgyűjtés rendszere, továbbá hogy hatékonyabb együttműködést, érdekérvényesítést és megfelelő pénzeszközöket biztosítson a környezetvédelmi célok megvalósításához.</p>
            <p class="text-lg">A Társulás a beruházás lezárulásával komoly eredményeket tud felmutatni, felépült a szombathelyi hulladékválogató mű és hulladékudvar, mely éves szinten 7.500 tonna hulladék válogatására alkalmas, valamint további 6 db hulladékudvar is megépült Bük, Körmend, Pankasz, Rábahídvég, Répcelak és Szentgotthárd, településeken. Lakézi Gábor, PIU vezető felhívta a figyelmet arra, hogy a beruházás során a városok lakótelepi övezeteiben és a falvak forgalmasabb pontjain hulladékgyűjtő szigetek létesültek, összesen 80 db, melyek segítségével a papír, a műanyag, illetve az üveg hulladék szelektálása válik megoldottá a lakosság számára.</p>
        </div>
        {{-- hir-item --}}
        <div class="flex flex-col bg-zinc-100 shadow-xl align-center justify-center gap-4 border p-6 hover:bg-emerald-100 rounded-xl cursor-default ease-in duration-200">
            <img class="w-max rounded-xl" src="{{asset('./img/news/news-2.jpg')}}" alt="">
            <h3 class="text-lg text-zinc-500">Sajtóközlemény / <span class="text-emerald-500">2015.08.24.</span></h3>
            <h2 class="text-xl font-bold">Egyedülálló projektbemutató nyílt napot tartottak Vas megyében</h2>
            <p class="text-lg">A Nyugat-dunántúli Regionális Hulladékgazdálkodási Önkormányzati Társulás Nyílt napot tartott a lakosság számára, melynek során a résztvevők testközelből ismerkedhettek meg a hulladékudvarok működésével és a Nyugat-dunántúli Hulladékgazdálkodási Program eddigi eredményeivel. A projekt legnagyobb célkitűzése a szelektív gyűjtési- és hasznosítási rendszer fejlesztése a Társulás tagtelepülésein.</p>
            <p class="text-lg">A Társulási Tanács elnöke, Szombathely alpolgármestere, Illés Károly mutatta be Szombathelyen, a Nyílt nap első állomásán a projekt jelenlegi állását és a már eddig megvalósult eredményeket. Beszédében elmondta, hogy a projekt eredményeként éves szinten többszörösére fog növekedni az anyagában hasznosított, valamint lényegesen csökkenni a lerakott települési szilárd hulladék mennyisége.</p>
            <p class="text-lg">A szombathelyi Nyílt nap során a lakosság megtekinthette a szombathelyi hulladékválogatót, mely éves szinten 7.500 tonna hulladék válogatására alkalmas. A válogatóműben a lakossági szelektív gyűjtésből származó hulladékok fajtán belüli válogatása végezhető el.</p>
        </div>
        {{-- hir-item --}}
        <div class="flex flex-col bg-zinc-100 shadow-xl align-center justify-center gap-4 border p-6 hover:bg-emerald-100 rounded-xl cursor-default ease-in duration-200">
            <img class="w-max rounded-xl" src="{{asset('./img/news/news-3.jpg')}}" alt="">
            <h3 class="text-lg text-zinc-500">Sajtóközlemény / <span class="text-emerald-500">2015.08.07.</span></h3>
            <h2 class="text-xl font-bold">Egyre népszerűbb a szelektív hulladékgyűjtés az Európai Unióban és Magyarországon</h2>
            <p class="text-lg">Habár a szelektív hulladékgyűjtés csak egy eszköz a tiszta környezet elérése érdekében, nem pedig maga a cél, de egy olyan környezetünk javát szolgáló tevékenység, melyre az Európai Unió és azon belül Magyarország lakossága is egyre nyitottabb. A szemléletformálás érdekében tett erőfeszítések jelentős javulást eredményeztek Európa-szerte. A Nyugat-dunántúli Regionális Hulladékgazdálkodási Önkormányzati Társulás jóvoltából Vas megyében is komoly előrelépésekre került sor a tisztább környezet érdekében.</p>
            <p class="text-lg">Az Európai Környezetvédelmi Ügynökség minden évben megjelenő Jelzések című kiadványának 2014-es kiadásából kiderül, hogy az európai lakosság átlagosan egy évben egy főre vetítve 481 kg települési hulladékot termel. A magasnak tűnő szám mellett azonban jó hír, hogy ennek a mennyiségnek egyre nagyobb arányát hasznosítják újra vagy komposztálják, tehát egyre kisebb mennyiségű hulladék kerül a hulladéklerakókba. A magyarországi települési hulladék képződésének tekintetében is csökkenés figyelhető meg, hiszen az Országos Hulladékgazdálkodási Terv beszámolása alapján, míg 2007-ben majdnem 4,6 millió tonna települési hulladék keletkezett, addig ez a szám 2012-re 3,9 millió tonnára csökkent.</p>
        </div>
        {{-- hir-item --}}
        <div class="flex flex-col bg-zinc-100 shadow-xl align-center justify-center gap-4 border p-6 hover:bg-emerald-100 rounded-xl cursor-default ease-in duration-200">
            <img class="w-max rounded-xl" src="{{asset('./img/news/news-4.jpg')}}" alt="">
            <h3 class="text-lg text-zinc-500">Sajtóközlemény / <span class="text-emerald-500">2015.03.04.</span></h3>
            <h2 class="text-xl font-bold">Jelentős mérföldköveken túl - az eddigi projekt-sikereket összegezte a Nyugat-dunántúli Regionális Hulladékgazdálkodási Önkormányzati Társulás</h2>
            <p class="text-lg">3 év sikereit és eredményeit vette sorba a Nyugat-dunántúli Regionális Hulladékgazdálkodási Önkormányzati Társulás. A 127 településből álló együttműködés 2012-ben indította hulladékgazdálkodási és szemléletformáló projektjét. A több milliárdos beruházás során elkészült több hulladéksziget és leszállítottak számos konténert is. Emellett több, mint 25 ezer lakos átvehette a házi komposztáló ládáit is.</p>
            <p class="text-lg">Nemzetközi felmérések szerint naponta több, mint 3,5 millió tonna szemetet termelünk. A mai szokásokkal ez a folyamat csak romolhat. Éppen ezért a világban nemcsak hatékony hulladékgazdálkodási projektekre, hanem átfogó szemléletváltásra is szükség van. Vas megyében 2009-ben alakult meg a Nyugat-dunántúli Regionális Hulladékgazdálkodási Önkormányzati Társulás azzal a céllal, hogy hatékonyabb együttműködést, érdekérvényesítést és megfelelő pénzeszközöket biztosítson a környezetvédelmi célok megvalósításához. A Társulás sikeres pályázatot nyújtott be az Új Magyarország Fejlesztési Terv KEOP-7.1.1.1/09/2009-0009 majd a KEOP-1.1.1/2F/09-11-2012-0001 keretében. A folyamatos beruházásoknak köszönhetően az elmúlt években számos sikert értek el a hulladékgazdálkodás területén.</p>
        </div>
    </div>
    <div class="border-b border-zinc-300 w-full mb-10 mt-5"></div>
    {{-- media --}}
    <h1 id="media-header" class="text-4xl font-bold text-center text-emerald-600 mb-5 mt-20">Média</h1>
    <div class="border-b border-zinc-300 w-48 mx-auto mb-10"></div>
    <div class="grid grid-cols-2 max-[900px]:grid-cols-1 justify-items-center items-start gap-10">
        {{-- media-item --}}
        <div class="flex flex-col bg-zinc-100 shadow-xl align-center justify-center gap-4 border p-6 hover:bg-emerald-100 rounded-xl ease-in duration-200">
            <img class="w-full rounded-xl" src="{{asset('./img/media/media-1.jpg')}}" alt="">
            <h3 class="text-lg text-zinc-500">nemzeti.net / <span class="text-emerald-500">2014.04.03. </span></h3>
            <h2 class="text-xl font-bold">Hende: A szemétszállításnak is nonprofitnak kell lennie</h2>
            <a class="text-zinc-700 hover:text-zinc-400 text-lg ease-in duration-200" target="__blank" href="http://nemzeti.net/l.php?u=1953981">A link itt megtekinthető</a>
            <p class="text-lg">Nonprofit közszolgáltatásként kell működnie a jövőben a szemétszállításnak – mondta Hende Csaba honvédelmi miniszter a szombathelyi hulladékválogató üzem alapkövének lerakása után. A térség országgyűlési képviselője szerint a rezsicsökkentés érinti a hulladékszállítás rendszerét is. Vas megyében 127 település ellátására nyolc új hulladékudvart, nyolcvan hulladékszigetet létesítenek, az igénylőknek pedig ingyenes komposztáló ládákat biztosítanak. A 2,6 milliárd forintból jövő júniusra elkészülő szombathelyi válogatómű évente 8500 tonna hulladékot dolgozhat fel. „A hulladék nagyon nagy üzlet volt, melyet országszerte sok helyütt olyan magánvállalkozókhoz sikerült »kiszervezni«, akik gyakorta csúnyán visszaéltek a monopolhelyzetükkel. Úgy gondoljuk, hogy a jövőben a szemétszállításnak is nonprofit közszolgáltatásként kell működnie, és igaz ez természetesen az energiaszektorra is” – fogalmazott Hende Csaba.</p>
        </div>
        {{-- media-item --}}
        <div class="flex flex-col bg-zinc-100 shadow-xl align-center justify-center gap-4 border p-6 hover:bg-emerald-100 rounded-xl ease-in duration-200">
            <img class="w-full rounded-xl" src="{{asset('./img/media/media-2.jpg')}}" alt="">
            <h3 class="text-lg text-zinc-500">hvg.hu / <span class="text-emerald-500">2014.04.03.</span></h3>
            <h2 class="text-xl font-bold">Hende: A szemétszállítást is bevonjuk a rezsimozgalomba</h2>
            <a class="text-zinc-700 hover:text-zinc-400 text-lg ease-in duration-200" target="__blank" href="https://hvg.hu/gazdasag/20140403_Hende_A_szemetszallitast_is_bevonjuk_a_re">A link itt megtekinthető</a>
            <p class="text-lg">A honvédelmi miniszter egy hulladékgazdálkodási projekt alapkövét tette le Szombathelyen. Azt mondta, a szemétszállításnak is nonprofittá kell válnia a jövőben. A jövőben a szemétszállításnak is nonprofit közszolgáltatásként kell működnie - mondta Hende Csaba honvédelmi miniszter, szombathelyi országgyűlési képviselő. Hende Szombathelyen lerakta egy 2,5 milliárd forint értékű, 127 települést érintő környezetvédelmi beruházás alapkövét. A nyugat-dunántúli regionális hulladékgazdálkodási projekt megvalósítása évente 8500 tonna hulladék szelektív összegyűjtését, szétválogatását, nyersanyagkénti hasznosítását teszi lehetővé - mondta.</p>
        </div>
        {{-- media-item --}}
        <div class="flex flex-col bg-zinc-100 shadow-xl align-center justify-center gap-4 border p-6 hover:bg-emerald-100 rounded-xl ease-in duration-200">
            <img class="w-full rounded-xl" src="{{asset('./img/media/media-3.jpg')}}" alt="">
            <h3 class="text-lg text-zinc-500">kormany.hu / <span class="text-emerald-500">2014.04.03.</span></h3>
            <h2 class="text-xl font-bold">A szemétszállításnak is nonprofit közszolgáltatásként kell működnie</h2>
            <a class="text-zinc-700 hover:text-zinc-400 text-lg ease-in duration-200" target="__blank" href="http://www.kormany.hu/hu/honvedelmi-miniszterium/hirek/a-szemetszallitasnak-is-nonprofit-kozszolgaltataskent-kell-mukodnie">A link itt megtekinthető</a>
            <p class="text-lg">A jövőben a szemétszállításnak is nonprofit közszolgáltatásként kell működnie - hangoztatta Hende Csaba, a térség országgyűlési képviselője, honvédelmi miniszter, aki csütörtökön Szombathelyen lerakta egy 2,5 milliárd forint értékű, 127 települést érintő környezetvédelmi beruházás alapkövét. A nyugat-dunántúli regionális hulladékgazdálkodási projekt megvalósítása Vas megye egész hulladékgazdálkodási rendszerének megújítását jelenti, ami több mint 186 ezer embert érint közvetlenül, és évente 8500 tonna hulladék szelektív összegyűjtését, szétválogatását, nyersanyagkénti hasznosítását teszi lehetővé - mondta. Hozzáfűzte: a program keretében 27 ezer komposztálóládát osztanak majd ki az érintett települések lakói között.</p>
        </div>
        {{-- media-item --}}
        <div class="flex flex-col bg-zinc-100 shadow-xl align-center justify-center gap-4 border p-6 hover:bg-emerald-100 rounded-xl ease-in duration-200">
            <img class="w-full rounded-xl" src="{{asset('./img/media/media-1.jpg')}}" alt="">
            <h3 class="text-lg text-zinc-500">nyugat.hu / <span class="text-emerald-500">2013.12.08.</span></h3>
            <h2 class="text-xl font-bold">Szelektív hulladékgyűjtési rendszer épül</h2>
            <a class="text-zinc-700 hover:text-zinc-400 text-lg ease-in duration-200" target="__blank" href="https://www.nyugat.hu/cikk/73872_szelektiv_hulladekgyujtesi_rendszer_epul_vas">A link itt megtekinthető</a>
            <p class="text-lg">80 hulladékgyűjtő szigetet, 7 hulladékudvart és 1 válogatóművet épít Vas megyében a Nyugat-dunántúli Regionális Hulladékgazdálkodási Önkormányzati Társulás az Európai Unió támogatásával. A Társulás ugyanis az érintett települések szelektív hulladékgyűjtési rendszerének kiépítését tűzte ki célul. Az építkezési feltételek a kivitelező szerződés aláírásával hivatalosan is megerősödtek. A munkaterület átadás-átvételét december közepére tűzték ki, így a munkálatok várhatóan már idén vagy jövő év elején elkezdődnek. A Nyugat-dunántúli Regionális Hulladékgazdálkodási Önkormányzati Társulás az Európai Unió támogatásával közel 3 milliárd forintot fordít a házhoz menő szelektív hulladékgyűjtési rendszer kiépítésére Vas megye 127 településén. A teljes rendszer építése 2015 májusában zárul le.</p>
        </div>
    </div>
    
    </div>
</div>
@endsection