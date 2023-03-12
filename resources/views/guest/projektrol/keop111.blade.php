@extends('layout.app') @section('content')
{{-- inner --}}
<div class="inner max-[1280px]:px-3 xl:mx-auto xl:w-128">
    <div
        class="flex flex-col items-center justify-center h-full gap-6"
    >
        <h2 class="text-zinc-300 text-xl max-[500px]:text-lg max-[500px]:text-center">Projektről</h2>
        <h1 class="text-zinc-300 text-6xl font-bold max-[900px]:text-4xl max-[500px]:text-2xl max-[500px]:text-center">KEOP 1.1.1/2F/09-11-2012-0001</h1>
        <div class="flex gap-4 text-xl max-[500px]:text-lg max-[500px]:text-center">
            <a class="text-zinc-300 hover:text-zinc-100 ease-all duration-200" href="{{ url('/')}}">Kezdőlap</a>
            <p class="text-zinc-300">/</p>
            <p class="text-zinc-400">KEOP 1.1.1/2F/09-11-2012-0001</p>
        </div>
    </div>
</div>
<div class="px-2 py-5 bg-white dark:bg-zinc-200">
    <div
        class="max-[1280px]:mx-3 xl:mx-auto xl:w-128 flex flex-col items-start justify-center mx-auto min-h-8/12 mt-4 gap-3"
    >
        <!-- rovid bemutatas -->
        <div>
            <div class="flex items-center gap-5">
                <i
                    class="fa-solid fa-person-chalkboard text-4xl text-emerald-600"
                ></i>
                <h1 class="text-2xl font-bold text-emerald-600 pt-5">
                    Projekt rövid bemutatása
                </h1>
            </div>
            <div class="my-5"></div>
            <p class="text-lg font-bold mb-3">
                Vas megye 127 településének példa értékű összefogásával az
                Európai Unió Kohéziós Alapjának támogatásával újul meg a
                szelektív hulladékgyűjtés rendszere.
            </p>
            <p class="text-lg">
                A sikeres KEOP pályázat két fordulós. Az első forduló a XXI.
                Századi követelményeknek megfelelő hulladékgazdálkodási program
                előkészítését és tervezését, a második forduló a megvalósítását
                támogatja. A létesítmények kivitelezésére, a szükséges gépek
                beszerzésére a 2. fordulós pályázat elbírálását követően
                2012-2014 között kerül sor. A rendszer üzemeltetése várhatóan
                2014-ben kezdődik. Eredményeként 7 településen létesül
                hulladékudvar, egy településen pedig a meglévőt fejlesztik.
                Ezeken a helyeken a lakosság térítésmentesen elhelyezheti a
                háztartásában keletkező nagyobb tömegű papír-, műanyag-, üveg-,
                fém- és zöld-hulladékot, különféle lomokat és veszélyes
                hulladékot. Új hulladékgyűjtő szigetek épülnek azokon a
                településeken, ahol erre még nem került sor. Minden településen
                bevezetésre kerül a házhoz menő zsákos szelektív
                hulladékgyűjtés. A háztartásokban keletkező komposztálható
                hulladék humusszá alakítására a lakosság komposztáló ládákat
                igényelhet, azok szakszerű használatához pedig képzést kap.
            </p>
            <p class="text-xl font-bold my-5">
                Nyugat-dunántúli Regionális Hulladékgazdálkodási Programban
                tervezett fejlesztések:
            </p>
            <ul class="text-lg">
                <li class="list-disc ml-3">
                    szelektív hulladékkezelő központ („Válogató mű”)
                    Szombathelyen
                </li>
                <li class="list-disc ml-3">
                    7 új hulladékgyűjtő udvar Bükön, Körmenden, Őriszentpéteren,
                    Rábahídvégen, Répcelakon, Szentgotthárdon, Szombathelyen,
                    valamint Kőszegen, a meglévő hulladékudvar fejlesztése
                </li>
                <li class="list-disc ml-3">80 db új hulladékgyűjtő sziget</li>
                <li class="list-disc ml-3">150 db új üveggyűjtő-pont</li>
                <li class="list-disc ml-3">
                    házhoz menő zsákos szelektív hulladékgyűjtés kialakítása
                </li>
                <li class="list-disc ml-3">
                    a lakosság részére 27 500 db házi komposztáló edényzet
                </li>
                <li class="list-disc ml-3">
                    a szelektíven gyűjtött hulladékok szállításához szükséges
                    gépjárműpark beszerzése
                </li>
            </ul>
            <p class="text-lg my-3">
                A beruházás becsült összértéke 1,99 milliárd Ft. Az előkészítés
                85%-a a KEOP pályázatból támogatott. A fejlesztés gazdája a
                Nyugat-dunántúli Regionális Hulladékgazdálkodási Önkormányzati
                Társulás.
            </p>
            <h2 class="text-xl font-bold mb-3">
                Röviden a hasznosítás módjairól:
            </h2>
            <li class="list-disc ml-3 text-xl mb-3">Komposztálás</li>
            <p class="text-lg">
                Háztartási hulladékunk egyharmada hasznosítható szerves anyag,
                amelyből összegyűjtve értékes komposzt nyerhető. A legtöbb
                zöldség, gyümölcs fel nem használt része, héja, a tojáshéj, a
                kávézacc, a kerti zöldhulladék, a fű, a levél, a gally
                komposztálható. A komposztáló ládák segítségével ezek ásványi
                anyagokban igen gazdag humusszá alakíthatók. A komposztálás
                lehetőséget ad arra, hogy valamit tegyünk a környezetünk azon
                kis darabjáért, amellyel nap mint nap találkozunk: saját
                kertünkkel.
            </p>
            <li class="list-disc ml-3 text-xl my-3">
                Szelektív gyűjtőszigetek, házhoz menő gyűjtés
            </li>
            <p class="text-lg">
                A szelektív hulladékgyűjtő szigetekre elvihető az otthon
                elkülönítetten gyűjtött vizes, üdítős, vagy egyéb műanyag
                palack, színes és fehér üveg és papír (karton, újság, szórólap,
                hullámpapír, könyvek, prospektusok, stb). Ezzel egyidejűleg
                bevezetésre kerül a házhoz menő zsákos hulladékgyűjtés, ahol a
                lakosság a papír és műanyag hulladékokat zsákokban gyűjti. A
                zsákok kizárólag a hasznosítható csomagolási hulladék szelektív
                gyűjtésére használhatók. A szolgáltató bizonyos időszakonként, a
                lakosság előzetes tájékoztatásával az ingatlan elől szállítja el
                a kihelyezett zsákokat. Az üveget a gyűjtőpontokon felállított
                edényekben lehet elhelyezni.
            </p>
            <li class="list-disc ml-3 text-xl my-3">Hulladékudvar</li>
            <p class="text-lg mb-3">
                A szelektív gyűjtőszigeteken, vagy a zsákokban nem elhelyezhető
                háztartási hulladék, a nem komposztált zöldhulladék és egyéb
                hulladékfajták a gépjárművel megközelíthető hulladékudvarokon
                rakhatók le.
            </p>
            <p class="text-lg mb-3">
                Mit lehet a hulladékudvarokba térítésmentesen elvinni?
            </p>
            <ul class="text-lg">
                <li class="text-lg">
                    - papír – ez lehet akár nagy doboz is, ami nem fér a
                    szelektív gyűjtő konténerbe
                </li>
                <li class="text-lg">
                    - műanyag – PET palack, vagy bármilyen műanyag tárgy
                </li>
                <li class="text-lg">
                    - üveg – befőttes, szörpös, pezsgős, vagy bármilyen más nem
                    visszaváltható palack, sőt még ablaküveg is
                </li>
                <li class="text-lg">
                    - fém – italos dobozoktól a rozsdás vasig minden fémhulladék
                </li>
                <li class="text-lg">
                    - zöldhulladék – ha a komposztáló láda otthon kicsinek
                    bizonyul a hulladékudvarban is leadható
                </li>
                <li class="text-lg">
                    - különféle lom – bútor, lakástextil, rossz ruha
                </li>
                <li class="text-lg">
                    - veszélyes hulladék – vegyszer, festék, elem, akkumulátor,
                    izzók, fénycsövek, olaj, zsír, gumi, elektromos és
                    elektronikai berendezések
                </li>
            </ul>
            <li class="list-disc ml-3 text-xl my-3">Hulladékválogató mű</li>
            <p class="text-lg">
                A hulladékudvarokból, a szelektív gyűjtőszigetekről, a lakossági
                zsákos gyűjtésből származó szelektíven összegyűjtött hulladék a
                hulladékválogató műbe kerül. Itt zárt csarnokban történik a
                beszállított hulladékok átmeneti tárolása, tisztító válogatása,
                tömörítése és bálázása, majd a bálák tárolása. Ezután a bálákat
                feldolgozó üzemekbe szállítják, ahol másodnyersanyagként
                újrahasznosítják különböző termékek gyártására.
            </p>
        </div>
        <div class="border-b border-zinc-300 w-9/12 mt-4"></div>
        <!-- projektben resztvevok -->
        <div>
            <h1 class="text-2xl font-bold text-emerald-600 pt-5 mb-5">
                Projektben résztvevők
            </h1>
            <ul class="mb-3">
                <li class="font-bold text-lg">
                    NEMZETI FEJLESZTÉSI MINISZTÉRIUM
                </li>
                <li class="font-bold text-lg">
                    Környezeti És Energiahatékonysági Operatív Programokért
                    Felelős Helyettes
                </li>
                <li class="font-bold text-lg">Államtitkárság</li>
                <li class="font-bold text-lg">
                    Közműfejlesztési és Hulladékgazdálkodási Végrehajtási
                    Főosztály
                </li>
                <li class="font-bold text-lg">Hulladékgazdálkodási Osztály</li>
            </ul>
            <div class="grid grid-cols-2 max-[800px]:grid-cols-1 justify-items-stretch items-center text-lg">
                    <p class="font-bold">Közbeszerzési tanácsadó:</p>
                    <p>TriCSÓK Zrt, Biczi és Tuzson Ügyvédi Iroda</p>
                    <p class="font-bold">Projekt menedzser:</p>
                    <p>Forrás Unió Kft</p>
                    <p class="font-bold">PR szakértő:</p>
                    <p>Young and Partners Kommunikációs és Tanácsadó Kft</p>
                    <p class="font-bold">Mérnök:</p>
                    <p>
                        FŐBER Nemzetközi Ingatlanfejlesztő és Mérnöki Zrt, Főber
                        Mérnöki Zrt, Westber Mérnöki Iroda Kft
                    </p>
                    <p class="font-bold">Eszközbeszerzés:</p>
                    <p>SIEX Kft., Pappas Auto Magyarország Kft.</p>
                    <p class="font-bold">Kivitelezés:</p>
                    <p>ŐRSÉG-2013 Konzorcium</p>
    
            </div>
            <p class="text-xl font-bold my-5">
                Projektben résztvevők szerződései:
            </p>
            <ul class="text-lg">
                <a
                    class="text-emerald-600 hover:text-emerald-500 ease-in duration-200"
                    target="__blank"
                    href="{{
                        asset(
                            './pdf/keop111-2f-09-11-2012-001/projektben-resztvevok-szerzodesei/Kivitelezo_szerz.pdf'
                        )
                    }}"
                    ><li>Kivitelezői szerződés</li></a
                >
                <a
                    class="text-emerald-600 hover:text-emerald-500 ease-in duration-200"
                    target="__blank"
                    href="{{
                        asset(
                            './pdf/keop111-2f-09-11-2012-001/projektben-resztvevok-szerzodesei/Mernok_megbizasiszerzodes.pdf'
                        )
                    }}"
                    ><li>Mérnöki megbízási szerződés</li></a
                >
                <a
                    class="text-emerald-600 hover:text-emerald-500 ease-in duration-200"
                    target="__blank"
                    href="{{
                        asset(
                            './pdf/keop111-2f-09-11-2012-001/projektben-resztvevok-szerzodesei/NYDRHP_-_Kozbeszerzesi_szakerto.pdf'
                        )
                    }}"
                    ><li>Közbeszerzési szakértő - megbízási szerződés</li></a
                >
                <a
                    class="text-emerald-600 hover:text-emerald-500 ease-in duration-200"
                    target="__blank"
                    href="{{
                        asset(
                            './pdf/keop111-2f-09-11-2012-001/projektben-resztvevok-szerzodesei/NYDRHP_Eszkoz_szerz_I_resz.pdf'
                        )
                    }}"
                    ><li>Szállítási szerződés I. rész</li></a
                >
                <a
                    class="text-emerald-600 hover:text-emerald-500 ease-in duration-200"
                    target="__blank"
                    href="{{
                        asset(
                            './pdf/keop111-2f-09-11-2012-001/projektben-resztvevok-szerzodesei/NYDRHP_Eszkoz_szerz_II_resz.pdf'
                        )
                    }}"
                    ><li>Szállítási szerződés II. rész</li></a
                >
                <a
                    class="text-emerald-600 hover:text-emerald-500 ease-in duration-200"
                    target="__blank"
                    href="{{
                        asset(
                            './pdf/keop111-2f-09-11-2012-001/projektben-resztvevok-szerzodesei/NYDRHP_Eszkoz_szerz_III_resz.pdf'
                        )
                    }}"
                    ><li>Szállítási szerződés III. rész</li></a
                >
                <a
                    class="text-emerald-600 hover:text-emerald-500 ease-in duration-200"
                    target="__blank"
                    href="{{
                        asset(
                            './pdf/keop111-2f-09-11-2012-001/projektben-resztvevok-szerzodesei/PIU_szerz.pdf'
                        )
                    }}"
                    ><li>Projekt menedzseri megbízási szerződés</li></a
                >
                <a
                    class="text-emerald-600 hover:text-emerald-500 ease-in duration-200"
                    target="__blank"
                    href="{{
                        asset(
                            './pdf/keop111-2f-09-11-2012-001/projektben-resztvevok-szerzodesei/PR_vallalkozasiszerzodes.pdf'
                        )
                    }}"
                    ><li>PR vállalkozási szerződés</li></a
                >
            </ul>
        </div>
        <div class="border-b border-zinc-300 w-9/12 mt-4"></div>
        <!-- projekt dokumentumai -->
        <div class="mb-5">
            <div class="flex items-center gap-5">
                <i class="fa-solid fa-file-pdf text-4xl text-emerald-600"></i>
                <h1 class="text-2xl font-bold text-emerald-600 pt-5 mb-5">
                    Projekt dokumentumai
                </h1>
            </div>
            <h2 class="text-xl font-bold mt-5 mb-3">
                1.1. Pályázat dokumentumai
            </h2>
            <h3 class="text-lg font-bold mb-2">Beadott pályázat</h3>
            <ul>
                <a
                    class="text-emerald-600 hover:text-emerald-500 ease-in duration-200 text-lg"
                    target="__blank"
                    href="{{
                        asset(
                            './pdf/keop111-2f-09-11-2012-001/projekt-dokumentumai/adatlap.pdf'
                        )
                    }}"
                    ><li>Adatlap</li></a
                >
                <a
                    class="text-emerald-600 hover:text-emerald-500 ease-in duration-200 text-lg"
                    target="__blank"
                    href="{{
                        asset(
                            './pdf/keop111-2f-09-11-2012-001/projekt-dokumentumai/KEOP_111_RMT_Nyugat_Dunantul.pdf'
                        )
                    }}"
                    ><li>KEOP 111 RMT Nyugat Dunantul</li></a
                >
            </ul>
            <h3 class="text-lg font-bold my-3">Hiánypótlás</h3>
            <ul>
                <a
                    class="text-emerald-600 hover:text-emerald-500 ease-in duration-200 text-lg"
                    target="__blank"
                    href="{{
                        asset(
                            './pdf/keop111-2f-09-11-2012-001/projekt-dokumentumai/Hianypotlas.pdf'
                        )
                    }}"
                    ><li>Hianypotlas</li></a
                >
                <a
                    class="text-emerald-600 hover:text-emerald-500 ease-in duration-200 text-lg"
                    target="__blank"
                    href="{{
                        asset(
                            './pdf/keop111-2f-09-11-2012-001/projekt-dokumentumai/I_I_palyazati_adatlap.pdf'
                        )
                    }}"
                    ><li>II palyazati adatlap</li></a
                >
                <a
                    class="text-emerald-600 hover:text-emerald-500 ease-in duration-200 text-lg"
                    target="__blank"
                    href="{{
                        asset(
                            './pdf/keop111-2f-09-11-2012-001/projekt-dokumentumai/I_II_koltsegvetesi_tabla.pdf'
                        )
                    }}"
                    ><li>III koltsegvetesi tabla</li></a
                >
                <a
                    class="text-emerald-600 hover:text-emerald-500 ease-in duration-200 text-lg"
                    target="__blank"
                    href="{{
                        asset(
                            './pdf/keop111-2f-09-11-2012-001/projekt-dokumentumai/NYDRHP Tulajdon viszonyok.pdf'
                        )
                    }}"
                    ><li>NYDRHP Tulajdon viszonyok</li></a
                >
            </ul>
            <a
                class="text-zinc-700 hover:text-zinc-600 ease-in duration-200 text-lg"
                target="__blank"
                href="{{
                    asset(
                        './pdf/keop111-2f-09-11-2012-001/projekt-dokumentumai/Támogatási_Szerződés_KEOP-1.pdf'
                    )
                }}"
                ><h2 class="text-xl font-bold mt-5 mb-3">
                    1.2. Támogatási szerződés
                </h2></a
            >

            <ul>
                <a
                    class="text-emerald-600 hover:text-emerald-500 ease-in duration-200 text-lg"
                    target="__blank"
                    href="{{
                        asset(
                            './pdf/keop111-2f-09-11-2012-001/projekt-dokumentumai/tsz módosítás.jpg'
                        )
                    }}"
                    ><li>1. számú módosítás 1.oldal</li></a
                >
                <a
                    class="text-emerald-600 hover:text-emerald-500 ease-in duration-200 text-lg"
                    target="__blank"
                    href="{{
                        asset(
                            './pdf/keop111-2f-09-11-2012-001/projekt-dokumentumai/tsz módosítás_2.jpg'
                        )
                    }}"
                    ><li>1. számú módosítás 2.oldal</li></a
                >
                <a
                    class="text-emerald-600 hover:text-emerald-500 ease-in duration-200 text-lg"
                    target="__blank"
                    href="{{
                        asset(
                            './pdf/keop111-2f-09-11-2012-001/projekt-dokumentumai/tsz módosítás_3.jpg'
                        )
                    }}"
                    ><li>1. számú módosítás 3.oldal</li></a
                >
                <a
                    class="text-emerald-600 hover:text-emerald-500 ease-in duration-200 text-lg"
                    target="__blank"
                    href="{{
                        asset(
                            './pdf/keop111-2f-09-11-2012-001/projekt-dokumentumai/tsz módosítás_4.jpg'
                        )
                    }}"
                    ><li>1. számú módosítás 4.oldal</li></a
                >
                <a
                    class="text-emerald-600 hover:text-emerald-500 ease-in duration-200 text-lg"
                    target="__blank"
                    href="{{
                        asset(
                            './pdf/keop111-2f-09-11-2012-001/projekt-dokumentumai/tsz módosítás_5.jpg'
                        )
                    }}"
                    ><li>1. számú módosítás 5.oldal</li></a
                >
                <div class="my-5"></div>
                <a
                    class="text-emerald-600 hover:text-emerald-500 ease-in duration-200 text-lg"
                    target="__blank"
                    href="{{
                        asset(
                            './pdf/keop111-2f-09-11-2012-001/projekt-dokumentumai/Társulási M..2013.07.01. mellékl.pdf'
                        )
                    }}"
                    ><li>1/A számú melléklet</li></a
                >
                <div class="my-5"></div>
                <a
                    class="text-emerald-600 hover:text-emerald-500 ease-in duration-200 text-lg"
                    target="__blank"
                    href="{{
                        asset(
                            './pdf/keop111-2f-09-11-2012-001/projekt-dokumentumai/Támogatási szerződés mód. II..pdf'
                        )
                    }}"
                    ><li>2. számú módosítás</li></a
                >
                <a
                    class="text-emerald-600 hover:text-emerald-500 ease-in duration-200 text-lg"
                    target="__blank"
                    href="{{
                        asset(
                            './pdf/keop111-2f-09-11-2012-001/projekt-dokumentumai/Támogatási szerződés mód. III..pdf'
                        )
                    }}"
                    ><li>3. számú módosítás</li></a
                >
                <a
                    class="text-emerald-600 hover:text-emerald-500 ease-in duration-200 text-lg"
                    target="__blank"
                    href="{{
                        asset(
                            './pdf/keop111-2f-09-11-2012-001/projekt-dokumentumai/Támogatási szerződés mód. IV..pdf'
                        )
                    }}"
                    ><li>4. számú módosítás</li></a
                >
                <a
                    class="text-emerald-600 hover:text-emerald-500 ease-in duration-200 text-lg"
                    target="__blank"
                    href="{{
                        asset(
                            './pdf/keop111-2f-09-11-2012-001/projekt-dokumentumai/5. Sz Támogatási szerz. mód.pdf'
                        )
                    }}"
                    ><li>5. számú módosítás</li></a
                >
                <a
                    class="text-emerald-600 hover:text-emerald-500 ease-in duration-200 text-lg"
                    target="__blank"
                    href="{{
                        asset(
                            './pdf/keop111-2f-09-11-2012-001/projekt-dokumentumai/NYDRHP_TSZ_mod_6.pdf'
                        )
                    }}"
                    ><li>6. számú módosítás</li></a
                >
                <a
                    class="text-emerald-600 hover:text-emerald-500 ease-in duration-200 text-lg"
                    target="__blank"
                    href="{{
                        asset(
                            './pdf/keop111-2f-09-11-2012-001/projekt-dokumentumai/Tám. szer. 7..pdf'
                        )
                    }}"
                    ><li>7. számú módosítás</li></a
                >
                <div class="my-8"></div>
                <a
                    class="text-emerald-600 hover:text-emerald-500 ease-in duration-200 text-lg"
                    target="__blank"
                    href="{{
                        asset(
                            './pdf/keop111-2f-09-11-2012-001/projekt-dokumentumai/2013-OJS151-261939-hu.pdf'
                        )
                    }}"
                    ><li>Korrigendum (2013/S 151-261939)</li></a
                >
                <div class="my-3"></div>
                <a
                    class="text-emerald-600 hover:text-emerald-500 ease-in duration-200 text-lg"
                    target="__blank"
                    href="{{
                        asset(
                            './pdf/keop111-2f-09-11-2012-001/projekt-dokumentumai/2013-OJS157-273228-hu.pdf'
                        )
                    }}"
                    ><li>Korrigendum (2013/S 157-273228)</li></a
                >
                <div class="my-3"></div>
                <a
                    class="text-emerald-600 hover:text-emerald-500 ease-in duration-200 text-lg"
                    target="__blank"
                    href="{{
                        asset(
                            './pdf/keop111-2f-09-11-2012-001/projekt-dokumentumai/üzemeltetési szerződés_170330_aláírt.pdf'
                        )
                    }}"
                    ><li>1.3. Üzemeltetési szerződés</li></a
                >
            </ul>
        </div>
    </div>
</div>
@endsection
